<?php
session_start();
	include('config/db.php');
	$id = $_GET['id'];

	
	$q = "DELETE FROM `student` WHERE `id` ='$id';";
	mysql_query($q);
	
	
	header("Location: viewstudent.php?delete=1");
?>