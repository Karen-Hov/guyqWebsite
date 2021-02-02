<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;


class AboutUs extends Model
{
    use HasFactory;
    protected $table = 'about_us';

    protected $fillable = ['file'];
    public static $large_image_path = 'storage/about_us/large/';
    public static $medium_image_path = 'storage/about_us/medium/';
    public static $small_image_path = 'storage/about_us/small/';
    public static $image = 'storage/home/picture/';

    public function translate()
    {
        return $this->hasMany(Translate::class, 'page_id', 'id');
    }

    public static function storeAboutUs($request)
    {

        $about_us = new self();
        return self::saveAboutUs($request, $about_us);
    }

    public static function updateAboutUs($request,$id)
    {
        $about_us = AboutUs::find($id);
//        dd($about_us);
        if ($request->hasFile('file')) {
            if ($request->file){
                unlink(public_path('storage/about_us/'.$about_us->file));
                unlink(public_path('storage/about_us/small/'.$about_us->file));
                unlink(public_path('storage/about_us/medium/'.$about_us->file));
                unlink(public_path('storage/about_us/large/'.$about_us->file));
            }
        }
        return self::saveAboutUs($request, $about_us);
    }

    public static function saveAboutUs($request, $about_us)
    {
        if ($request->hasFile('file')) {
            $image_tmp = $request['file'];
            if ($image_tmp->isValid()) {
                $extension = $image_tmp->getClientOriginalExtension();
                $filename = time() . '.' . $extension;
                Image::make($image_tmp)->save(public_path('storage/about_us/' . $filename));
                Image::make($image_tmp)->resize(720, 550)->save(Self::$large_image_path. $filename);
                Image::make($image_tmp)->resize(400, 350)->save(Self::$medium_image_path. $filename);
                Image::make($image_tmp)->resize(210, 180)->save(Self::$small_image_path. $filename);

//                $images = $about_us::saveFile($request['file'], 'public/brend');
//                $images = $about_us::saveFile($request['file'], 'public/brend/large');
//                $images = $about_us::saveFile($request['file'], 'public/brend/medium');
//                $images = $about_us::saveFile($request['file'], 'public/brend/small');
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

                $about_us->file = $filename;
            }
        }
        $about_us->save();
        Translate::storeTranslate($request, $about_us->id);
    }
    public static function deleteItemRow($id)
    {
        $about_us = self::find($id);
        Storage::delete('public/about_us/large/' . $about_us->file);
        Storage::delete('public/about_us/medium/' . $about_us->file);
        Storage::delete('public/about_us/small/' . $about_us->file);
        AboutUs::where('id', $id)->delete();
        Tranlate::where('page_id', $id)->where('type', config('type.about_us'))->delete();
        return true;

    }
}

