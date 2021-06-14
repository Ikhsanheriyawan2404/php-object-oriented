<?php

require_once "data/Car.php";

use Data\{Avanza};

$car = new Avanza();
// var_dump($car);
$car->drive();
echo $car->getTire();