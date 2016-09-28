<?php
	session_start();
	include('config/db.php');
	$newPost = $_POST['newPost'];
	
	$q = "INSERT INTO `post`(`id`, `name`) VALUES (NULL,'$newPost')";
	mysql_query($q);
	header("Location: admin.php?success=1");

?>