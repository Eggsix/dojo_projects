<?php 
header('location: success.php');
require_once('success_connect.php');
session_start();

$input = "INSERT INTO projects.users (email, password, created_at, updated_at) VALUES ('{$_POST['email']}', '{$_POST['password']}', NOW(), NOW());";

$errors = $_SESSION['errors'];

if(isset($_POST['register']) && $_POST['register'] == 'register') {

	if(empty($_POST['email'])) {
		$errors['email'] = "Email field cannot be blank";
	} else if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) == true) {
		$errors['email'] = "email is not valid";
	} else {
		$_SESSION['email'] = $_POST['email'];
	}

	if(empty($_POST['password'])) {
		$errors['password'] = "Password field cannot be empty";
	} else if (strlen($_POST['password']) < 8) {
		$errors['password'] = "Your password needs to be at least 8 characters";
	}

	if($_POST['password'] != $_POST['confirm']) {
		$errors['confirm'] = "Your passwords do not match!";
	}
}

$_SESSION['errors'] = $errors;

if(count($_SESSION['errors']) == 0) {
	run_mysql_query($input);
	$_SESSION['logged_in'] = true;
}
var_dump($emails);

?>