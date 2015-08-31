<?php
class car {
	public $price;
	public $speed;
	public $fuel;
	public $mileage;
	public $tax;
	public function __construct($price, $speed, $fuel, $mileage) 
	{
		$this->price = $price;
		$this->speed = $speed . "mph";
		$this->fuel = $fuel;
		$this->mileage = $mileage . "mpg";
		if($price > 10000)
		{
			$this->tax = 0.15;
		} else 
		{
			$this->tax = 0.12;
		}
	}
	function display_all() {
		echo "Price: " . $this->price . "<br>";
		echo "Speed: " . $this->speed . "<br>";
		echo "Fuel: " . $this->fuel . "<br>";
		echo "Mileage: " . $this->mileage . "<br>";
		echo "Tax: " . $this->tax . "<br>";
	}

}

$car1 = new car(2000, 35, "Full", 15);
$car1->display_all();
$car2 = new car(2000, 5, "Not Full", 105);
$car2->display_all();
$car3 = new car(2000, 15, "Kind of Full", 95);
$car3->display_all();
$car4 = new car(2000, 25, "Full", 25);
$car4->display_all();
$car5 = new car(2000, 45, "Empty", 15);
$car5->display_all();
$car6 = new car(20000000, 35, "Empty", 15);
$car6 ->display_all();
?>