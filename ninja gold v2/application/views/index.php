<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<style type="text/css">
		#wrapper {
			width: 1200px;
			margin: 0 auto;
		}
		#messages {
			border: 1px solid black;
			width: 1050px;
			height: 200px;
			margin-left: 4%;
			overflow: scroll;
		}
		.red {
			color: red;
		}
		.green{
			color: green;
		}
		ul li {
			display: inline-block;
			border: 1px solid black;
			height: 150px;
			width: 250px;
			margin-right: 20px;
		}
		h2 {
			text-align: center;
		}
		li p {
			text-align: center;
		}
		.butt {
			position: relative;
			left: 35%;
		}
		button {
			
		}
		h3 {
			margin-left: 40px;
		}
		p {
			margin: 0;
		}
	</style>
</head>
<body>
		<div id="wrapper">
			<h3>Your Gold: <?= $this->session->userdata('gold'); ?></h3>
			<ul>
				<li>
				<form action="process" method="post">
					<h2>Farm</h2>
					<p>(earns 10-20 golds)</p>
					<input type="hidden" name="action" value="farm">
					<button class="butt" type="submit">Find Gold!</button>
				</form>
				</li>
				<li>
				<form action="process" method="post">
					<h2>Cave</h2>
					<p>(earns 5-10 golds)</p>
					<input type="hidden" name="action" value="cave">
					<button class="butt" type="submit">Find Gold!</button>
				</form>
				</li>
				<li>
				<form action="process" method="post">
					<h2>House</h2>
					<p>(earns 2-5 golds)</p>
					<input type="hidden" name="action" value="house">
					<button class="butt" type="submit">Find Gold!</button>
				</form>
				</li>
				<li>
				<form action="process" method="post">
					<h2>Casino</h2>
					<p>(earns/takes 0-50 golds)</p>
					<input type="hidden" name="action" value="casino">
					<button class="butt" type="submit">Find Gold!</button>
				</form>
				</li>
			</ul>
			<p>Activites:</p>
			<div id="messages">
				<a href="reset"><button>reset</button></a>
				<?php 
				if($this->session->userdata('messages') != null)
				{
					foreach (array_reverse($this->session->userdata('messages')) as $message) 
					{
						echo $message."<br>";
					}
				}
				?>
			</div>
		</div>
		
</body>
</html>