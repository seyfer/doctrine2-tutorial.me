<?php

require_once "bootstrap.php";

$id = $argv[1];
if (!$id) {
    die("Need id in arg1\n");
}

$newName = $argv[2];
if (!$id) {
    die("Need new name in arg2\n");
}

$product = $entityManager->find('Product', $id);

if ($product === null) {
    echo "Product $id does not exist.\n";
    exit(1);
}

$product->setName($newName);

//$entityManager->persist($product);
$entityManager->flush();
