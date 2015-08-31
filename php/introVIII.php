<?php
	function multiply($values, $num) {
		$new = array();
		foreach($values as $value) {
			$new[] = $value * $num;
		}
		return $new;
	}

	$A = array(2, 4, 10, 16);
	$B = multiply($A, 5);
	var_dump($B);

?>