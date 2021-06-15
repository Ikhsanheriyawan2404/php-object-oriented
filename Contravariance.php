<?php

require_once "data/Animal.php";
require_once "data/AnimalShelter.php";
require_once "data/Food.php";

use Data\{CatShelter, DogShelter};

$catShelter = new CatShelter();
$cat = $catShelter->adopt("Luna");
$cat->eat(new \Data\AnimalFood);

$dogShelter = new DogShelter();
$dog = $dogShelter->adopt("Luna");
$dog->eat(new \Data\Food);
