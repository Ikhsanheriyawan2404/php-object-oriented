<?php

require_once "data/Animal.php";

use Data\{Animal, Cat, Dog};

$cat = new Cat();
$cat->name = "Coro";
$cat->run();

$dog = new Dog();
$dog->name = "Meka";
$dog->run();