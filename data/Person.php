<?php

class Person {

	const AUTHOR = "Ikhsan Heriyawan";

	var string $name;
	var ?string $address;
	var string $country = "Indonesia";

	public function __construct(string $name, ?string $address)
	{
		$this->name = $name;
		$this->address = $address;
	}

	function sayHello(?string $name)
	{
		if (is_null($name)) {
			echo "Hi, my name is $this->name" . PHP_EOL;
		} else {
			echo "Hello $name, My name is $this->name" . PHP_EOL;
		}
	}

	function __destruct()
	{
		echo "Object person $this->name is destroyed" . PHP_EOL;
	}

}