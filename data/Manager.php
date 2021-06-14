<?php

class Manager {

	public string $name;
	public string $title;

	public function __construct(string $name = "", string $title = "")
	{
		$this->name = $name;
		$this->title = $title;
	}
	public function sayHello(string $name): void
	{
		echo "HI $name, my name is $this->name Manager" . PHP_EOL;
	}

}

class VicePresident extends Manager {

	public function __construct(string $name = "")
	{
		parent::__construct($name, "VP");
	}

	public function sayHello(string $name): void
	{
		echo "HI $name, my name is $this->name VicePresident" . PHP_EOL;
	}

}