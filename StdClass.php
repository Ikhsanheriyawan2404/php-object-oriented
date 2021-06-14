<?php

$array = [
	'firstName' => 'Ikhsan',
	'middleName' => 'Kontoru',
	'lastName' => 'Heriyawan',
];

$object = (object) $array;
var_dump($object);

echo "First Name : $object->firstName" . PHP_EOL;
echo "Middle Name : $object->middleName" . PHP_EOL;
echo "Last Name : $object->lastName" . PHP_EOL;

$arrayLagi = (array) $object;
var_dump($arrayLagi);

echo "First Name : " . $arrayLagi['firstName'] . PHP_EOL;
echo "Middle Name : " . $arrayLagi['middleName'] . PHP_EOL;
echo "Last Name : " . $arrayLagi['lastName'] . PHP_EOL;

require_once "data/Person.php";
$person = new Person("Ikhsan", "Cirebon");
var_dump($person);

$arrayPerson = (array) $person;
var_dump($arrayPerson);