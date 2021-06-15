<?php

class Student {

	public string $id;
	public string $name;
	public int $value;
	private string $sample;

	public function setSample(string $sample): void
	{
		$this->sample = $sample;
	}

	public function __clone()
	{
		unset($this->sample);
	}

	public function __toString(): string
	{
		return "Id: $this->id, Name : $this->name, Value : $this->value" . PHP_EOL;
	}

	public function __invoke(...$arguments): void
	{
		$join = join(",", $arguments);
		echo "Invoke student with arguments $join" . PHP_EOL;
	}

	public function __debugInfo()
	{
		return [
			'id' => $this->id,
			'name' => $this->name,
			'value' => $this->value,
			'author' => 'Ikhsan Heiryawan',
			'version' => '1.0.0',
		];
	}

}