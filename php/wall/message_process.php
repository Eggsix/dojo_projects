<?php 
session_start();
require_once('wall_db.php');
header('location: wall.php');

if(isset($_POST['action']) && $_POST['action'] == "message") {

	user_message($_POST);

}

if(isset($_POST['action']) && $_POST['action'] == "comment") {
	
	user_comment($_POST);

} 

//----------Validates comment ------------//

function user_comment($post) 
{
	$_SESSION['errors'] = array();
	if(empty($post['comment'])) 
	{
		$_SESSION['errors'][] = "Comment cannot be blank";
	}
	if(count($_SESSION['errors']) == 0) 
	{
		$query = "INSERT INTO wall.comments (comment, created_at, updated_at, users_id, messages_id) VALUES ('{$post['comment']}', NOW(), NOW(), '{$_SESSION['user_id']}', '{$_POST['message_id']}');";
		$_SESSION['success_message'] = "Your comment has been posted";
		run_mysql_query($query);
	}
}


//----------Validates message ------------//

function user_message($post) 
{
	$_SESSION['errors'] = array();
	if(empty($post['message'])) 
	{
		$_SESSION['errors'][] = "Message cannot be blank";
	}

//----------No Errors then run query------------//

	if(count($_SESSION['errors']) == 0) 
	{
		$query = "INSERT INTO wall.messages (message, created_at, updated_at, users_id) VALUES ('{$_POST['message']}', NOW(), NOW(), {$_SESSION['user_id']});";
		$_SESSION['success_message'] = "Your message has successfully been posted!";
		run_mysql_query($query);
	}
}
?>