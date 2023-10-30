<?php

    namespace App\Models; 
    use App\Config\Database;
    use App\Model\Products\Product;

    abstract class Model extends Database {

        public function find() {

            $products = new Product;
            $all = "SELECT * FROM $products->tableName ORDER BY (id) DESC";
            $find = $this->db()->query($all);
            $results = $find->num_rows;

            if ($results > 0) {
                while ($row = $find->fetch_assoc()) {  
                    $data[] = $row;
                }     
                return $data;
            }
        }

        public function create() {

            $create = new Product;
            $products = "INSERT INTO $create->tableName (sku, name, price, type, attribute) VALUES ('" . $create->setSku() . "','" . $create->setName() . "','" . $create->setPrice() . "','" . $create->setType() . "','" . $create->setAttribute() . "')";
            $save = $this->db()->query($products);
        }

        public function remove(array $key) {

            $items = $key['checkbox'] ?? '';
            foreach($items as $checkbox) {
                $delete = "DELETE FROM products WHERE sku = '$checkbox'";
                $this->db()->query($delete);
            }  
            return $key;
        }
    }