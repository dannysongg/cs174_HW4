<?php

namespace cs174\hw4\models;


$permString = file_get_contents('php://input');
$permFile = fopen("../resources/active_image.txt", "w");
if (flock($permFile, LOCK_EX)){
    fwrite($permFile, $permString);
    fflush($permFile);
    flock($permFile, LOCK_UN);
}
