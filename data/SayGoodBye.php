<?php

namespace Data\Traits;

trait SayGoodBye {

	// public string $name;

	public function goodBye(?string $name): void
	{
		if (is_null($name)) {
			echo "GOOD BYE" . PHP_EOL;
		} else {
			echo "GOOD BYE $name" . PHP_EOL;
		}
	}

}

trait SayHello {

	// public string $name;
	
	public function hello(?string $name): void
	{
		if (is_null($name)) {
			echo "HELLO" . PHP_EOL;
		} else {
			echo "HELLO $name" . PHP_EOL;
		}
	}

}

trait HasName {

	public string $name;

}

trait CanRun {

	public abstract function run(): void; 

}

class ParentPerson {

	public function goodBye(?string $name): void
	{
		echo "Good Bye is Person" . PHP_EOL;
	}

	public function hello(?string $name): void
	{
		echo "Hello is Person" . PHP_EOL;
	}

}

trait All {

	use SayGoodBye, SayHello, HasName, CanRun {
		// bisa di override
		// hello as private;
		// goodbBye as private;
	}
	
}

class Person extends ParentPerson {

	use All;
	
	public function run(): void
	{
		echo "Person $this->name is running..." . PHP_EOL;
	}

}