<?php
namespace App\Traits;
Trait uploadfile
{
public function upload ($imageFile,$path){

    $imgExt = $imageFile->getClientOriginalExtension();
    $fileName = time() . '.' . $imgExt;
    $imageFile->move($path, $fileName);
    return $fileName;

}

}