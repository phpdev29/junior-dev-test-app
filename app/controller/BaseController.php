<?php

    namespace App\Controller; 
    use App\Model\Products\Product;
    use App\Core\NotFoundException;

    abstract class BaseController extends Product {

        public function view(string $page, array $data = NULL) {

            if(file_exists(__DIR__ . "/../view/$page.php")) {
                include_once(__DIR__ . "/../view/$page.php");
            } else {
                $e = new NotFoundException();
                $e->render();
            }
        }

        public function redirect(string $url) {

            if (headers_sent() === FALSE) {
                header('Location: ' . $url, TRUE);
            }
        }

        public function validate($post, $validate) {
            
            $product = new Product;
            $sku = $product->setSku();
            $sql = "SELECT sku FROM $product->tableName WHERE sku = '$sku'";
            $result = $this->db()->query($sql);
            $numRows = $result->num_rows;

            if ($numRows === 0) {
                $result->fetch_assoc();
                return $validate;
            }
        }

        public function model(string $modelName) {

            $model = 'App\\Model\\Products\\' . $modelName;
            return new $model;
        }

    }