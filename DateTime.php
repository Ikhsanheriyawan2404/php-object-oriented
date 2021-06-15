<?php

$date = new DateTime();
$date->setDate(2001, 2, 19);
$date->setTime(10, 10, 10);

$date->add(new DateInterval("P1Y"));

$minusOneMonth = new DateInterval("P1M");
$minusOneMonth->invert = TRUE;
$date->add($minusOneMonth);

var_dump($date);

$now = new DateTime();
var_dump($now);
$now->setTimezone(new DateTimeZone("America/Toronto"));
var_dump($now);

$string = $now->format("H:i d-m-Y");
echo "Waktu saat ini : $string" . PHP_EOL;

$date = DateTime::createFromFormat('Y-m-d H:i:s', '2020-10-10 10:10:10', new DateTimeZone('Asia/Jakarta'));
if ($date){
	var_dump($date);
} else {
	echo "Format Salah";
}