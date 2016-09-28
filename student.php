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
<title>Career Maker- Student Information</title>
<link href="style.css" rel="stylesheet" type="text/css" />
</head>

<body>
	<div class="wrapper">
    	 <?php include('includes/banner.php'); ?>
    	<?php include('includes/navbar.php'); ?>
        <div class="completeInfo">
        <?php 
			$studentId = $_GET['id'];
			$q = "SELECT * FROM image WHERE studentId='$studentId';";
			$result = mysql_query($q);
			$row = mysql_fetch_array($result);
			$r = "SELECT * FROM student WHERE id='$studentId';";
			$result1 = mysql_query($r);
			$row1 = mysql_fetch_array($result1);
			$destination = $row1['destinationId'];
			$query = "SELECT * FROM `destination` WHERE id='$destination';";
			$ans = mysql_query($query);
			$row2 = mysql_fetch_array($ans);
		?>	
        	<div class="table">
            	<table>
                	<tr>
                		<td><label>Name: </label></td>
                        <td id="content"><?php echo $row1['firstname'].' '.$row1['lastname']; ?></td>
                    </tr>
                    <tr>
                		<td><label>Gender: </label></td>
                        <td id="content"><?php echo $row1['gender']; ?></td>
                    </tr>
                    <tr>
                		<td><label>Address: </label></td>
                        <td id="content"><?php echo $row1['address']; ?></td>
                    </tr>
                    <tr>
                		<td><label>Contact no: </label></td>
                        <td id="content"><?php echo $row1['contact']; ?></td>
                    </tr>
                    <tr>
                		<td><label>Parents' Name: </label></td>
                        <td id="content"><?php echo $row1['parentname']; ?></td>
                    </tr>
                    <tr>
                		<td><label>Parents' no: </label></td>
                        <td id="content"><?php echo $row1['parentno']; ?></td>
                    </tr>
                    <tr>
                		<td><label>Email: </label></td>
                        <td id="content"><?php echo $row1['email']; ?></td>
                    </tr>
                    <tr>
                		<td><label>Level: </label></td>
                        <td id="content"><?php echo $row1['level']; ?></td>
                    </tr>
                    <tr>
                		<td><label>Destination: </label></td>
                        <td id="content"><?php echo $row2['name']; ?></td>
                    </tr>
                    <tr>
                		<td><label>Visa Apply: </label></td>
                        <td id="content"><?php echo $row1['visatype']; ?></td>
                    </tr>
                    <tr>
                		<td><label>Working Experience: </label></td>
                        <td id="content"><?php echo $row1['working_exp']; ?></td>
                    </tr>
                     <tr>
                		<td><label>Issued Date: </label></td>
                        <td id="content"><?php echo $row1['date']; ?></td>
                    </tr>
                    <tr>
                		<td><label>Status: </label></td>
                        <td id="content"><?php echo $row1['approval']; ?></td>
                    </tr>
                    <tr>
                		<td><label>Documents: </label></td>
                        <td id="content">
                 <?php				
				$s = "SELECT * FROM document WHERE studentId = '$studentId'";
				$res = mysql_query($s);
				$n = mysql_num_rows($res);
				for($i=1; $i<=$n; $i++)
				{
					$rw = mysql_fetch_array($res);
					$upload = $rw['upload'];
		?>
    			<a href="uploads/<?php echo $upload;?>" target="_blank"><?php echo $upload ?></a><br/>
             <?php
				}
			?>
            			</td>
                   </tr>
                    
                </table>
             </div>
           <div id="image">
           		<img src="userimage/<?php echo $row['photo_thumb']; ?>.jpg" height="200" width="200">
           </div>
        </div>
        <?php include('includes/footer.php'); ?>
    </div>
</body>
</html>