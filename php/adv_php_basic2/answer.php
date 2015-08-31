<?php
	header('location: guess.php');
	session_start();
	if( ! isset($_SESSION['rand'])) {
	$_SESSION['rand'] = rand(1, 100);
	}
	$guess = $_POST['guess'];
	$_SESSION['num'] = $guess;
?>