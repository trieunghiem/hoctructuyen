<?php

namespace App\Lib;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Image;

class LibImageVideoController extends Controller
{

    public static function checkTypeExtensionFile($file)
    {
        $extensionImage = array("png", "jpg", "jpeg", "gif");

        $extensionVideo = array("mp3", "mp4");

        $ex = strtolower($file->getClientOriginalExtension());

        if (in_array($ex, $extensionImage)) {
            return 'image';
        } else if (in_array($ex, $extensionVideo)) {
            return 'video';
        }
        
        return 'other';
    }



    public static function saveAvatarCourse($file)
    {
        $avatar = Image::make($file)
                    ->resize(400, 200)
                    ->encode($file->getClientOriginalExtension(),60);  // 60 la chat luong anh

        $avatarName = pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME) . \Carbon\Carbon::now()->timestamp . '.' . $file->getClientOriginalExtension();

        if(Storage::put('public/image/' . $avatarName, $avatar)){
            return 'image/' . $avatarName;
        }else{
            return 'false';
        }
    }

    public static function deleteFile($path)
    {
        if(Storage::exists('public/' . $path)){
            Storage::delete('public/' . $path);
        }

        return;
    }


    public static function saveVideo($file, $alias)
    {
        if($alias == ''){
            $name = pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME) . \Carbon\Carbon::now()->timestamp . '.' . $file->getClientOriginalExtension();
        }else{
            $name = $alias . \Carbon\Carbon::now()->timestamp . '.' . $file->getClientOriginalExtension();
        }

        if(Storage::putFileAs('public/video/', $file, $name)){
            return 'video/' . $name;
        }else{
            return 'false';
        }
    }


}