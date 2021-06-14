<?php

require_once "helper/MathHelper.php";

use Helper\MathHelper;

echo MathHelper::$number . PHP_EOL;
MathHelper::$number = 2000;
echo MathHelper::$number . PHP_EOL;

$result = MathHelper::sum(10, 10, 10);
echo "Result : $result" . PHP_EOL;