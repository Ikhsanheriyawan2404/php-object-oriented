<?php

require_once "data/Manager.php";

$manager = new Manager();
$manager->name = "Ikhsan";
$manager->sayHello("Kuncoro");

$vp = new VicePresident();
$vp->name = "Joko";
$vp->sayHello("Kuncoro");