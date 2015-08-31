<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<div id="wrapper">
		<h1>Edit Product #</h1>
		<form action="/update_item/<?= $item['id'] ?>" method="post">
			<p>Name:<input type="text" name="name" value="<?= $item['name'] ?>"></p>
			<p>Description:</p><textarea name="description"><?= $item['description'] ?></textarea>
			<p>Price:<input type="text" name="price" value="<?= $item['price'] ?>"></p>
			<button type="submit">Update</button>
		</form>
		<a href="/read/<?= $item['id'] ?>">Show</a>
		<a href="/">Back</a>
	</div>
	
</body>
</html>