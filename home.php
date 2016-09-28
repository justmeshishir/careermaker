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
<title>Career Maker- Home</title>
<link href="style.css" rel="stylesheet" type="text/css" />
</head>

<body>
	<div class="wrapper">
		<?php include('includes/banner.php'); ?>
        <?php include('includes/navbar.php'); ?>
        <div class="option">
        	<ul>
            	<a href="addstudent.php"><li>Add new student</li></a>
                <a href="viewstudent.php"><li>View all records</li></a>
            </ul>
        </div>
        <?php include('includes/footer.php'); ?>
	</div>

</body>
</html>