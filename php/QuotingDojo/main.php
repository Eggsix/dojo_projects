<?php 
session_start();

//pull from database
require_once('connection.php');

$quotes = fetch_all("SELECT id, name, quote, created_at FROM quotes");

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<style type="text/css">
		h1 {
			text-align: center;
		}
		li {
			list-style-type: none;
			border-top: 1px solid black;
		}
		p {
			padding-left: 20%;
		}

	</style>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
</head>
<body>
	<div class="jumbotron">
		<div class="container">
			<h1>Here are the awesome quotes!</h1>
			<div id="quotes">
				<ul>
					<?php 
						foreach ($quotes as $quote) {
							echo "<li>";
							echo "<h2>" . $quote['quote'] . "<h2>";
							echo "<p>" . $quote['name'] . " at " . date("h:s a F d, o", strtotime($quote['created_at'])) . "</p>";
							echo "</li>";
						}
					?>
				</ul>
			</div>
		</div>
	</div>

</body>
</html>