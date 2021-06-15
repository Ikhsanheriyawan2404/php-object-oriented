<?php

require_once "exception/ValidationException.php";
require_once "data/LoginRequest.php";
require_once "data/RegisterRequest.php";
require_once "helper/ValidationUtil.php";

$request = new LoginRequest();
$request->username = null;
$request->password = null;
ValidationUtil::validateReflection($request);

$register = new RegisterRequest();
$register->name = "Ikhsan";
$register->address = "Cirebon";
$register->email = "ikhsan21@gmail.com";
ValidationUtil::validateReflection($request);