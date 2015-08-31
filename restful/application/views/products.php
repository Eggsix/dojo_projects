<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Products</title>
	<style type="text/css">
		#items {
			height: 200px;
			width: 800px;
			border: 1px solid black;
			overflow: scroll;
		}
		table, th, td {
			border-collapse: collapse;
		}
		table {
			border: 1px solid black;
			width: 800px;
			height: 300px;
		}
		th {
			border: 1px solid black;
		}
		td {
			border: 1px solid black;
		}
	</style>
</head>
<body>
	<div id="wrapper">
		<h1>Products</h1>
		<div id="items">
			<table>
				<tr>
					<th>Name</th>
					<th>Description</th>
					<th>Price</th>
					<th>Actions</th>
				</tr>
				<?php foreach($all_products as $product) {?> 
					<tr>
						<td><?= $product['name'] ?></td>
						<td><?= $product['description'] ?></td>
						<td><?= $product['price'] ?></td>
						<td><a href="/read/<?= $product['id'] ?>">Show</a>|
								<a href="/show_edit/<?= $product['id'] ?>">Edit</a>
								<button><a href="/destroy/<?= $product['id'] ?>">Delete</a></button>
						</td>
					</tr>
				<?php } ?>
			</table>
		</div>
		<a href="/add_product">add a new product</a>
	</div>	
</body>
</html>