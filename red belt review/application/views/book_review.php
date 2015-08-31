<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<style>
		#left{
			display: inline-block;
			vertical-align: top;
			width: 600px;
			height: 600px;
		}
		#right{
			display: inline-block;
			border: 1px solid black;
			width: 400px;
			height: 200px;
		}
		#wrapper{
			padding: 30px;
		}
		header a{
			margin-right: 30px;
		}
		header {
			margin-left: 90%;
		}
		li {
			list-style-type: none;
			border-top: 1px solid black;
		}
		ul {
			height: 550px;
			width: 550px;
			overflow: scroll;
		}
	</style>
</head>
<body>
	<header>
		<a href="/main_page">Home</a><a href="/logout">Logout</a>
	</header>
	<div id="wrapper">
		<h2><?=  $book[0]['title'] ?></h2>
		<h3><?=  $book[0]['author'] ?></h3>
		<div id="left">
			<h2>Reviews:</h2>
			<ul>
				<?php foreach ($review as $post) { ?>
					<li>
						<p>Rating: <?= $post['rating'] ?></p>
						<p><a href="/users/<?=$post ['id'] ?>"><?= $post['alias']?></a> says: <?= $post['review'] ?></p>
						<p>Posted on <?= $post['created_at']?></p>
					</li>
				<?php }?>
			</ul>
		</div>
		<div id="right">
			<h2>Add a Review:</h2>
			<form action="/add_book_review/<?=$review[0]['books_id']?>" method="post">
				<textarea name="review"></textarea>		
					<p>Rating: 
						<select name="rating">
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
							<option value="4">4</option>
							<option value="5">5</option>
						</select>
						stars.
					</p>
					<button type="submit">Submit Review</button>
			</form>
		</div>
	</div>
</body>
</html>