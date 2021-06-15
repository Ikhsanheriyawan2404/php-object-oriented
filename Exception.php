<?php

require_once "exception/ValidationException.php";
require_once "data/LoginRequest.php";
require_once "helper/ValidationLoginRequest.php";

$loginRequest = new LoginRequest();
// $loginRequest->username = "Ikhsan";
// $loginRequest->password = "Rahasia";

try {
	validateLoginRequest($loginRequest);
	echo "VALID NO DEBAT" . PHP_EOL;
} catch (ValidationException | Exception $exception) {
	echo "Error : {$exception->getMessage()}" . PHP_EOL;
	var_dump($exception->getTrace());
	echo $exception->getTraceAsString() . PHP_EOL;
} finally {
	echo "ERROR ATAU TIDAK, WILL BE EXECUTE!" . PHP_EOL;
}