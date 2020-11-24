<?php

namespace cs174\hw4\adapters;

use cs174\hw4\models as M;
use Monolog\Logger;
use Monolog\Handler\StreamHandler;

class ImgAdapter {
    private $imgFileModel;

    public function imgAdapter() {
        $this->imgFileModel = new M\ImgModel();
        if(isset($_FILES["imgPath"])) {
            $uploadOk = true;
            $target_file = "./src/resources/active_image.jpg";
            $imageType = $_FILES["imgPath"]["type"];

            $logger = new Logger('imageUploads');
            $logger->pushHandler(new StreamHandler('./src/resources/jigsaw.log', Logger::DEBUG));

            if ($imageType != "image/png" && $imageType != "image/jpeg" && $imageType != "image/gif"){
                echo "Upload Failed. File must be PNG, JPG, or GIF";
                $logger->info('Upload Failed. File must be PNG, JPG, or GIF');
                $uploadOk = false;
            }
            if ($_FILES["imgPath"]["size"] > 2000000){
                echo "Upload Failed. File must be under 2MB";
                $logger->info('Upload Failed. File must be under 2MB');
                $uploadOk = false;
            }
            if($uploadOk){
                $this->imgFileModel->uploadImg($target_file);
                $this->imgFileModel->scaleAndCropImg($target_file);
                $this->imgFileModel->createPermutationFile();
                $logger->info('Image successfully uploaded!');
                echo "Image successfully uploaded!";
            }
        }
        // if(isset($_REQUEST["a"])){
        //     if($_REQUEST["a"] == "refresh"){
        //         $this->imgFileModel->createPermutationFile();
        //     }
        // }
        else{
            $this->imgFileModel->createPermutationFile();
        }
    }
}