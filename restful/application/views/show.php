<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Show Product</title>
</head>
<body>
	<div id="wrapper">
		<h1>Product <?= $item['id'] ?></h1>
		<p>Name: <?= $item['name'] ?></p>
		<p>Description: <?= $item['description'] ?></p>
		<p>Price: <?= $item['price'] ?> </p>
		<a href="/show_edit/<?= $item['id'] ?>">Edit</a>
		<a href="/">Back</a>
	</div>
	
</body>
</html>