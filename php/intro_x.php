<?php
	$users = array('first_name' => "Michael", 'last_name' => "Choi");
	function printMsg($items) {
		echo "There are ". count($items) . " keys in this array: ";
		foreach($items as $key => $value) {
			echo ' ' . $key;
		}
		echo '<br>';
		foreach($items as $key => $value) {
			echo "The value in the key " . $key . " is " . $value . "<br>";
		}
	}
	printMsg($users);
?>