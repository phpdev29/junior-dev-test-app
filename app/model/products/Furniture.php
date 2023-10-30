<?php

    namespace App\Model\Products;

    class Furniture extends Product {

        public function add() {

            $_POST['attribute'] = 'Dimensions: ' . $_POST['height'] . "x" . $_POST['width'] . "x" . $post['length'];
            $this->create();
        }
    }