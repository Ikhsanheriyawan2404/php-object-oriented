<?php

require_once "data/Person.php";

$person = new Person();
$person->name = "Ikhsan";
$person->sayHello(null);
$person->sayHello("Kuncoro");