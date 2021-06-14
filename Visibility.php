<?php

require_once "data/Product.php";
$product = new Product("Apple", 20000);

// echo $product->name; error because can't access private property.
echo $product->getName() . PHP_EOL;
echo $product->getPrice() . PHP_EOL;

$dummy = new ProductDummy("Orange", 15000);
$dummy->info();