<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<style>
		header a{
			margin-right: 30px
		}
		header {
			margin-left: 80%;
		}
		#wrapper{
			padding: 20px;
		}
		li {
			list-style-type: none;
		}
</style>
<body>
	<header>
		<a href="/main_page">Home</a>
		<a href="/add_review_form">Add Book and Review</a>
		<a href="/logout">Logout</a>
	</header>
	<div id="wrapper">
		<div id="info">
			<h2>User Alias: <?= $info['alias'] ?></h2>
			<h3>Name: <?= $info['name'] ?></h3>
			<h3>Email: <?= $info['email'] ?></h3>
			<p>Total Reviews: <?= count($reviews) ?></p>
		</div>
		<div id="posts">
			<h2>Posted Reviews on the following books:</h2>
			<ul>
				<?php foreach ($reviews as $review) { ?>
					<li><a href="/book_review_page/<?= $review['books_id'] ?>"><?= $review['title'] ?></a></li>
				<?php } ?>
			</ul>
		</div>
	</div>
</body>
</html>