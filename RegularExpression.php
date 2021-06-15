<?php

$sentence = "Hey yang namanya Kuncoro itu anjing ya, punya hutang gk pernah bayar. korbannya yaitu teman saya Ikhsan Heriyawan. Dia ketipu dua ribu rupiah sama Kadori juga tuh komplotannya. Dasar monyet, bangsat tuh mereka berdua.";
$matches = [];
$result = (bool) preg_match_all("/ikhsan|kadori|kuncoro/i", $sentence, $matches);
var_dump($result);

$result = preg_replace("/anjing|bangsat|monyet/i", "*****", $sentence);
var_dump($result);
var_dump($matches);

$result = preg_split("/[\s,-]/", "Ikhsan Heriyawan Adalah,Seorang-Programmer Zaman Now");
var_dump($result);