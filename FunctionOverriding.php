<?php

require_once "data/Manager.php";

$manager = new Manager();
$manager->name = "Joko";
$manager->sayHello("Ikhsan");

$vp = new VicePresident();
$vp->name = "Joko";
$vp->sayHello("Kuncoro"); 