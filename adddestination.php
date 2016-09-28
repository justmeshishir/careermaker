<?php
	session_start();
	include('config/db.php');
	$newDestination = $_POST['newDestination'];
	
	$q = "INSERT INTO `destination`(`id`, `name`) VALUES (NULL, '$newDestination')";
	mysql_query($q);
	
	header('Location: admin.php?yes=1');
?>