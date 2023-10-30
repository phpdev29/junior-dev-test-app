<?php

    namespace App\Model\Products;
    use App\Models\Model;

    class Product extends Model {

        public string $tableName = 'products';
        private $sku;
        private $name;
        private $price;
        private $type;
        private $attribute;

        private function getSku() {
            return $this->sku = $_POST['sku'];
        }

        private function getName() {
            return $this->name = $_POST['name'];
        }

        private function getPrice() {
            return $this->price = $_POST['price'];
        }

        private function getType() {
            return $this->type = $_POST['productType'];
        }

        private function getAttribute() {
            return $this->attribute = $_POST['attribute'];
        }

        public function setSku() {
            return $this->getSku();
        }

        public function setName() {
            return $this->getName();
        }

        public function setPrice() {
            return $this->getPrice();
        }

        public function setType() {
            return $this->getType();
        }

        public function setAttribute() {
            return $this->getAttribute();
        }
    }