<?php session_start(); 
	
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<style type="text/css">
		p {
			margin: 0;
		}
		#wrapper {
			width: 850px;
			margin: 0 auto;
			border: 1px solid black;
			padding: 10px;
		}
		#forms {
		}
		.red { 
			color: red;
		}
		form {
			height: 200px;
			width: 200px;
			border: 1px solid black;
			display: inline-block;
		}
		#activities {
			width: 800px;
			height: 200px;
			border: 1px solid black;
			overflow: scroll;
		}
	</style>
</head>
<body>
	<?php  var_dump($_SESSION['bool'])?>
<div id="wrapper">
	<h2>You're Gold: <span id="gold"><?php echo $_SESSION['gold']; ?></span></h2>
	<div id="forms">

		<form action="ninja_gold.php" method="post">
			<label>
				<h3>Farm</h3>
				<p>(earns 10 - 20 golds)</p>
				<input type="hidden" name="farm" value="farm">
				<input type="submit" value="Fine Gold!">
			</label>
		</form>

		<form action="ninja_gold.php" method="post">
			<label>
				<h3>Cave</h3>
				<p>(earns 5 - 10 golds)</p>
				<input type="hidden" name="cave" value="cave">
				<input type="submit" value="Fine Gold!">
			</label>
		</form>

		<form action="ninja_gold.php" method="post">
			<label>
				<h3>House</h3>
				<p>(earns 2 - 5 golds)</p>
				<input type="hidden" name="house" value="house">
				<input type="submit" value="Fine Gold!">
			</label>
		</form>

		<form action="ninja_gold.php" method="post">
			<label>
				<h3>Casino!</h3>
				<p>(earns/takes 0 - 50 golds)</p>			
				<input type="hidden" name="casino" value="casino">
				<input type="submit" value="Fine Gold!">
			</label>
		</form>
			
	</div>
	<h3>Activities:</h3>
	<div id="activities">
		<?php 
			foreach($_SESSION['messages'] as $msg) { 
			echo  $msg . "<br>";
			}
		?>
	</div>
</div>
</body>
</html>