<?php
namespace cs174\hw4\models;

class ImgModel {
    public function uploadImg($target_file) {
        move_uploaded_file($_FILES["imgPath"]["tmp_name"], $target_file);
    }
}
