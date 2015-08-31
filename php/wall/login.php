<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<style type="text/css">
		.error {
			color: red;
			margin: 0;
		}
		.success {
			color: green;
		}
	</style>
</head>
<body>

<div class="container">
	<div class="jumbotron">
	<h1>|Wall|</h1>
	<h2>Register</h2>
	<?php 
		if(isset($_SESSION['errors'])) 
		{
			foreach ($_SESSION['errors'] as $errors) {
				echo "<p class='error'> {$errors} </p>";
			}
			unset($_SESSION['errors']);
		} 
		if (isset($_SESSION['success_message'])) 
		{
			echo "<p class='success'> {$_SESSION['success_message']}</p>";
			unset($_SESSION['success_message']);
		}
	?>
	<form action="process.php" method="post">
		<input type="hidden" name="action" value="register">
		First name: <input class="form-control" type="text" name="first_name">
		Last name: <input class="form-control" type="text" name="last_name">
		Email: <input class="form-control" type="text" name="email">
		Password: <input class="form-control" type="password" name="password">
		Confirm password: <input class="form-control" type="password" name="confirm_password">
		<input type="submit" value="register">
	</form>
	
	<h2>Login</h2>
	<form action="process.php" method="post">
		<input type="hidden" name="action" value="login">
		Email: <input class="form-control" type="text" name="email">
		Password: <input class="form-control" type="password" name="password">
		<input type="submit" value="login">
	</form>
	</div>
</div>
	
</body>
</html>