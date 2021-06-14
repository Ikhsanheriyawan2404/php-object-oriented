<?php

interface HelloWorld {
	public function sayHello(): void;
}

$helloWorld = new class("Ikhsan") implements HelloWorld {
	public string $name;
	public function __construct(string $name)
	{
		$this->name = $name;
	}
	public function sayHello(): void
	{
		echo "Hello $this->name" . PHP_EOL;
	}
};

$helloWorld->sayHello();