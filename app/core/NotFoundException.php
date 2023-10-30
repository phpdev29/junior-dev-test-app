<?php

namespace App\Core;

use Exception;

class NotFoundException extends Exception
{
    function render() {
        
        http_response_code(404);
        if(file_exists(__DIR__ . "/../view/errors/404.php")) {
            include_once(__DIR__ .  "/../view/errors/404.php");
        die();

        }
    }
}