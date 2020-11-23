<?php

namespace cs174\hw4\adapters;

use Monolog\Logger;
use Monolog\Handler\StreamHandler;

class AjaxAdapter {
    public function getRequestBody(){
        var_dump(file_get_contents('php://input'));
        $logger = new Logger('swaps');
        $logger->pushHandler(new StreamHandler('./src/resources/swaps.log', Logger::DEBUG));
        $logger->info(file_get_contents('php://input'));
    }
}
