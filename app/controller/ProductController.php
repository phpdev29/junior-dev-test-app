<?php

    namespace App\Controller;
    use App\Model\Products\Product;

    class ProductController extends BaseController  {

        public function show() {
            
            $products = new Product;
            return $this->view('list', $products->find());
        }

        public function add() {

            return $this->view('add');
        }

        public function store() {

            $post = $_POST;
            $validate = TRUE;
            
            if ($this->validate($post, $validate == TRUE)) {
                $product = $this->model(ucfirst($post['productType']));
                $product->add();
            } 

            $this->redirect('/');
        }

        public function delete() {

            $post = $_POST;
            $product = new Product;
            $product->remove($post);
            $this->redirect('/');
        }
    }