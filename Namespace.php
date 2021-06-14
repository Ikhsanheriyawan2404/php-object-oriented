<?php

require_once "data/Conflict.php";
require_once "data/Helper.php";

$conflict1 = new Data\One\Conflict();
$conflict2 = new Data\Two\Conflict();

var_dump($conflict1);

echo Helper\APPLICATION . PHP_EOL;
Helper\helpMe();