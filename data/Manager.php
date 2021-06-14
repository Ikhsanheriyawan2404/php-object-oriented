<?php

class Manager {

	public $name;

	public function sayHello(string $name): void
	{
		echo "HI $name, my name is $this->name Manager" . PHP_EOL;
	}

}

class VicePresident extends Manager {

	public function sayHello(string $name): void
	{
		echo "HI $name, my name is $this->name VicePresident" . PHP_EOL;
	}

}