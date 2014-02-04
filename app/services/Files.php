<?php

namespace App\Services;

use Image,
    File,
    Eloquent;

class Files {

    public static function createFile($file, $path, $type = 'undefined') {

        // Upload the File.
        $filePath = Image::upload($file, $path);

        // Create a database registration.
        if (!empty($filePath)) {
            $filePathArray = explode('/', $filePath);
            $fileName = array_pop($filePathArray);
            Eloquent::unguard();
            $file = File::create(array(
                        'name' => $fileName,
                        'path' => $filePath,
                        'type' => $type,
            ));

            if (isset($file->fid)) {
                return $file->fid;
            }
        }
    }

    public static function deleteFile($fid) {
        $file = File::find($fid);
        if (!$file)
            return FALSE;
        
        if (!@unlink(public_path() . $file->path)) {
            return FALSE;
        }

        $file->delete();
        return TRUE;
    }

}
