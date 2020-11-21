<?php
namespace cs174\hw4\models;

class ImgModel {
    public function uploadImg($target_file) {
        move_uploaded_file($_FILES["imgPath"]["tmp_name"], $target_file);
    }
    public function scaleAndCropImg($target_file) {
        $image = imagecreatefromjpeg($target_file);
        $imgSize = getimagesize($target_file);
        if ($imgSize[0] < $imgSize[1]){
            $image = imagescale($image, 360);
        }
        else{
            $image = imagescale($image, -1, 360);
        }
        $scaledWidth = imagesx($image);
        $croppedImage = imagecrop($image, ['x' => ($scaledWidth/2)-180, 'y' => 0, 'width' => 360, 'height' => 360]);
        imagejpeg($croppedImage, $target_file);
    }
}
