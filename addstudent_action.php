<?php
	session_start();
	include('config/db.php');
	include('image_functions.php');
	$fname = $_POST['firstname'];
	$lname = $_POST['lastname'];
	$gender = $_POST['gender'];
	$address = $_POST['address'];
	$contact = $_POST['contact'];
	$pname = $_POST['pname'];
	$pcontact = $_POST['pcontact'];
	$email = $_POST['email'];
	$level = $_POST['level'];
	$visa = $_POST['visa'];
	$exp = $_POST['exp'];
	$destination = $_POST['destination'];
	$date = date("Y-m-d H:i:s");
	//echo $fname.' '.$lname;
	$q = "INSERT INTO `student` (`id`, `firstname`, `lastname`, `gender`, `address`, `contact`, `parentname`, `parentno`, `email`, `level`, `destinationId`, `date`, `working_exp`, `visatype`, `approval`) VALUES (NULL, '$fname', '$lname', '$gender', '$address', '$contact', '$pname', '$pcontact', '$email', '$level', '$destination', '$date', '$exp', '$visa', 'no');";
	if(mysql_query($q))
	{
		$id = mysql_insert_id();
		$image = $id.'.jpg';
		$image_thumb = $id.'_thumb.jpg';
	if(ImgUpload('image','userimage/',$image))
			{
				ImageResizeWithCrop(600,600,"userimage/$image","userimage/$image_thumb");
				
				
				$r = "INSERT INTO `image` (`id`, `studentId`, `photo_thumb`,`photo`) VALUES (NULL, '$id', '$image_thumb','$image');";
				mysql_query($r);
			}
	}
	//mysql_error();
	//exit;
	header("Location: addstudent.php?success=1"); 

?>