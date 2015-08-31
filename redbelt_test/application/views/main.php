<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<style type="text/css">
		header h1 {
			display: inline-block;
		}
		#nav_links {
			display: inline-block;
			margin-left: 65%;
		}
		#review_list {
			height: 500px;
			width: 700px;
			border: 1px solid black;
		}
		.inline {
			display: inline-block;
			vertical-align: top;
		}
		#list {
			height: 300px;
			width: 350px;
			overflow: scroll;
			border: 1px solid black;
		}
	</style>
</head>
<body>
	<header>
		<h1>Welcome, <?=  $user['name']?></h1>
		<div id="nav_links">
			<a href="/add_book_view">Add Book and Review</a>
			<a href="/logoff">Log out</a>
		</div>
	</header>
	<div id="recent" class="inline">
		<h1>Recent Book Reviews:</h1>
		<div id="review_list">
			<ul>
				<!-- List of recent 3 goes here-->
			</ul>		
		</div>
	</div>
	<div id="other" class="inline">
		<h1>Other books with reviews:</h1>
		<ul id="list">
			
		</ul>
	</div>
	
</body>
</html>