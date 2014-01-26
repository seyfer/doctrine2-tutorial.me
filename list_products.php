<?php

require_once 'bootstrap.php';

$productRepository = $entityManager->getRepository("Product");
$products          = $productRepository->findAll();

//var_export($products);

foreach ($products as $product) {
    echo sprintf("-%s\n", $product->getName());
}