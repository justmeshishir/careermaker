<?php
	session_start();
	include('config/db.php');
	
	$search = $_POST['search'];
	$q = "SELECT * FROM `student` WHERE `firstname` OR `contact` OR `lastname` OR `gender` OR `address` OR `email` OR `level` OR `parentname` OR `parentno` LIKE '%search%'";
	$res = mysql_query($q);
	$num = mysql_num_rows($res);
	if($num==0)
		echo "<h3>No results found..!!</h3>";
	for($i=0;$i<$num;$i++){
		$row = mysql_fetch_array($res);
	
?>
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
	}
?>