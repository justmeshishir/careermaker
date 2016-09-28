<?php
session_start();
	include('config/db.php');
	$id = $_GET['id'];

	
	$q = "DELETE FROM `staff` WHERE `id` ='$id';";
	mysql_query($q);
	
	
	header("Location: viewstaff.php?delete=1");
?>