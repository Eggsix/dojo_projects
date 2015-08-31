<?php
header('location: index.php');
session_start();

//use database
include_once('connection.php');
$post = "INSERT INTO quotes.quotes (name, quote, created_at, updated_at) VALUES ('{$_POST['name']}', '{$_POST['quote']}', NOW(), NOW());";

//create an error session and store in sessions error;
$error = $_SESSION['error'];

//check verifications be fore going to main.php
if(isset($_POST['quotes']) && $_POST['quotes'] == 'quotes') {

	//check if name field is empty or contains numbers
	if(empty($_POST['name'])) {
		$error['name'] = "Name field cannot be blank";
	} else if (ctype_alpha($_POST['name']) == false) {
		$error['name'] = "Name cannot contain numerals";
	} 

	// check if quote field is empty
	if(empty($_POST['quote'])) {
		$error['quote'] = "Quote field cannot be blank";
	}

	// put data in database and redirect to main.php
	else {
		header('location: main.php');
		run_mysql_query($post);
	}

} 

//set sessions to error array
$_SESSION['error'] = $error;




//go to main.php
if(isset($_POST['c_quotes']) && $_POST['c_quotes'] == 'go') {
	header('location: main.php');
}


?>