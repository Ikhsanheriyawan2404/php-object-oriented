<?php

require_once "data/Category.php";

$category = new Category();
// $category->name = "Ikhsan"; tidak bisa dipanggil
$category->setName("Ikhsan");
$category->setExpensive(true);
// Sesudah divalidasi, tidak boleh kosong;
$category->setName("");

echo "Name : {$category->getName()}" . PHP_EOL;
echo "Expensive : {$category->isExpensive()}" . PHP_EOL;