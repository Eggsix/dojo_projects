<?php
class Bike 
{
	public $price;
	public $max_speed;
	public $miles;
	public function __construct($cost, $speed) 
	{		
		echo "the cost of this bike is " . $cost . " and the max speed is " . $speed . "<br>";
		$this->price = $cost;
		$this->max_speed = $speed;
		$this->miles = 0;
	}
	function displayInfo() 
	{
		echo "Price:" . $this->price . "<br>" . "Max Speed:" . $this->max_speed . "<br>" . "Miles:" . $this->miles;
		return $this;

	}
	function drive() 
	{
		$this->miles += 10;
		return $this;
	}
	function reverse() { 
		if($this -> miles > 0) 
		{
			$this -> miles -= 5;
		} 
		else 
		{
			$this->miles = 0;
		}
		return $this;
	}
}
$bike1 = new Bike(200, "25mph");

$bike1->drive() -> reverse() -> reverse() -> reverse() -> reverse() -> drive() -> displayInfo();

?>