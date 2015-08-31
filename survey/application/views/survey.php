<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<style type="text/css">
	
	</style>
</head>
<body>
	<form action="process" method="post">

		Name:<input type="text" name="name" placeholder="name"><br>
		Dojo Location:
		<select name="location">
			<option value="Mountain View">Mountain View</option>
			<option value="Seattle">Seattle</option>
			<option value="Silicon Valley">Silicon Valley</option>
		</select><br>
		Favorite Language:
		<select name="Favorite Language">
			<option value="Javascript">Javascript</option>
			<option value="Ruby">Ruby</option>
			<option value="PHP">PHP</option>
		</select><br>
		<label>Comment(optional)</label><br>
		<textarea name="comment"></textarea><br>
		<button type="submit">Submit</button>
	</form>
</body>
</html>