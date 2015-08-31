<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function() {
			$.get('/posts/index_html', function(res) {
				$('#posts').html(res);
			});
			$('form').submit(function() {
				$.post($(this).attr('action'), $(this).serialize(), function(res) {
					$('#posts').html(res);
				});
				return false;
			});
		});
	</script>
</head>
<style>
	#wrapper{
		padding: 20px;
	}
	li {
		display: inline-block;
		height: 300px;
		width: 300px;
		border: 1px solid black;
		border-radius: 5px;
	}
</style>
<body>
	<div id="wrapper">
		<h1>My Posts:</h1>
		<ul id="posts">

		</ul>
		<form action="/add_note" method="post">
			<p>Add a note:</p>
			<textarea name="post" id="post" cols="30" rows="10"></textarea>
			<button type="submit">Post it!</button>
		</form>
	</div>
</body>
</html>