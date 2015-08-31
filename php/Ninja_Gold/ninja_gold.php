<?php
	session_start(); 



	$messages = $_SESSION['messages'];
	

	if(!isset($_SESSION['gold'])) {
		$_SESSION['gold'] = 0;
	}

	if(isset($_POST['farm'])) {
		$temp = rand(10, 20);
		$_SESSION['gold'] += $temp;
		$messages[] = "<p> You entered a farm and earned " . $temp  . " golds!" . " (" . date("F dS h:sa") . ')</p><br>';
	} 
	else if (isset($_POST['cave'])) {
		$temp = rand(5, 10);
		$_SESSION['gold'] += $temp;
		$messages[] = "<p> You entered a cave and earned " . $temp  . " golds!" . " (" . date("F dS h:sa") . ')</p><br>';
	}
	else if (isset($_POST['house'])) {
		$temp = rand(2, 5);
		$_SESSION['gold'] += $temp;
		$messages[] = "<p> You entered a house and earned " . $temp  . " golds!" . " (" . date("F dS h:sa") . ')</p><br>';
	}
	else if (isset($_POST['casino'])) {
		$temp = rand(-50, 50);
		$_SESSION['gold'] += $temp;
		if($temp < 0) {
		$messages[] = "<p class='red'> You entered a casino and earned " . $temp  . " golds!" . " (" . date("F dS h:sa") . ')</p><br>';
		} else {
		$messages[] = "<p> You entered a casino and earned " . $temp  . " golds!" . " (" . date("F dS h:sa") . ')</p><br>';
		}
	}
	$_SESSION['messages'] = $messages;
	header('location: ninja.php');
 

?>