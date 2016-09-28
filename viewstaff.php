<?php
session_start();
include('config\db.php');
if(!isset($_SESSION['login'])&&$_SESSION['login']!='yes'){
header("Location: index.php");
exit;
}

?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Career Maker - All staffs</title>
<link href="style.css" rel="stylesheet" type="text/css" />
<script src="js/jquery.min.js" type="text/javascript"></script>
<script>
	$(document).ready(function(){
		$('.delete').click(function(){
			var a=confirm('Are you sure?');	
			if(!a) return false;
		});	
	});
</script>
</head>

<body>
	<div class="wrapper">
    <?php include('includes/banner.php'); ?>
    <?php include('includes/navbar.php'); ?>
   <?php
   if(isset($_GET['delete']) && $_GET['delete']==1)
		{
	?>
    <div style="color:hsla(60,87%,64%,1.00); padding:5px; width:60%; margin:0 auto; background-color:hsla(359,83%,66%,1.00); font-size:24px; text-align:center; height:30px; border-radius:10px;">Deleted successfully.</div>
    <?php
		}
	?>
    <?php
    if(isset($_GET['yahoo']) && $_GET['yahoo']==1)
		{
	?>
    <div style="color:hsla(248,100%,50%,1.00); padding:5px; width:60%; margin:0 auto; background-color:hsla(120,80%,69%,1.00); font-size:24px; text-align:center; height:30px; border-radius:10px;">Edited successfully.</div>
    <?php
		}
	?>
    <div class="student-info">
    	<table border="1" cellspacing="0">
        	<tr><td colspan="10" bgcolor="#319DEB"><b>Staff Information</b></td></tr>
            <tr>
            	<td><b>S.N</b></td>
            	<td><b>Photo</b></td>
                <td><b>Name</b></td>
                <td><b>Contact</b></td>
                <td><b>Gender</b></td>
                <td><b>Email</b></td>
                <td><b>Post</b></td>
                <td><b>Address</b></td>
                <td><b>Enrolled Date</b></td>
            </tr>
             <?php
		$q = "SELECT * FROM `staff` ORDER BY firstname;";
		$result=mysql_query($q);
		$num = mysql_num_rows($result);
		for($i=1;$i<=$num;$i++)
		{
			$row=mysql_fetch_array($result);
			$staffId = $row['id'];
			$s = "SELECT * FROM `imagestaff` WHERE staffId = '$staffId';";
			$result2 = mysql_query($s);
			$row2=mysql_fetch_array($result2);
			
	?>
    			<tr>
    			<td><?php echo $i; ?></td>
            	<td><img src="staffimage/<?php echo $row2['photo_thumb']; ?>.jpg" height="100" width="100" /></td>
                <td><?php echo $row['firstname'].' '.$row['lastname'];?></td>
                <td><?php echo $row['contact']; ?></td>
                <td><?php echo $row['gender']; ?></td>
                <td><?php echo $row['email']; ?></td>
                <td><?php
                    $postId = $row['post_id'];
                    $q = "SELECT * FROM `post` WHERE id = '$postId';";
                    $res = mysql_query($q);
                    $row1 = mysql_fetch_array($res);
                    echo $row1['name'];
                 ?></td>
                <td><?php echo $row['address']; ?></td>
                <td><?php echo $row['date']; ?></td>
                <td><a href="edit-staff.php?id=<?php echo $staffId;?>"><img src="images/edit.png" title="edit" /> | <a href="delete-staff.php?id=<?php echo $staffId;?>" class="delete"><img src="images/delete.png" title="delete" /></td>
                </tr>
          <?php
		}
		  ?>
        </table>
    </div>
    <?php include('includes/footer.php'); ?>
    </div>
</body>
</html>