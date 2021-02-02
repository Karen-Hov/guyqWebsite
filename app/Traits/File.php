<?php

namespace App\Http\Traits;


use Illuminate\Http\Request;

use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

//use Image;
//use Intervention\Image\Image;

trait File
{

    public static function saveFile($file, $path, string $name = null)
    {
        try {
            //Get filename with the extension
            $filenameWithExt = $file->getClientOriginalName();

            //Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);

            //Get just extension
            $extension = $file->getClientOriginalExtension();

            //filname to store
            $fileNameToStore = $filename . '_' . ($name ?? microtime()) . '.' . $extension;

            //upload image
            $pathRep = $file->storeAs($path, $fileNameToStore);

        } catch (Exception $e) {
            return false;
        }
        return $fileNameToStore;
    }

    public static function deleteFile($path, $file)
    {
        if ($file) {
            Storage::delete($path . $file);
        }
    }

}
