<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Courses</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<style type="text/css">
		#wrapper{
			width: 400px;
			margin: 0 auto;
		}
		table, th, td {
			border-collapse: collapse;
			width: 600px;
		}
		table {
			border: 1px solid black;
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
		<div id="form">
			<h2>Add a new course</h2>
			<form class="col-xs-10" action="add_course" method="post">
				<label>Name:</label><input class="form-control" type="text" name="title">
				<label>Description:</label>
				<textarea class="form-control" name="description"></textarea>
				<button type="submit">add</button>
			</form>
		</div>
		<table>
			<tr>
				<th>Title</th>
				<th>Description</th>
				<th>Date Added</th>
				<th>Actions</th>
			</tr>
			<?php foreach($course as $class) {?>
				<tr>
					<td><?= $class['title'] ?></td>
					<td><?= $class['description'] ?></td>
					<td><?= $class['created_at'] ?></td>
					<td><a href="courses/destroy/<?= $class['id'] ?>">Remove</a></td>
				</tr>
			<?php } ?>
		</table>
	</div>	
</body>
</html>