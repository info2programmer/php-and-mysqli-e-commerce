<?php
include_once('phplib/db_config.php');
if(isset($_GET['q']))
{
	global $con;
	$cod=$_GET['q'];
	$sql="SELECT * FROM `cod_location` WHERE `pin`='".mysqli_real_escape_string($con,$cod)."' ";
	$result=$con->query($sql);
	if ($result->num_rows > 0) {
		echo "Y";
	}
	else
	{
		echo "N";
	}
}
?>