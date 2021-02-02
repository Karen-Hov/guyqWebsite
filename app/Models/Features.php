<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class Features extends Model
{
    use HasFactory;

    protected $table = 'features';

    protected $fillable = ['file'];
    public static $large_image_path = 'storage/features/large/';
    public static $medium_image_path = 'storage/features/medium/';
    public static $small_image_path = 'storage/features/small/';
    public static $image = 'storage/home/picture/';

    public function translate()
    {
        return $this->hasMany(Translate::class, 'page_id', 'id');

    }

    public static function storeFeatures($request)
    {

        $features = new self();
        return self::saveFeatures($request, $features);
    }

    public static function updateFeatures($request,$id)
    {
        $features = Features::find($id);
        if ($request->hasFile('file')) {
            unlink(public_path('storage/features/'.$features->file));
            unlink(public_path(Self::$large_image_path . $features->file));
            unlink(public_path(Self::$medium_image_path . $features->file));
            unlink(public_path(Self::$small_image_path . $features->file));
        }
        return self::saveFeatures($request, $features);
    }

    public static function saveFeatures($request, $features)
    {
        if ($request->hasFile('file')) {
            $image_tmp = $request['file'];
            if ($image_tmp->isValid()) {
                $extension = $image_tmp->getClientOriginalExtension();
                $filename = time() . '.' . $extension;
                Image::make($image_tmp)->save(public_path('storage/features/'. $filename));
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

                $features->file = $filename;
            }
        }
//        $features->type = $request['type'];
        $features->save();
        Translate::storeTranslate($request, $features->id);

    }

    public static function deleteItemRow($id)
    {
        $features = self::find($id);
        unlink(public_path('storage/features/'.$features->file));
        unlink(public_path(Self::$large_image_path . $features->file));
        unlink(public_path(Self::$medium_image_path . $features->file));
        unlink(public_path(Self::$small_image_path . $features->file));

        Features::where('id', $id)->delete();
        Translate::where('page_id', $id)->where('type', config('type.features'))->delete();
        return true;

    }
}


