<?php

require_once "data/Animal.php";
require_once "data/AnimalShelter.php";

use Data\{CatShelter, DogShelter};

$catShelter = new CatShelter();
$cat = $catShelter->adopt("Luna");

$dogShelter = new DogShelter();
$dog = $dogShelter->adopt("Doggy");