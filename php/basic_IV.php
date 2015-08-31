<?php
	$sample = array(135, 2.4, 2.67, 1.23, 1.23, 332, 2, 1.02);

	function get_max_and_min($array){	
		$max = $array[0];
		$min = $array[0];		
		for($i = 0; $i < count($array); $i++) {
			if($max < $array[$i]) {
				$max = $array[$i];
			}
			if($min > $array[$i]) {
				$min = $array[$i];
			}
		}
	return $value = array('max' => $max, 'min' => $min);;	
	}
	$output = get_max_and_min($sample);
	var_dump($output);

?>