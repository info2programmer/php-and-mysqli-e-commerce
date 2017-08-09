<?php
include_once('phplib/db_config.php');
if(isset($_GET['q']))
{
	$Data=$_GET['q'];

	global $con;

	$sql="SELECT * FROM `admin_login` WHERE `email`='".mysqli_real_escape_string($con,$Data)."' ";
	$result = $con->query($sql);	
	if ($result->num_rows > 0) {
		echo "<font color='red'><i class='glyphicon glyphicon-remove'></i> <em>email already exist</em></font>";
	}
	else
	{
		echo "<font color='green'><i class='glyphicon glyphicon-ok'></i><em>Available</em></font>";
	}
}

?>