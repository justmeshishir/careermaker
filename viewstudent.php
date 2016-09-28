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
<title>Career Maker - All students</title>
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
    <div class="form">
    <?php
	 if(isset($_POST['search']) && !empty($_POST['search']))
			 {
				 $search = $_POST['search'];
				 $q = "SELECT * FROM `student` WHERE `firstname` LIKE '%$search%' OR `lastname` LIKE '%$search%' OR `gender` = '$search' OR `visatype` = '$search' OR `contact` LIKE '%$search%' OR  `address` LIKE '%$search%' OR `email` LIKE '%$search%' OR `level` = '$search'";
		$result=mysql_query($q);
		$num = mysql_num_rows($result);
		//echo $num;
		//mysql_error();
		//exit;
				 if($num==0){
		echo "<h3>No results found..!!</h3>";
		unset($_POST['search']);
		exit;
				 }
	
			 }
		else
		{
			$q = "SELECT * FROM `student` ORDER BY firstname;";
			$result=mysql_query($q);
		$num = mysql_num_rows($result);
		}
	?>
    	<form method="post" action="viewstudent.php">
        <div style="border-radius:15px;"></div><input type="text" name="search" id="search" placeholder="Search Student"/>
        <input type="submit" value="Search">
        </form>
    </div>
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
        	<tr><td colspan="9" bgcolor="#319DEB"><b>Students Information</b></td></tr>
            <tr>
            	<td><b>S.N</b></td>
            	<td><b>Photo</b></td>
                <td><b>Name</b></td>
                <td><b>Contact</b></td>
                <td><b>Gender</b></td>
                <td><b>Visa</b></td>
                <td><b>Destination</b></td>
                <td><b>Status</b></td>
            </tr>
             <?php
			
		
		for($i=1;$i<=$num;$i++)
		{
			$row=mysql_fetch_array($result);
			$studentId = $row['id'];
			$destinationId = $row['destinationId'];
			$r = "SELECT * FROM `destination` WHERE id = '$destinationId';";
			$result1 = mysql_query($r);
			$row1=mysql_fetch_array($result1);
			$s = "SELECT * FROM `image` WHERE studentId = '$studentId';";
			$result2 = mysql_query($s);
			$row2=mysql_fetch_array($result2);
			
	?>
    			<tr>
    			<td><?php echo $i; ?></td>
            	<td><img src="userimage/<?php echo $row2['photo_thumb']; ?>.jpg" height="100" width="100" /></td>
                <td><a href="student.php?id=<?php echo $studentId;?>"><?php echo $row['firstname'].' '.$row['lastname'];?></a></td>
                <td><?php echo $row['contact']; ?></td>
                <td><?php echo $row['gender']; ?></td>
                <td><?php echo $row['visatype']; ?></td>
                <td><?php echo $row1['name']; ?></td>
                <td><?php echo $row['approval']; ?></td>
                <td><a href="edit-student.php?id=<?php echo $studentId;?>"><img src="images/edit.png" title="edit" /> | <a href="delete-student.php?id=<?php echo $studentId;?>" class="delete"><img src="images/delete.png" title="delete" /></td>
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