<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<style type="text/css">
		h1, p, form {
			text-align: center;
		}
		.box {
			width: 300px;
			height: 300px;
			border-radius: 5px;
			padding-top: 100px;
			margin: 0 auto;
		}
		.red {
			background-color: red;
		}
		.green {
			background-color: green;
		}
		.yellow {
			background-color: yellow;
		}
		h2 {
			text-align: center;
		}
	</style>
</head>
<body>
	<div class='container'>
		<div class='jumbotron'>
		<h1>Welcome to the Great Number Game!</h1>
		<p>I am thinking of a number between 1 and 100</p>
		<p>Take a guess!</p>
		<form action="answer.php" method="post">
			<input type="text" name="guess">
			<input type="submit">
		</form>
	</div>
</div>
		<?php 
			if(isset($_SESSION['num'])){
				if($_SESSION['num'] > $_SESSION['rand']) {
					echo '<div class="box red"><h2>Too High!</h2></div>';
				} else if ($_SESSION['num'] == $_SESSION['rand']) {
					echo '<div class="box yellow"><h2>YOU WIN!</h2>';
					echo '<form action="answer.php" method="post"><input type="submit" name="reset" value="Play again?"></form>';
					session_destroy();
				} else if ($_SESSION['num'] < $_SESSION['rand']){
					echo '<div class="box green"><h2>Too Low =[</h2></div>';
				}
				else {
					echo 'guess';
				}
			}
		?>

</body>
</html>