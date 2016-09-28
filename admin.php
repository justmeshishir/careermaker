<?php
	
session_start();
include('config/db.php');
if(!isset($_SESSION['login'])&&$_SESSION['login']!='yes'){
header("Location: index.php");
exit;
}
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Career Maker- Admin Page</title>
<link href="style.css" rel="stylesheet" type="text/css" />
</head>

<body>
	<div class="wrapper">
    	<?php include('includes/banner.php'); ?>
    <?php include('includes/navbar.php'); ?>
    <h1 align="center">Admin Page</h1>
    <?php
		if(isset($_GET['success']) && $_GET['success']==1)
		{
	?>
    <div style="color:hsla(248,100%,50%,1.00); padding:5px; width:60%; margin:0 auto; background-color:hsla(120,80%,69%,1.00); font-size:24px; text-align:center; height:30px; border-radius:10px;">Post added successfully.</div>
    <?php
		}
	?>
    <?php
		if(isset($_GET['yes']) && $_GET['yes']==1)
		{
	?>
    <div style="color:hsla(248,100%,50%,1.00); padding:5px; width:60%; margin:0 auto; background-color:hsla(120,80%,69%,1.00); font-size:24px; text-align:center; height:30px; border-radius:10px;">Destination added successfully.</div>
    <?php
		}
	?>
    <div class="form">
    <form method="post" action="#" enctype="multipart/form-data">
    	<h2>Change Password:</h2><br /><br />
        <label>Old Password: </label><input type="password" class="oldPassword" id="oldPassword" name="oldPassword" placeholder="Enter old password" /><br /><br />
        
        <label>New Password: </label><input type="password" class="newPassword" id="newPassword" name="newPassword" placeholder="Enter new password" /><br /><br />
        
        <label>Repeat new Password: </label><input type="password" class="repeatPassword" id="repeatPassword" name="repeatPassword" placeholder="Repeat new password" /><br /><br />
        <input type="submit" class="submit" name="submit" value="Save" />
     </form>
     </div>
     <div class="form">
     	<h2>Post: </h2><br/><br/>
         <form method="post" action="addpost.php" enctype="multipart/form-data"><label>New Post: </label><input type="text" class="newPost" id="newPost" name="newPost" placeholder="Enter new Post"/><br/><br/>
       <input type="submit" class="submit" value="+ Add"></form><br/><br/>
       <form method="post" action="removepost.php">
        <label>Remove Post: </label><select name="removePost" >
        <?php
			$q = "SELECT * FROM `post`";
			$res = mysql_query($q);
			$num = mysql_num_rows($res);
			for ($i=0;$i<$num;$i++){
				$row = mysql_fetch_array($res);
				$postname = $row['name'];
                $postId = $row['id'];
		?>
        <option value="<?php echo $postId; ?>"> <?php echo $postname; ?></option>
        <?php
			}
		?>
        </select><br/><br/>

        <input type="submit" class="submit" value="Remove"></form><br/><br/>
     </div>
     <div class="form">
     	<h2>Destination: </h2><br/><br/>
        <form method="post" action="adddestination.php" enctype="multipart/form-data"><label>New Destination: </label><input type="text" class="newDestination" id="newDestination" name="newDestination" placeholder="Enter new Destination"/><br/><br/>
        <input type="submit" class="submit" value="+ Add"></form><br/><br/>
        
        <label>Remove Destination: </label><select name="removeDestination">
        <?php
			$q1 = "SELECT * FROM `destination`";
			$res1 = mysql_query($q1);
			$num1 = mysql_num_rows($res1);
			for ($i=0;$i<$num1;$i++){
				$row1 = mysql_fetch_array($res1);
				$destinationname = $row1['name'];
		?> 
        <option><?php echo $destinationname; ?></option>
        <?php
			}
		?>
        </select><br/><br/>
        <form method="post" action="removedestination.php"><input type="submit" class="submit" value="Remove"></form><br/><br/>
     </div>
     <?php include('includes/footer.php'); ?>
    </div>
</body>
</html>