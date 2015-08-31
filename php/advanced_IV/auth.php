<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<style type="text/css">
		#wrapper {
			width: 300px;
			margin: 0 auto;
			background-color: grey;
			border-radius: 5px;
			padding: 10px;
		}
		label{
    display: inline-block;
    width: 200px;
    text-align: left;
		}
		input {
			width: 250px;
			clear: right;
		  display: block;

		}
		.red {
			color: red;
		}
	</style>
</head>
<body>
	<div id="wrapper">
		<form action="validation.php" method="post">
			<label>Email:</label><input type="text" name="email">

			<?php 
				if(isset($_SESSION['error']['email'])) {
					echo '<p class="red">' . $_SESSION['error']['email'] . "</p>";
				}
			?>

			<label>First name:</label><input type="text" name="f_name" >

			<?php 
				if(isset($_SESSION['error']['f_name'])) {
					echo '<p class="red">' . $_SESSION['error']['f_name'] . '</p>';
				}
			?>

			<label>Last name:</label><input type="text" name="l_name">

				<?php 
				if(isset($_SESSION['error']['l_name'])) {
					echo '<p class="red">' . $_SESSION['error']['l_name'] . '</p>';
				}
			?>

			<label>Password:</label><input type="password" name="password">

			<?php 
				if(isset($_SESSION['error']['password'])) {
					echo '<p class="red">' . $_SESSION['error']['password'] . '</p>';
				}
			?>

			<label>Confirm password:</label><input type="password" name="conf_pass">

			<?php
			if(isset($_SESSION['error']['conf_pass'])) {
					echo '<p class="red">' . $_SESSION['error']['conf_pass'] . '</p>';
				}
			?>

			<label>Birth date:</label><input type="text" name="b_day">

			<?php
			if(isset($_SESSION['error']['b_day'])) {
					echo '<p class="red">' . $_SESSION['error']['b_day'] . '</p>';
				}
			?>
			<input type="hidden" name="action" value="register">
			<input type="submit">		
		</form>

		<form action="upload.php" method="post" enctype="multipart/form-data">
					<label>Profile picture:</label><input type="file" name="files">
					<input type="submit">
		</form>	
		
	</div>
</body>
</html>