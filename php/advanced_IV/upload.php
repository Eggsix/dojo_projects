<?php 
session_start();
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["files"]["name"]);
move_uploaded_file($_FILES["files"]["tmp_name"], $target_file);
 

?>