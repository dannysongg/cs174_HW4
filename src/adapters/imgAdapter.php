<?php

namespace cs174\hw4\adapters;

require_once('./src/models/imgModel.php');

use cs174\hw4\models as M;

class ImgAdapter {
    private $imgFileModel;

    public function imgAdapter() {
        if(isset($_POST["submit"])) {
            $this->imgFileModel = new M\ImgModel();
            $target_file = "./src/resources/active_image.jpg";
            var_dump($_FILES);
            $this->imgFileModel->uploadImg($target_file);
        }
    }
}