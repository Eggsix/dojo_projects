<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Login</title>
</head>
<body>
	<div class="login">
		<h1>Login</h1>
		<form action="/login" method="post">
			<p>Email: <input type="text" name="email"></p>
			<p>Password: <input type="text" name="password"></p>
			<button type="submit">Login</button>
		</form>
	</div>
	<div class="register">
		<h1>Register</h1>
		<?php echo $this->view_data["errors"]  ; ?>
		<form action="/register" method="post">
			<p>First Name: <input type="text" name="f_name"></p>
			<p>Last Name: <input type="text" name="l_name"></p>
			<p>Email Address: <input type="text" name="email"></p>
			<p>Password: <input type="password" name="password"></p>
			<p>Confirm Password: <input type="password" name="confirm_password"></p>
			<button type="submit">Register</button>
		</form>
	</div>
</body>
</html>