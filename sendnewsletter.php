<?php
include_once('phplib/db_config.php');


if(isset($_GET['q']) && strlen($_GET['q'])>0)
{
	global $con;
	date_default_timezone_set('Asia/Kolkata');//get current date time 
	$sent_datetime=date('d-m-Y H:i');//get current date time
	$sql="INSERT INTO `balas_newsletter`(`request_by`, `datetime`) VALUES ('".mysqli_real_escape_string($con,$_GET['q'])."','".mysqli_real_escape_string($con,$sent_datetime)."')";
	if($con->query($sql) === true)
	{
		echo "Thanks For Your Subscription";
	}
}
else
{
	echo "Enter Your Email";
}
?>