<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

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
            Storage::delete(Self::$large_image_path . $products->file);
//            Storage::delete('public/products/medium/'.$products->file);
            Storage::delete('public/products/small/' . $products->file);

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
//
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
        Storage::delete('public/products/large/' . $products->file);
        Storage::delete('public/products/medium/' . $products->file);
        Storage::delete('public/products/small/' . $products->file);

        Product::where('id', $id)->delete();
        Translate::where('page_id', $id)->where('type', config('type.products'))->delete();
        return true;

    }
}
