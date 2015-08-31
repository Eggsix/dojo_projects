<?php
class Deck 
{
	public $cards = 52;
	public $value = 13;
	public $type = 4;
	public function __construct()
	{
		$this -> deck = array();
		for($v = 1; $v <= $this-> value; $v++)
		{
			for($t = 1; $t <= $this -> type; $t++)
			{
				if($t == 1)
				{
					$this -> deck[] = "{$v}" . "Clubs";
				}
				if($t == 2) 
				{
					$this -> deck[] = "{$v}" . "Spades";
				}
				if($t == 3)
				{
					$this -> deck[] = "{$v}" . "Diamonds";
				}
				if($t == 4)
				{
					$this -> deck[] = "{$v}" . "Hearts";
				}
			}
		}
		return shuffle($this -> deck);
	}
	public function shuffle() 
	{
		echo "Deck has been shuffled";
		return shuffle($this -> deck);
	}
	public function reset() 
	{
		$this -> cards = 52;
		echo "deck doesn't exist";
		unset($this -> deck);
	}
	public function deal()
	{
		$this -> cards --;
		$dealt = array_pop($this -> deck);
		return $dealt;
	}

}


class Player 
{
	public $hand = array();

	public function __construct($name)
	{
		$this -> name = $name;
	}
	public function draw($deck) 
	{
		$this -> hand[] = $deck;
	}
	public function discard($card)
	{
		foreach ($this->hand as $discard) 
		{
			if($card == $discard) 
			{
			$index = array_search($discard, $this->hand);
			echo $card;
			echo $index;
			unset($this->hand[$index]);
			}
		}
	}
}
$deck = new Deck();


?>