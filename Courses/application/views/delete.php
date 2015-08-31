<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<div class="wrapper">
		<h1>Are you sure you want to delete the following course?</h1>
		<p>Name: <?= $course['title'] ?></p>
		<p>Description: <?= $course['description'] ?></p>
		<a href="/"><button>No</button></a>
		<a href="/courses/delete/<?= $course['id'] ?>"><button>Yes! I want to delete this</button></a>
	</div>
</body>
</html>