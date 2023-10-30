<?php

    namespace App\Model\Products;

    class Book extends Product {

        public function add() {

            $_POST['attribute'] = 'Weight: ' . $_POST['weight'] . 'KG';
            $this->create();
        }
    }