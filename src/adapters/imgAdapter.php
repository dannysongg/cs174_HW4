<?php

namespace cs174\hw4\adapters;

use cs174\hw4\models as M;

class ImgAdapter {
    private $imgFileModel;

    public function imgAdapter() {
        if(isset($_POST["submit"])) {
            $uploadOk = true;
            $this->imgFileModel = new M\ImgModel();
            $target_file = "./src/resources/active_image.jpg";
            $imageType = $_FILES["imgPath"]["type"];
            if ($imageType != "image/png" && $imageType != "image/jpeg" && $imageType != "image/gif"){
                echo "File must be PNG, JPG, or GIF";
                $uploadOk = false;
            }
            if ($_FILES["imgPath"]["size"] > 2000000){
                echo "File must be under 2MB";
                $uploadOk = false;
            }
            if($uploadOk){
                $this->imgFileModel->uploadImg($target_file);
                $this->imgFileModel->scaleAndCropImg($target_file);
                $this->imgFileModel->createPermutationFile();
                echo "Image successfully uploaded!";
            }
        }
    }
}