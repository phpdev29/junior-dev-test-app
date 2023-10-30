<?php

use App\Controller\ProductController;
use App\Core\Request;
use App\Core\Router;

require_once (__DIR__) . '/../vendor/autoload.php';
require_once(__DIR__) . '/../app/config/Config.php';

$router = new Router(new Request());

$router->get('/', [ProductController::class, 'show']);
$router->get('/add-products', [ProductController::class, 'add']);
$router->post('/delete', [ProductController::class, 'delete']);
$router->post('/store', [ProductController::class, 'store']);

$router->go();
