<?php
	$states = array('CA', 'WA', 'VA', 'UT', 'AZ');
	echo 'States<select>';
	for($i = 0; $i < count($states); $i++) {
		echo '<option value='. $states[$i] .'}>' . $states[$i] . '</option>';
	}
	echo '</select><br>';

	echo 'States2<select>';
	foreach($states as $state) {
		echo '<option value='. $state .'2>' . $state . '</option>';
	}
	echo '</select><br>';

	$states[] = 'NJ';
	$states[] = 'NY';
	$states[] = 'DE';
	echo 'States3<select>';
	foreach($states as $state) {
		echo '<option value='. $state .'}>' . $state. '</option>';
	}
	echo '</select>';
?>