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
	$approval = $_POST['approval'];
	$studentId = $_POST['hidden'];
	//for files
	$r = "UPDATE `student` SET `firstname`='$fname',`lastname`='$lname',`gender`='$gender',`address`='$address',`contact`='$contact',`parentname`='$pname',`parentno`='$pcontact',`email`='$email',`level`='$level',`destinationId`='$destination',`working_exp`='$exp',`visatype`='$visa',`approval`='$approval' WHERE id ='$studentId';";
	mysql_query($r);
if(file_exists($_FILES['file1']['tmp_name']))
{
	$file = rand(1000,100000)."-".$_FILES['file1']['name'];
	$file_loc = $_FILES['file1']['tmp_name'];
	$file_size = $_FILES['file1']['size'];
	$file_type = $_FILES['file1']['type'];
	$folder="uploads/";
	 
	 // new file size in KB
	 $new_size = $file_size/1024;  
	
	 
	 // make file name in lower case
	 $new_file_name = strtolower($file);
	 
	 $final_file=str_replace(' ','-',$new_file_name);
	 
	 move_uploaded_file($file_loc,$folder.$final_file);
	 $q="INSERT INTO `document`(`id`, `studentId`, `upload`, `type`, `size`) VALUES (NULL,'$studentId','$file','$file_type','$file_size')";
	
	  mysql_query($q);
}
if(file_exists($_FILES['file2']['tmp_name']))
{
	$file = rand(1000,100000)."-".$_FILES['file2']['name'];
	$file_loc = $_FILES['file2']['tmp_name'];
	$file_size = $_FILES['file2']['size'];
	$file_type = $_FILES['file2']['type'];
	$folder="uploads/";
	 
	 // new file size in KB
	 $new_size = $file_size/1024;  
	
	 
	 // make file name in lower case
	 $new_file_name = strtolower($file);
	 
	 $final_file=str_replace(' ','-',$new_file_name);
	 
	 move_uploaded_file($file_loc,$folder.$final_file);
	 $q="INSERT INTO `document`(`id`, `studentId`, `upload`, `type`, `size`) VALUES (NULL,'$studentId','$file','$file_type','$file_size')";
	
	  mysql_query($q);
}
if(file_exists($_FILES['file3']['tmp_name']))
{
	$file = rand(1000,100000)."-".$_FILES['file3']['name'];
	$file_loc = $_FILES['file3']['tmp_name'];
	$file_size = $_FILES['file3']['size'];
	$file_type = $_FILES['file3']['type'];
	$folder="uploads/";
	 
	 // new file size in KB
	 $new_size = $file_size/1024;  
	
	 
	 // make file name in lower case
	 $new_file_name = strtolower($file);
	 
	 $final_file=str_replace(' ','-',$new_file_name);
	 
	 move_uploaded_file($file_loc,$folder.$final_file);
	 $q="INSERT INTO `document`(`id`, `studentId`, `upload`, `type`, `size`) VALUES (NULL,'$studentId','$file','$file_type','$file_size')";
	
	  mysql_query($q);
}
if(file_exists($_FILES['file4']['tmp_name']))
{
	$file = rand(1000,100000)."-".$_FILES['file4']['name'];
	$file_loc = $_FILES['file4']['tmp_name'];
	$file_size = $_FILES['file4']['size'];
	$file_type = $_FILES['file4']['type'];
	$folder="uploads/";
	 
	 // new file size in KB
	 $new_size = $file_size/1024;  
	
	 
	 // make file name in lower case
	 $new_file_name = strtolower($file);
	 
	 $final_file=str_replace(' ','-',$new_file_name);
	 
	 move_uploaded_file($file_loc,$folder.$final_file);
	 $q="INSERT INTO `document`(`id`, `studentId`, `upload`, `type`, `size`) VALUES (NULL,'$studentId','$file','$file_type','$file_size')";
	
	  mysql_query($q);
}
if(file_exists($_FILES['file5']['tmp_name']))
{
	$file = rand(1000,100000)."-".$_FILES['file5']['name'];
	$file_loc = $_FILES['file5']['tmp_name'];
	$file_size = $_FILES['file5']['size'];
	$file_type = $_FILES['file5']['type'];
	$folder="uploads/";
	 
	 // new file size in KB
	 $new_size = $file_size/1024;  
	
	 
	 // make file name in lower case
	 $new_file_name = strtolower($file);
	 
	 $final_file=str_replace(' ','-',$new_file_name);
	 
	 move_uploaded_file($file_loc,$folder.$final_file);
	 $q="INSERT INTO `document`(`id`, `studentId`, `upload`, `type`, `size`) VALUES (NULL,'$studentId','$file','$file_type','$file_size')";
	
	  mysql_query($q);
}
if(file_exists($_FILES['file6']['tmp_name']))
{
	$file = rand(1000,100000)."-".$_FILES['file6']['name'];
	$file_loc = $_FILES['file6']['tmp_name'];
	$file_size = $_FILES['file6']['size'];
	$file_type = $_FILES['file6']['type'];
	$folder="uploads/";
	 
	 // new file size in KB
	 $new_size = $file_size/1024;  
	
	 
	 // make file name in lower case
	 $new_file_name = strtolower($file);
	 
	 $final_file=str_replace(' ','-',$new_file_name);
	 
	 move_uploaded_file($file_loc,$folder.$final_file);
	 $q="INSERT INTO `document`(`id`, `studentId`, `upload`, `type`, `size`) VALUES (NULL,'$studentId','$file','$file_type','$file_size')";
	
	  mysql_query($q);
	 
}
 header("Location: viewstudent.php?yahoo=1");