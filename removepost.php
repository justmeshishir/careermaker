<?php
	session_start();
	include('config/db.php');

	$postId = $_POST['hidden'];

	$q = "DELETE FROM `post` WHERE id = '$postId'";
	mysql_query($q);
	header("Location: admin.php");
?>
