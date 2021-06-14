<?php

require_once "data/SayGoodBye.php";

use Data\Traits\{Person, SayHello, SayGoodBye};

$person = new Person();
$person->goodBye("Kuncoro");
$person->hello("Kadori");
$person->name = "Ikhsan";
$person->run();