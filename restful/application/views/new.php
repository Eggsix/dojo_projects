<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>New</title>
</head>
<body>
	<div id="wrappper">
		<h1>Add a new product</h1>
		<form action="/create_product" method="post">
			<p>Name:<input type="text" name="name" placeholder="item name"></p>
			<p>Description:</p><textarea name="description"></textarea>
			<p>Price:<input type="text" name="price" placeholder="$$"></p>
		  <button type="submit">Create</button>
		</form>
		<a href="/">Go Back</a>
	</div>
</body>
</html>