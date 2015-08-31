<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<style>
	#login{
		padding: 20px;
		border:1px solid black;
		display: inline-block;
		vertical-align: top;
		height: 250px;
		width: 300px;
	}
	#register{
		padding: 20px;
		border: 1px solid black;
		display: inline-block;
		height: 400px;
		width: 300px
	}
	.success {
		color: green;
	}
	.error{
		color: red;
	}
</style>
<body>
	<div id="wrappper">
		<h2>Welcome!</h2>
		<?= $this->session->flashdata('success') ?>
		<div id="register">
			<h2>Register</h2>
			<form action="/register" method="post">
				<p>Name: <input type="text" name="name"></p>
				<?php echo form_error('name'); ?>
				<p>Alias: <input type="text" name="alias"></p>
				<?php echo form_error('alias'); ?>
				<p>Email: <input type="email" name="email"></p>
				<?php echo form_error('email'); ?>
				<p>Password: <input type="password" name="password"></p>
				<?php echo form_error('password'); ?>
				<p>Confirm PW: <input type="password" name="confirm_password"></p>
				<?php echo form_error('confirm_password'); ?>
				<button type="submit">Register</button>
			</form>
		</div>
		<div id="login">
			<h2>Login</h2>
			<?= $this->session->flashdata('error') ?>
			<form action="/login" method="post">
				<p>Email: <input type="email" name="email"></p>
				<p>Password:<input type="password" name="password"></p>
				<button type="submit">Login</button>
			</form>
		</div>
	</div>
</body>
</html>