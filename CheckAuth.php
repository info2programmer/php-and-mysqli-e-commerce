<?php
session_start();
if((isset($_GET['id']) && strlen($_GET['id'])>0) && ((isset($_GET['name']) && strlen($_GET['name'])>0)))
{
	if(isset($_SESSION['UserEmail']) && isset($_SESSION['UserFullName']))
	{
		echo "<script>window.open('singleproduct.php?id=".$_GET['id']."&name=".$_GET['name']."','_self');</script>";
	}
	else
	{
		$redirurl="singleproduct.php?id=".$_GET['id']."&name=".$_GET['name'];
		echo "<script>window.open('login.php?redirurl=".$redirurl."&name=VXNlciBMb2dpbg==','_self');</script>";
	}
}
?>