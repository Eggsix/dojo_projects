<?php
session_start();
require_once('wall_db.php');

//--------------handles registration----------------//
if(isset($_POST['action']) && $_POST['action'] == 'register') 
{
	register_user($_POST);
} 


//--------------handles loggins----------------//
else if(isset($_POST['action']) && $_POST['action'] == 'login') 
{
	login_user($_POST);
}
else
//--------------log off----------------//
{
	session_destroy();
	header('location: login.php');
	exit();
}


//--------------validation functions----------------//
function register_user($post) 
{
	$_SESSION['errors'] = array();
	if(empty($post['first_name']) ) 
	{
		$_SESSION['errors']['first_name'] = "First name cant be blank";
	} 
	if(empty($post['last_name'])) 
	{
		$_SESSION['errors']['last_name'] = "Last name cant be blank";
	} 
	if(empty($post['email']))
	{
		$_SESSION['errors']['email'] = "Email cannot be blank";
	} 
	if(!filter_var($post['email'], FILTER_VALIDATE_EMAIL) === true) 
	{
		$_SESSION['errors']['email'] = "Email is not valid";
	}
	if(empty($post['password']))
	{
		$_SESSION['errors']['password'] = "Password cannot be blank";
	}
	if(strlen($post['password']) < 8)
	{
		$_SESSION['errors']['password'] = "Your password is too short";
	}
	if($post['password'] !== $post['confirm_password'])
	{
		$_SESSION['errors']['confirm_password'] = "Passwords do not match";
	}
	//--------------navigate user----------------//
	if (count($_SESSION['errors']) > 0 ) 
	{
		header('location: login.php');
	}
	else //data inserted if no errors
	{
		$first_name = escape_this_string($post['first_name']);
		$last_name = escape_this_string($post['last_name']);
		$password = md5($post['password']);
		$email = escape_this_string($post['email']);
		$query = "INSERT INTO wall.users (first_name, last_name, email, password, created_at, updated_at) 
							VALUES ('{$first_name}', '{$last_name}', '{$email}', '{$password}', NOW(), NOW())";
		$_SESSION['success_message'] = "Welcome {$post['first_name']}, to the wall!";					
		run_mysql_query($query);
		header('location: login.php');
		die();
	}
}

function login_user($post) 
{
	$password = md5($post['password']);
	$email = escape_this_string($post['email']);
	$query = "SELECT * FROM users WHERE users.email = '{$email}' AND users.password = '{$password}'";
	$user = fetch_all($query);
	if(count($user) > 0) 
	{
		$_SESSION['user_id'] = $user[0]['id'];
		$_SESSION['first_name'] = $user[0]['first_name'];
		$_SESSION['logged_in'] = true;
		header('location: wall.php');
	}
	else 
	{
		$_SESSION['errors'][] = 'Check your credentials';
		header('location: login.php');
	}
}

?>