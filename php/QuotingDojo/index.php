<?php 
session_start();
require_once('connection.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<style type="text/css">
		input {
			clear: right;
		}
		.button {
			margin-top: 30px;
		}
		.red {
			color: red;
		}
	</style>
</head>
<body>
	<div class="container">
		<div class="jumbotron">

			<h1>Welcome to QuotingDojo</h1>

			<form class="form-horizontal" action="process.php" method="post">

				<label>Name</label><input class="form-control" type="text" name="name">

				<!-- if there is an error show error-->
				<?php 
					if(isset($_SESSION['error']['name'])) {
						echo '<p class="red">' . $_SESSION['error']['name'] . '</P>'; 
					}
				?>

				<label>Your Quote</label><textarea class="form-control" rows="5" name="quote"></textarea>

				<!-- if there is an error show error-->
				<?php 
					if(isset($_SESSION['error']['quote'])) {
						echo '<p class="red">' . $_SESSION['error']['quote'] . '</P>'; 
					}
				?>
				<input type="hidden" name="quotes" value="quotes">

				<input class="btn-success button" type="submit">

			</form>

			<form action="process.php" method="post">
				
				<input type="hidden" name="c_quotes" value="go">

				<input  class="btn-success button" type="submit" value="See Quotes">

			</form>
			<?php // unset($_SESSION['error']) ?>
		</div>
	</div>
</body>
</html>