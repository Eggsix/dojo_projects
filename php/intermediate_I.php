<?php

$array = array(4, 'Tom', 1, 'Michael', 5, 7, 'Jimmy Smith');

function draw_stars($stars) {
		for($int = 0; $int < count($stars); $int++) {
			$star = array();
			if(is_numeric($stars[$int])){
				for($j = 0; $j < $stars[$int]; $j++) {
					$star[] = '*';
				}
				$stars[$int] = implode($star);
			} 
			else {
				for($str = 0; $str < strlen($stars[$int]); $str++) {
					$star[] = strtolower($stars[$int][0]);
				} 
				$stars[$int] = implode($star);
			}
		}
		foreach($stars as $star) {
			echo $star . '<br>';
		}
}
/*
	$array = array(4, 6, 1, 3, 5, 7, 25);
	function draw_stars($stars) {
		for($int = 0; $int < count($stars); $int++) {
			$star = array();
			for($j = 0; $j < $stars[$int]; $j++) {
				$star[] = '*';
			}
			$stars[$int] = implode($star);
		}
		foreach($stars as $star) {
			echo $star . '<br>';
		}
	}
*/
draw_stars($array);

?>