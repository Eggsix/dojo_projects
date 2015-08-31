<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Notes</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function() {
			$.get('notes/index_html', function(res) {
				$('#notes').html(res);
			});
		});

		$(document).on('submit', '#delete, #update, #add', function() {
			$.post($(this).attr('action'), $(this).serialize(), function(res){
				$('#notes').html(res);
			});
			return false;
		}); 
	</script>
	<style>
		li {
			list-style-type: none;
		}
	</style>
</head>
<body>
	<div id="wrapper">
		<h1>Notes</h1>
		<ul id="notes">		
		</ul>
		<form  id='add' action="notes/add_note" method="post">
			<p><input type="text" name="title" placeholder="Insert note title here..."></p>
			<button type="submit">Add Note</button>
		</form>
	</div>
</body>
</html>