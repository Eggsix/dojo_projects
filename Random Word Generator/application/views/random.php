<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<style type="text/css">
		#container {
			width: 500px;
			height: 500px;
			border: 1px solid black;
			margin: 0 auto;
		}
		h2 {
			border: 1px solid black;
			height: 50px;
			width: 400px;
			margin: 0 auto;
			text-align: center;
			vertical-align: middle;
		}
		p {
			text-align: center;
		}
	</style>
</head>
<body>
	<div id="container">
		<p>Random Word attempt(#<?= $this->session->flashdata('count') ?>)</p>
		<h2><?= $this->session->flashdata('output') ?></h2>
		<p><a href="random"><button>Generate</button></a></p>
	</div>
</body>
</html>