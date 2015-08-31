<?php 
session_start();
require('success_connect.php');

if(isset($_SESSION['logged_in']) && $_SESSION['logged_in'] == true) {
	header('location: home.php');
}
var_dump($_SESSION['logged_in']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<style> 
		.red {
			color: red;
		}
		table, td {
			border-collapse: collapse;
			border: 1px solid black;
		}
		table {
			margin: 0 auto;
		}
		
	</style>
</head>
<body>

<div class="container">
	<div class="jumbotron">
		<div class="form-group">
			<form action="process.php" method="post">
				<label>Email:</label><input type="text" class="form-control" name="email">
				<?php 
				if(isset($_SESSION['errors']['email'])) {	
					echo '<p class="red">' . $_SESSION['errors']['email'] . '</p>';
				} 
				?>
				<label>Password:</label><input type="password" class="form-control" name="password">
				<?php 
				if(isset($_SESSION['errors']['password'])) {	
					echo '<p class="red">' . $_SESSION['errors']['password'] . '</p>';
				} 
				?>
				<label>Confirm Password:</label><input type="password" class="form-control" name="confirm">
				<?php 
				if(isset($_SESSION['errors']['confirm'])) {	
					echo '<p class="red">' . $_SESSION['errors']['confirm'] . '</p>';
				} 
				?>
				<input type="hidden" name="register" value="register">
				<input type="submit" value="Sign Up!">
			</form>
		</div>
	</div>
</div>
<?php 


/* foreach ($email as $mail) {
	echo $mail['email'] . '<br>';
}
*/
var_dump($_SESSION);
unset($_SESSION['errors']);
unset($_SESSION['logged_in']);

?>
</body>
</html>