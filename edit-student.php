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
<title>Career Maker- Edit student</title>
<link href="style.css" rel="stylesheet" type="text/css" />
</head>

<body>
	<div class="wrapper">
    <?php include('includes/banner.php'); ?>
    <?php include('includes/navbar.php'); ?>
    
    <h1 align="center">Student Record Form</h1>
    <div class="form">
    <?php
    
		$studentId = $_GET['id'];
		$r = "SELECT * FROM student WHERE id='$studentId';";
		$ans = mysql_query($r);
		$row1= mysql_fetch_array($ans);
		
	?>
    	<form action="editstudent_action.php" method="post" enctype="multipart/form-data">
        	<label>Firstname: </label><input type="text" id="firstname" name="firstname" placeholder="Enter your firstname" value="<?php echo $row1['firstname']; ?>" required /><br /><br />
            <label>Lastname: </label><input type="text" id="lastname" name="lastname" placeholder="Enter your lastname" value="<?php echo $row1['lastname']; ?>" required /><br /><br />
            <label>Gender: </label><input type="radio" id="g1" name="gender" value="Male" <?php if($row1['gender']=='male') echo "checked"; ?> required>Male
            <input type="radio" class="gender" id="g2" name="gender" value="Female" <?php if($row1['gender']=='female') echo "checked"; ?> required>Female<br /><br />
            <label>Address: </label><input type="text" id="address" name="address" placeholder="Enter your address" value="<?php echo $row1['address']; ?>" required/><br /><br />
            <label>Contact no: </label><input type="number" id="contact" name="contact" placeholder="Enter your contact number" value="<?php echo $row1['contact']; ?>" required /><br /><br />
            <label>Parent's Name: </label><input type="text" id="pname" name="pname" placeholder="Enter your Parent's Name" value="<?php echo $row1['parentname']; ?>" required/><br /><br />
            <label>Parent's no: </label><input type="number" id="pcontact" name="pcontact" placeholder="Enter your Parent's contact number" value="<?php echo $row1['parentno']; ?>" required /><br /><br />
            <label>Email: </label><input type="email" id="email" name="email" placeholder="Enter your email" value="<?php echo $row1['email']; ?>" required /><br /><br />
             <label>Level: </label><select name="level" required >
             <option selected><?php echo $row1['level']; ?></option>
            	<option>SLC</option>
                <option>+2</option>
                <option>Bachleor</option>
                <option>Diploma</option>
                <option>Masters</option>
            </select><br /><br />
            
            <label>Destination: </label><select name="destination" required>
            	<?php
				$q = "SELECT * FROM `destination`;";
				$result = mysql_query($q);
				$num = mysql_num_rows($result);
				
				for($i=1;$i<=$num;$i++)
				{
					$row = mysql_fetch_array($result);
					$destinationId = $row['id'];
			?>
            <option value="<?php echo $destinationId; ?>"><?php echo $row['name']; ?></option>
             <?php
				}
			?>
            <?php
				$p = "SELECT * FROM `destination` WHERE id='$destinationId';";
				$res = mysql_query($p);
				$rw = mysql_fetch_array($res);
			?>
            <option selected><?php echo $rw['name']; ?></option>
            </select><br /><br />
            <label>Visa apply: </label><input type="radio" id="v1" name="visa" value="student" <?php  if($row1['visatype']=='student') echo "checked"; ?> required>student<br /><br />
            
            <input type="radio" id="v2" name="visa" value="dependent" <?php  if($row1['visatype']=='dependent') echo "checked"; ?> required>dependent
            <input type="radio" id="v3" name="visa" value="working" <?php  if($row1['visatype']=='working') echo "checked"; ?> required>working<br /><br />
            <label>Working Experience: </label><textarea name="exp" class="exp" name="exp" rows="3" cols="30" required><?php echo $row1['working_exp']; ?></textarea><br /><br />
      		<label>Approval: </label>  <input type="radio" id="a1" name="approval" value="yes" <?php if($row1['approval']=='yes') echo "checked"; ?> required>Yes
           <input type="radio" id="a2" name="approval" value="no"<?php if($row1['approval']=='no') echo "checked"; ?> required >No<br/><br/>
           <label>Documents:</label><br/> <input type="file" name="file1"/><br/>
           			  <input type="file" name="file2"/><br/>
                      <input type="file" name="file3"/><br/>
                      <input type="file" name="file4"/><br/>
                      <input type="file" name="file5"/><br/>
                      <input type="file" name="file6"/><br/><br/>
             <input type="hidden" name="hidden" id="hidden" value="<?php echo $studentId; ?>"/>
            <input type="submit" class="submit" name="submit" value="Save" />

      </form>
    </div>
    <?php include('includes/footer.php'); ?>
    </div>
    
</body>
</html>