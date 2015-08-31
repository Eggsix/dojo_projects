<?php
session_start();
require_once('wall_db.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
</head>
<style type="text/css">
	.error {
		color: red;
		margin: 0;
	}
	.success {
		color: green;
	}
	.date {
		margin-left: 70%;
	}
	li {
		list-style-type: none;
	}
	.message {
		font-size: .8em;
	}
	.comment {
		font-size: 1.5em;
		border-bottom: 1px solid black;
	}
	.inline {
		display: inline-block;
		vertical-align: middle;
	}
	#posts {
		padding-left: 20px;
		margin-left: 20%;
		border-right: 1px solid black; 
		border-left: 1px solid black;
		height: 500px;
		width: 900px;
		overflow: scroll;
	}
	#post {
		border-top: 1px solid black;
	}
	header {
		background-color: grey;
		height: 75px;
		margin: 0 auto;
	}
	#logoff {
		margin-left: 50%;
	}

</style>
<body>
	<header>
		<h1 class="inline">WELCOME <?= $_SESSION['first_name']?>, TO THE WALL!</h1>
		<form class="inline" id="logoff" action="process.php">
			<input type="hidden" name="log_off" value="log_off">
			<input type="submit" value="Log off">
		</form>
	</header>
	<div class="container">
		<h1>|Wall|</h1>
		<?php
			//error message
			if(isset($_SESSION['errors'])) 
			{
				foreach ($_SESSION['errors'] as $error) {

					echo "<p class='error'> {$error} </p>";					
				}	
				unset($_SESSION['errors']);
			} 
			// success message 
			if(isset($_SESSION['success_message'])) 
			{
				echo "<p class='success'>{$_SESSION['success_message']}</p>";

				unset($_SESSION['success_message']);
			}
		?>
		<h2>Post a message</h2>
		<form action="message_process.php" method="post">
			<input type="hidden" name="action" value="message">
			<textarea class="form-control" rows="5" name="message"></textarea>
			<button class="btn-success"type="submit">Post!</button>
		</form>
			<div id="posts">
			<?php 

				// database information
				$messages = "SELECT  messages.id, first_name, last_name, message, messages.created_at FROM users join messages ON users.id = messages.users_id ORDER BY messages.created_at DESC";
				$message = fetch_all($messages);	
				$comments = "SELECT users.first_name, users.last_name, messages.id, comments.comment, comments.created_at FROM users LEFT JOIN messages ON users.id = messages.users_id LEFT JOIN comments ON messages.id = comments.messages_id ORDER BY comments.created_at ASC";
				$comment = fetch_all($comments);	
				foreach ($message as $post) 
				{
					echo "<div id='post'><h2> {$post['first_name']} {$post['last_name']} said....<h2>";
					echo "<p class='message'> {$post['message']} </p>";
					echo "<p class='date'>" . date("F jS, Y", strtotime($post['created_at'])) . "</p></div>";
					echo "<form action='message_process.php' method='post'>
									<input type='hidden' name='action' value='comment'>
									<input type='hidden' name='message_id' value='{$post['id']}'>
									<textarea class='form-control' rows='3' name='comment'></textarea>
									<button class='btn-success type='submit'>Comment</button>
								</form>";
								foreach ($comment as $reply) 
								{
									if($post['id'] == $reply['id']) 
									{
										echo "<p>{$reply['first_name']} {$reply['last_name']} said... at " . date("F jS, Y", strtotime($reply['created_at'])) . "</p>";
										echo "<p class='comment'>{$reply['comment']}</p>";
									}
								}
				}
			?>
			</div>
	</div>
</body>
</html>