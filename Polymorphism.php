<?php

require_once "data/Programmer.php";

$company = new Company("Ikhsan");
$company->programmer = new Programmer("Ikhsan");
var_dump($company);

$company->programmer = new BackendProgrammer("Ikhsan");
var_dump($company);
$company->programmer = new FrontendProgrammer("Ikhsan");
var_dump($company);

sayHelloProgrammer(new Programmer("Ikhsan"));
sayHelloProgrammer(new BackendProgrammer("Ikhsan"));
sayHelloProgrammer(new FrontendProgrammer("Ikhsan"));