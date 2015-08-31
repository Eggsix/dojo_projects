<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<style type="text/css">
		#container {
			margin: 0 auto;
		}
		h3 {
			margin: 0 auto;
			text-align: center;
			border: 1px solid black;
			width: 400px;
		}
		h1 {

			text-align: center;
			border: 1px solid black;
			margin: 0 auto;
			width: 500px;
		}
	</style>
</head>
<body>
	<div id="container">
		<h3>The current time and date:</h3>
		<h1><?= $this->session->flashdata('time') ?></h1>
	</div>
</body>
</html>