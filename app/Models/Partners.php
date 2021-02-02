<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Partners extends Model
{
    use HasFactory;

    protected $table = 'partners';

    protected $fillable = ['file'];
    public static $large_image_path = 'storage/partners/large/';
    public static $medium_image_path = 'storage/partners/medium/';
    public static $small_image_path = 'storage/partners/small/';
    public static $image = 'storage/home/picture/';

    public function translate()
    {
        return $this->hasMany(Translate::class, 'page_id', 'id');

    }

    public static function storePartners($request)
    {

        $partners = new self();
        return self::savePartners($request, $partners);
    }

    public static function updatePartners($request,$id)
    {
        $partners = Partners::find($id);
//        dd($partners);
        if ($request->hasFile('file')) {
            Storage::delete(Self::$large_image_path . $partners->file);
//            Storage::delete('public/partners/medium/'.$partners->file);
            Storage::delete('public/partners/small/' . $partners->file);

        }
        return self::savePartners($request, $partners);


    }

    public static function savePartners($request, $partners)
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

                $partners->file = $filename;
            }
        }
//        $partners->type = $request['type'];
        $partners->save();
        Translate::storeTranslate($request, $partners->id);

    }

    public static function deleteItemRow($id)
    {
        $partners = self::find($id);
        Storage::delete('public/partners/large/' . $partners->file);
        Storage::delete('public/partners/medium/' . $partners->file);
        Storage::delete('public/partners/small/' . $partners->file);

        Partners::where('id', $id)->delete();
        Translate::where('page_id', $id)->where('type', config('type.partners'))->delete();
        return true;

    }
}


