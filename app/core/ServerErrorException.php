<?php

namespace App\Core;
use Exception;

class ServerErrorException extends Exception
{
    function render()
    {
        http_response_code(500);
        if(file_exists(__DIR__ . "/../view/errors/500.php")) {
            include_once(__DIR__ .  "/../view/errors/500.php");
        }
        die();
    }
}