<?php
	function coin() {
		$heads = 0;
		$tails = 0;
		echo '<h1>Starting the program</h1>';
		for($i = 1; $i <= 5000; $i++){
			$flip = rand(1, 2);
			switch($flip) {
				case ($flip == 1):
					$heads ++;
				break;
				case($flip == 2):
					$tails ++;
				break;
			}
		echo 'Attempt #' . $i . ': Throwing the coin... It\'s a head!... Got ' . $heads . " head(s) so far and " . $tails . ' tail(s) so far<br>';
		}
		echo '<h1>Ending the program</h1>';
	}
	coin();
?>