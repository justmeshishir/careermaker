<?php
	
session_start();
if(!isset($_SESSION['login'])&&$_SESSION['login']!='yes'){
header("Location: index.php");
exit;
}
include('config/db.php');
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Career Maker- Add new staff</title>
<link href="style.css" rel="stylesheet" type="text/css" />
</head>

<body>
	<div class="wrapper">
    <?php include('includes/banner.php'); ?>
    <?php include('includes/navbar.php'); ?>
    <?php
		$id = $_GET['id'];
		$q = "SELECT * FROM staff WHERE id='$id'";
		$res = mysql_query($q);
		$row = mysql_fetch_array($res);
	?>
    <h1 align="center">Staff Record Form</h1>
    <div class="form">
    	<form action="editstaff-action.php" method="post" enctype="multipart/form-data">
        	<label>Firstname: </label><input type="text" id="firstname" name="firstname" placeholder="Enter your firstname" value="<?php echo $row['firstname']; ?>" required /><br /><br />
            <label>Lastname: </label><input type="text" id="lastname" name="lastname" placeholder="Enter your lastname" value="<?php echo $row['lastname']; ?>" required /><br /><br />
            <label>Gender: </label><input type="radio" id="g1" name="gender" value="male" <?php if($row['gender']=='male') echo "checked"; ?> required>Male
            <input type="radio" id="g2" name="gender" value="female" <?php if($row['gender']=='female') echo "checked"; ?> required>Female<br /><br />
            <label>Address: </label><input type="text" id="address" name="address" placeholder="Enter your address" value="<?php echo $row['address']; ?>" required /><br /><br />
            <label>Contact no: </label><input type="number" id="contact" name="contact" placeholder="Enter your contact number" value="<?php echo $row['contact']; ?>" required /><br /><br />
            <label>Email: </label><input type="email" id="email" name="email" placeholder="Enter your email" value="<?php echo $row['email']; ?>"  required/><br /><br />
            <label>Post: </label><select name="post" required>
            <option selected><?php 
            $postId = $row['post_id'];
            $q = "SELECT name FROM `post` WHERE id = '$postId';";
            $res = mysql_query($q);
            $post = mysql_fetch_array($res);
            echo $post['name'];
             ?></option>
            <?php
                $query = "SELECT * FROM `post`;";
                $result = mysql_query($query);
                $num = mysql_num_rows($result);
                for($i=1;$i<=$num;$i++)
                {
                    $row1 = mysql_fetch_array($result);
                    $post = $row1['name'];
            ?>
            	<option value="<?php echo $row1['id']; ?>"><?php echo $post; ?></option>
            <?php
                }
            ?>    
                </select><br /><br />
            <label>Level: </label><select name="level" required>
            <option selected><?php echo $row['level']; ?></option>
            	<option>SLC</option>
                <option>+2</option>
                <option>Bachleor</option>
                <option>Diploma</option>
                <option>Masters</option>
            </select><br /><br />
           <input type="hidden" id="hidden" name="hidden" value="<?php echo $row['id']; ?>" />
            <input type="submit" class="submit" name="submit" value="Save" />
        </form>
    </div>
    <?php include('includes/footer.php'); ?>
    </div>
    
</body>
</html>