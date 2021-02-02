<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class Product extends Model
{
    use HasFactory;

    protected $table = 'products';

    protected $fillable = ['file'];
    public static $large_image_path = 'storage/products/large/';
    public static $medium_image_path = 'storage/products/medium/';
    public static $small_image_path = 'storage/products/small/';
    public static $image = 'storage/home/picture/';

    public function translate()
    {
        return $this->hasMany(Translate::class, 'page_id', 'id');
    }

    public static function storeProduct($request)
    {

        $products = new self();
        return self::saveProduct($request, $products);
    }

    public static function updateProduct($request,$id)
    {
        $products = Product::find($id);
//        dd($products);
        if ($request->hasFile('file')) {
            unlink(public_path('storage/products/'.$products->file));
            unlink(public_path(Self::$large_image_path . $products->file));
            unlink(public_path(Self::$medium_image_path . $products->file));
            unlink(public_path(Self::$small_image_path . $products->file));

        }
        return self::saveProduct($request, $products);


    }

    public static function saveProduct($request, $products)
    {
//dd($request->all());
        if ($request->hasFile('file')) {
            $image_tmp = $request['file'];
            if ($image_tmp->isValid()) {
                $extension = $image_tmp->getClientOriginalExtension();
                $filename = time() . '.' . $extension;
                Image::make($image_tmp)->save(public_path('storage/products/'. $filename));
                Image::make($image_tmp)->resize(720, 550)->save(Self::$large_image_path. $filename);
                Image::make($image_tmp)->resize(400, 350)->save(Self::$medium_image_path. $filename);
                Image::make($image_tmp)->resize(210, 180)->save(Self::$small_image_path. $filename);
//                    Image::make($image_tmp)->resize(640,  null, function ($constraint) {
//                        $constraint->aspectRatio();
//                    })->save(Self::$large_image_path. $filename);
////
//                    Image::make($image_tmp)->resize(640,  null, function ($constraint) {
//                        $constraint->aspectRatio();
//                    })->save(Self::$medium_image_path. $filename);
//
//                    Image::make($image_tmp)->resize(200,  null, function ($constraint) {
//                        $constraint->aspectRatio();
//                    })->save(Self::$small_image_path. $filename);
//                Image::make($image_tmp)->save(Self::$image . $filename);

                $products->file = $filename;
            }
        }
//        $products->type = $request['type'];
        $products->save();
        Translate::storeTranslate($request, $products->id);

    }

    public static function deleteItemRow($id)
    {
        $products = self::find($id);
        unlink(public_path('storage/products/'.$products->file));
        unlink(public_path(Self::$large_image_path . $products->file));
        unlink(public_path(Self::$medium_image_path . $products->file));
        unlink(public_path(Self::$small_image_path . $products->file));

        Product::where('id', $id)->delete();
        Translate::where('page_id', $id)->where('type', config('type.products'))->delete();
        return true;

    }
}
