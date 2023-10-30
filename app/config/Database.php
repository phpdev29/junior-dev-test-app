<?php

    namespace App\Config;

    class Database {

        public function db() {
    
            $conn = new \mysqli(DBHOST, DBUSER, DBPASS, DBNAME);
        
            if($conn->connect_error) {
    
                die ("<h1>Database Connection Failed</h1>");
            }

            return $conn;
        }
    }