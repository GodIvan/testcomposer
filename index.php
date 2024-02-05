<?php 
include __DIR__ . '/vendor/autoload.php';
use Dodivan\Testcomposer\App\ProductManager;
$product = ProductManager::getInstance()->getProductName();
echo $product;