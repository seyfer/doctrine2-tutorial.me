<?php

require_once "bootstrap.php";

$id = $argv[1];

if (!$id) {
    die("Need id \n");
}

$product = $entityManager->find('Product', $id);


if ($product === null) {
    echo "No product found.\n";
    exit(1);
}

echo sprintf("-%s\n", $product->getName());
