<?php

require_once "data/Student.php";

$student = new Student();
$student->id = "1";
$student->name = "Ikhsan";
$student->value = 100;
$student->setSample('SAMPLE');

var_dump($student);