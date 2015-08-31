<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<style type="text/css">
		#left{

			height: 600px;
			width: 400px;
			display: inline-block;
			vertical-align: top;
			padding: 10px;
		}
		#left ul {
			border: 1px solid black;
			height: 620px;
			width: 350px;
			overflow: scroll;
		}
		#right{
			display: inline-block;
			padding: 10px;
			vertical-align: top;
			margin-left: 10%;
		}
		#right ul{
			border: 1px solid black;
			height:350px;
			width: 350px;
			overflow: scroll;
		}
		li {
			list-style-type: none;
			border: 1px solid black;
			height: 200px;
			width: 350px;
		}
	</style>
</head>
<body>
	<?php  
		var_dump($quotes);
		var_dump($favorites);
	?>
	<a href="/logoff">Logoff</a>
	<h1>Welcome, <?= $this->session->userdata('name') ?>!</h1>
	<div id="left">
		<h2>Quotable Quotes</h2>
		<ul>
			<?php foreach($quotes as $quote) { ?>
				<li>
					<p><?= $quote['content'] ?></p>
					<p>Posted by <?= $quote['alias'] ?></p>
					<button><a href="/add_to_favs/<?= $this->session->userdata('id')?>/<?= $quote['content'] ?>">Add to My List</a></button>
				</li>
			<?php } ?>
		</ul>
	</div>
	<div id="right">
		<h2>Your favorites</h2>
		<ul>
			<?php foreach ($favorites as $favorite) { ?>
				<li>
					<p><?= $favorite['content'] ?></p>
					<p>Posted by <?= $favorite['alias'] ?></p>
					<button><a href="/remove/<?= $this->session->userdata('id')?>/<?= $favorite['quote_id'] ?>">Remove from My List</a></button>
				</li>				
			<?php	} ?>		
		</ul>
		<h2>Contribute a Quote:</h2>
		<form action="/add_quote" method="post">
			<p>Quoted By: <input type="text" name="quoted_by"></p>
			<p>Message: </p>
			<textarea name="quote" id="quote" cols="30" rows="10"></textarea>
			<button type="submit">Submit</button>
		</form>
	</div>
</body>
</html>