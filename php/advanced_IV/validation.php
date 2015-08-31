<?php 
header('location: auth.php'); 
session_start();

var_dump($_POST);
$date = explode('/', $_POST['b_day']);
$errors = $_SESSION['error'];

if(isset($_POST['action'])&& $_POST['action'] == 'register') {

	if(empty($_POST['email'])) {
		$errors['email'] = 'email cannot be blank';
	} else if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) == true) {
		$errors['email'] = "email is not valid";
	}

	if ( empty($_POST['f_name']) || ctype_alpha($_POST['f_name']) == false )  {
		$errors['f_name'] = 'name cannot contain numbers and cannot be blank';
	}

	if(empty($_POST['l_name']) || ctype_alpha($_POST['l_name']) == false) {
		$errors['l_name'] = 'last name cannot be blank';
	}

	if(empty($_POST['password']) || strlen($_POST['password']) < 8) {
		$errors['password'] = 'passwords cannot be blank or less than 8 characters';
	} 

	if ($_POST['password'] !== $_POST['conf_pass']) {
		$errors['conf_pass'] = 'passwords do not match';
	}

	if(empty($_POST['b_day']) || checkdate( (int)$date[0], (int)$date[1], (int)$date[2]) == false) {
		$errors['b_day'] = 'birthday cannot be empty or date in wrong format';
	} 
}

$_SESSION['error'] = $errors;
?>