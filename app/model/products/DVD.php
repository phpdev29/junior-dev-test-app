<?php

    namespace App\Model\Products;

    class DVD extends Product {

        public function add() {

            $_POST['attribute'] = 'Size: ' . $_POST['size'] . 'MB';
            $this->create();
        }
    }