<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Login</title>
	<style type="text/css">
		.error {
			color: red;
		}
		.success{
			color: green;
		}
	</style>
</head>
<body>
	<div class="wrapper">
		<div class="register">
			<?=  $this->session->flashdata('success') ?>
			<form action="/register" method="post">
				<p>Name: <input type="text" name="name"></p>
				<?php echo form_error('name'); ?>
				<p>Alias: <input type="text" name="username"></p>
				<p>Email: <input type="text" name="email"></p>
				<?php echo form_error('email'); ?>
				<p>Password: <input type="password" name="password"></p>
				<?php echo form_error('password'); ?>
				<p>Confierm PW: <input type="password" name="confirm_password"></p>
				<?php echo form_error('confirm_password'); ?>
				<button type="submit">Register</button>
			</form>
		</div>
		<div class="login">
			<?=  $this->session->flashdata('error') ?>
			<form action="/login" method="post">
				<p>Email: <input type="text" name="email"></p>
				<p>Password: <input type="password" name="password"></p>
				<button type="submit">Login</button>
			</form>
		</div>
	</div>
</body>
</html>