<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Pricing extends Model
{
    use HasFactory;

    protected $table = 'pricing';

    protected $fillable = ['file'];
    public static $large_image_path = 'storage/pricing/large/';
    public static $medium_image_path = 'storage/pricing/medium/';
    public static $small_image_path = 'storage/pricing/small/';
    public static $image = 'storage/home/picture/';

    public function translate()
    {
        return $this->hasMany(Translate::class, 'page_id', 'id');
    }

    public static function storePricing($request)
    {

        $pricing = new self();
        return self::savePricing($request, $pricing);
    }

    public static function updatePricing($request,$id)
    {
        $pricing = Pricing::find($id);
//        dd($pricing);
        if ($request->hasFile('file')) {
            Storage::delete(Self::$large_image_path . $pricing->file);
//            Storage::delete('public/pricing/medium/'.$pricing->file);
            Storage::delete('public/pricing/small/' . $pricing->file);

        }
        return self::savePricing($request, $pricing);


    }

    public static function savePricing($request, $pricing)
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

                $pricing->file = $filename;
            }
        }
        $pricing->price = $request['price'];
        $pricing->save();
        Translate::storeTranslate($request, $pricing->id);

    }

    public static function deleteItemRow($id)
    {
        $pricing = self::find($id);
        Storage::delete('public/pricing/large/' . $pricing->file);
        Storage::delete('public/pricing/medium/' . $pricing->file);
        Storage::delete('public/pricing/small/' . $pricing->file);

        Pricing::where('id', $id)->delete();
        Translate::where('page_id', $id)->where('type', config('type.pricing'))->delete();
        return true;

    }
}
