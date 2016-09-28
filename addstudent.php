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
<title>Career Maker- Add new student</title>
<link href="style.css" rel="stylesheet" type="text/css" />
</head>

<body>
	<div class="wrapper">
    <?php include('includes/banner.php'); ?>
    <?php include('includes/navbar.php'); ?>
    <?php
		if(isset($_GET['success']) && $_GET['success']==1)
		{
	?>
    <div style="color:hsla(248,100%,50%,1.00); padding:5px; width:60%; margin:0 auto; background-color:hsla(120,80%,69%,1.00); font-size:24px; text-align:center; height:30px; border-radius:10px;">Student added successfully.</div>
    <?php
		}
	?>
    <h1 align="center">Student Record Form</h1>
    <div class="form">
    	<form action="addstudent_action.php" method="post" enctype="multipart/form-data">
        	<label>Firstname: </label><input type="text" id="firstname" name="firstname" placeholder="Enter your firstname" required /><br /><br />
            <label>Lastname: </label><input type="text" id="lastname" name="lastname" placeholder="Enter your lastname" required /><br /><br />
            <label>Gender: </label><input type="radio" id="g1" name="gender" value="Male" required>Male
            <input type="radio" class="gender" id="g2" name="gender" value="Female" required>Female<br /><br />
            <label>Address: </label><input type="text" id="address" name="address" placeholder="Enter your address" required/><br /><br />
            <label>Contact no: </label><input type="number" id="contact" name="contact" placeholder="Enter your contact number" required /><br /><br />
            <label>Parent's Name: </label><input type="text" id="pname" name="pname" placeholder="Enter your Parent's Name" required/><br /><br />
            <label>Parent's no: </label><input type="number" id="pcontact" name="pcontact" placeholder="Enter your Parent's contact number" required /><br /><br />
            <label>Email: </label><input type="email" id="email" name="email" placeholder="Enter your email" required /><br /><br />
             <label>Level: </label><select name="level" required>
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
            </select><br /><br />
            <label>Visa apply: </label><input type="radio" id="v1" name="visa" value="student" required>student<br /><br />
            
            <input type="radio" id="v2" name="visa" value="dependent" required>dependent
            <input type="radio" id="v3" name="visa" value="working" required>working<br /><br />
            <label>Working Experience: </label><textarea name="exp" class="exp" name="exp" rows="3" cols="30" required></textarea><br /><br />
            <label>Upload PPsize photo(600 X 600px only): </label><input type="file" id="image" name="image" required /><br /><br />
            <input type="submit" class="submit" name="submit" value="Save" />
        </form>
    </div>
    <?php include('includes/footer.php'); ?>
    </div>
    
</body>
</html>