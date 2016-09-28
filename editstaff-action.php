<?php
	session_start();
	include('config/db.php');
	include('image_functions.php');
	
	$fname = $_POST['firstname'];
	$lname = $_POST['lastname'];
	$gender = $_POST['gender'];
	$address = $_POST['address'];
	$contact = $_POST['contact'];
	$email = $_POST['email'];
	$post = $_POST['post'];
	$level = $_POST['level'];
	$staffId = $_POST['hidden'];
	
	$q = "UPDATE `staff` SET `firstname`= '$fname',`lastname`= '$lname',`gender`= '$gender',`address`= '$address',`contact`= '$contact',`email`= '$email',`post_id`= '$post',`level`='$level' WHERE id='$staffId'";
	mysql_query($q);
	header("Location: viewstaff.php?yahoo=1");