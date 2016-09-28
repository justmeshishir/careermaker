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
	$date = date("Y-m-d H:i:s");
	
	$q ="INSERT INTO `staff` (`id`, `firstname`, `lastname`, `gender`, `address`, `contact`, `email`, `post_id`, `level`, `date`) VALUES (NULL, '$fname', '$lname', '$gender', '$address', '$contact', '$email', '$post', '$level', '$date');";
	
	
	if(mysql_query($q))
	{
		$id = mysql_insert_id();
		$image = $id.'.jpg';
		$image_thumb = $id.'_thumb.jpg';
		
	if(ImgUpload('image','staffimage/',$image))
			{
				
				
				ImageResizeWithCrop(600,600,"staffimage/$image","staffimage/$image_thumb");
				
				
				$r = "INSERT INTO `imagestaff`(`id`, `staffId`, `photo_thumb`, `photo`) VALUES (NULL,'$id','$image_thumb','$image');";
				mysql_query($r);				
			}
			 
	}
header("Location: addstaff.php?success=1");	
?>