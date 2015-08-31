<?php
//---------Animal Class ---------//
class Animal 
{
	public $health;

	public function __construct() 
	{
		$this -> health = 100;
	}

	public function walk()
	{
		$this -> health -= 1;
		return $this;
	}
	public function run() 
	{
		$this -> health -= 5;
		return $this;
	}
	public function displayHealth()
	{
		echo "Health: " . $this -> health . "<br>";

		return $this;
	}

}

//---------Dog Class ---------//
class Dog extends Animal
{
	public function __construct() 
	{
		$this -> health = 150;
	}
	public function pet()
	{
		$this -> health += 5;
		return $this;
	}
}

//---------Dragon Class ---------//
class Dragon extends Animal 
{
	public function __construct()
	{
		$this -> health = 170;
	}
	function fly()
	{
		$this -> health -= 10;
		return $this;
	}

	public function newHealth() 
	{
		echo "This is a dragon!" . "<br>";
		$dragon_health = $this -> displayHealth();
		return $dragon_health;
	}
	
}
$animal1 = new Animal();
$animal1 -> walk() -> walk() -> walk() ->  run() -> run() -> displayHealth();
$dog1 = new Dog();
$dog1 -> walk() -> walk() -> walk() -> run() -> run() -> pet() -> displayHealth();
$dragon1 = new Dragon();
$dragon1 -> walk() -> walk() -> walk() -> run() -> run() -> fly() -> fly() -> newHealth();
?>