<?php

require_once "data/Location.php";

use Data\{Location, City, Province, Country};

// $location = new Location(); Tidak bisa di instansiasi karena kelas abstrak yang tidak bisa diambil object nya
$city = new City();
$province = new Province();
$country = new Country();