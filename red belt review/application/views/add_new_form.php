<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<style>
		header a{
			margin-right: 30px
		}
		header {
			margin-left: 90%;
		}
		#wrapper{
			padding: 20px;
		}
	</style>
</head>
<body>
	<header>
		<a href="/main_page">Home</a><a href="/logout">Logout</a>
	</header>
	<div id="wrapper">
		<h2>Add a New Book Title and a Review:</h2>

		<form action="/process_review" method="post">
			<p>Book Title: <input type="text" name="book_title"></p>
			<p>Author</p>
			<p>Choose from list: 
			<select name="author_list">
				<option>-select-</option>	
			</select>
			</p>
			<p>Or add a new author: <input type="text" name="author_name"></p>
			<p>Review:</p>
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
			<button type="submit">Add Book and Review</button>
		</form>
	</div>
</body>
</html>