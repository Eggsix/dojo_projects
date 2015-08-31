<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<style>
		.error {
			color: red;
		}
	</style>
</head>
<body>
	<div id="wrapper">
		<a href="/">Home</a><a href="#">Logout</a>
		<h1>Add a New Book Title and a Review:</h1>

		<form action="/add_book" method="post">
			<p>Book Title: <input type="text" name="title"></p>
			<p>Author:</p>
			<?= $this->session->flashdata('error'); ?>
			<p>Choose from list:
			<select name="author_list">
				<option  value="none">None</option>
				<?php foreach($authors as $author)
				{	
					echo "<option value='{$author['id']}''>".$author['name']."</option>";
				} ?>
				
			</select>
		</p>
		<p>Or add a new author: <input type="text" name="add_author"></p>
		<p>Review:</p>
		<textarea name="review"></textarea>
		<p>Rating: 
			<select name="rating">
				<option value="1" >1</option>
				<option value="2">2</option>
				<option value="3">3</option>
				<option value="4">4</option>
				<option value="5">5</option>
			</select>
			stars.
		</p>
		<button type="submit">Add Book and Review</button>
		</form>
	</div>
</body>
</html>