<?php 
session_start(); 
require('success_connect.php');
$email_date = fetch_all("SELECT id, email, created_at FROM users");
var_dump($_SESSION['logged_in']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<style>
		table {
			border-collapse: collapse;
			margin: 0 auto;
		}
		table, td {
			border: 1px solid black;
		}
		td {
			width: 400px;
		}
		h3  {
			text-align: center;
		}
		h1 {
			margin: 0 auto;
			background-color: green;
			width: 500px;
			padding: 5px;
			border-radius: 5px;
			color: grey;
		}
	</style>
</head>
<body>
	<h1>The email address you entered <?= $_SESSION['email'] ?> is a VALID email address! Thank You!</h1>
	<table>
			<tr>
				<th>ID</th>
			 	<th>E-mail</th>
			 	<th>Created at</th>
			</tr>
		
				<?php 
					foreach($email_date as $data) {
					echo "<tr>";
					echo "<td><h3>" . $data['id'] . "</h3></td>";
					echo "<td><h3>" . $data['email'] . "</h3></td>";
					echo "<td><h3>" . date("m/d/y h:s a", strtotime($data['created_at'])) . "</h3></td>";
					
					}
			?>
			

			<tr>
		
			</tr>

	</table>	
</body>
</html>