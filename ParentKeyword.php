<?php

require_once "data/Shape.php";

use Data\{Shape, Rectangle};

$shape = new Shape();
echo $shape->getCorner() . PHP_EOL;

$rectangle = new Rectangle();
echo $rectangle->getCorner() . PHP_EOL;
echo $rectangle->getShapeCorner() . PHP_EOL;
// echo $rectangle->parent::getCorner() . PHP_EOL; NGGAK Bisa