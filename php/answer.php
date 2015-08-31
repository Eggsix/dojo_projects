<?php session_start();
	header('location: guess.php');
	if( ! isset($_SESSION['rand'])) {
	$_SESSION['rand'] = rand(1, 100);
	}
	if(isset($_SESSION['num']))
	$guess = $_POST['guess'];
	$_SESSION['num'] = $guess;
?>