<?php
	
session_start();
if(!isset($_SESSION['login'])&&$_SESSION['login']!='yes'){
header("Location: index.php");
exit;
}
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Career Maker- Staff</title>
<link href="style.css" rel="stylesheet" type="text/css" />
</head>

<body>
	<div class="wrapper">
		<?php include('includes/banner.php'); ?>
        <?php include('includes/navbar.php'); ?>
        <div class="option">
        	<ul>
            	<a href="addstaff.php"><li>Add new staff</li></a>
                <a href="viewstaff.php"><li>View all records</li></a>
            </ul>
        </div>
        <?php include('includes/footer.php'); ?>
        </div>
        
</body>
</html>