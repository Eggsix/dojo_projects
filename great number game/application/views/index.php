<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Great Number Game</title>
	<style type="text/css">
		.red {
			background-color: red;
			border: 1px solid black;
			width: 100px;
			padding: 50px;
		}
		.green {
			background-color: green;
			border: 1px solid black;
			width: 100px;
			padding: 50px;
		}
	</style>
</head>
<body>
	<div class="container">
		<?= $this->session->userdata['number'] ?>

		<h1>Welcome to the Game</h1>
		<p>I am thinking of ta number between 1 and 100</p>
		<p>Take a guess!</p>
		<?php
			if($this->session->flashdata('result')) 
			{
		?>
			<p class="red"><?= $this->session->flashdata('result')?></p>
		<?php
		  }
		?>
		<?php 

			if($this->session->flashdata('correct'))
			{ 
		?>
			<p class="green"><?= $this->session->flashdata('correct')?></p>
			<form action="reset" method="post">
				<button type="submit">Play again!</button>
			</form>
		<?php
			}
		?>

		<form action='check' method='post'>
			<input type='text' name='guess'>
			<input type='submit' value='submit'>
		</form>
	</div>
</body>
</html>