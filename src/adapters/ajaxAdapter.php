<?php

namespace cs174\hw4\adapters;

class AjaxAdapter {
    public function getRequestBody(){
        var_dump(file_get_contents('php://input'));
    }
}
