<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<style>
		header h1, header ul, header ul li{
			display: inline-block;
		}
		header ul{
			margin-left: 65%;
		}
		header ul li {
			margin-right: 20px;
		}
		#left{
			padding: 10px;
			border: 1px solid black;
			height: 600px;
			width: 600px;
			display: inline-block;
			vertical-align: top;
		}
		#right{
			padding: 10px;
			border: 1px solid black;
			height: 300px;
			width: 450px;
			display: inline-block;
		}
		#reviewed_books{
			overflow: scroll;
			height: 225px;
			width: 450px;
		}
		ul li {
			list-style-type: none;
		}
	</style>
</head>
<body>
<header>
	<h1>Welcome, <?= $this->session->userdata('name'); ?>!</h1>
	<ul>
		<li><a href="/add_review_form">Add Book and Review</a></li>
		<li><a href="/logout">Logout</a></li>
	</ul>
</header>
<div id="left">
	<h2>Recent Book Reviews</h2>
	<ul>
			<!--append list here-->		
	</ul>
</div>
<div id="right">
	<h2>Other Books with Reviews:</h2>
	<ul id="reviewed_books">
		<?php foreach ($books as $book) { ?>
			<li><a href="/book_review_page/<?= $book['id'] ?>"><?= $book['title'] ?></a></li>
		<?php } ?>	

	</ul>
</div>
</body>
</html>