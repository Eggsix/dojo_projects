<?php 
session_start();

require('connection.php');

//registration validations
if(isset($_POST['action']) && $_POST['action'] == "register") 
{
	register_user($_POST);
} 



//login valiadations
else if(isset($_POST['action']) && $_POST['action'] == "login") 
{
	login_user($_POST);
}

else {
	session_destroy();
	header('location: index.php');
	die();
}

// validation functions
function register_user($post)
{
	//-------------- begin validation checks ---------------//
	$_SESSION['errors'] = array();

	if(empty($post['f_name'])) 
	{
		$_SESSION['errors'][] = "First name canoot be blank";
	}
	if(empty($post['l_name']))
	{
		$_SESSION['errors'][] = "Last name cannot be blank";
	}
	if(empty($post['email']))
	{
		$_SESSION['errors'][] = "Email cannot be blank";
	} 
		else if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) == true) 
		{
			$_SESSION['errors'][] = "Your email address is not valid";
		}
	if(empty($post['password']))
	{
		$_SESSION['errors'][] = "Password cannot be blank";
	}
	if($post['password'] !== $post['confirm_password'])
	{
		$_SESSION['errors'][] = "Your passwords do not match";
	}

	//-------------- begin validation checks ---------------//
	if(count($_SESSION['errors']) > 0) 
	{
		header('location: index.php'); //check if there are any errors
		die();
	}
	else //insert data if no errors
	{
		$query = "INSERT INTO users (first_name, last_name, email, password, created_at, updated_at)
							VALUES ('{$post['f_name']}', '{$post['l_name']}', '{$post['email']}', '{$post['password']}', NOW(), NOW())";

							$_SESSION['success_message'] = "User successfully created!";
							run_mysql_query($query);
							header('location: index.php');
							die();
	}
}

function login_user($post) 
{
	$query = "SELECT * FROM users WHERE users.email = '{$post['email']}' AND users.password = '{$post['password']}'";
	$user = fetch_all($query);
	if(count($user) > 0)
	{
		$_SESSION['user_id'] = $user[0]['id'];
		$_SESSION['f_name'] = $user[0]['first_name'];
		$_SESSION['logged_in'] = true;
		header('location: success.php');
	}
	else 
	{
		$_SESSION['errors'][] = 'check credentials';
		header('location: index.php');
	}
}
?>