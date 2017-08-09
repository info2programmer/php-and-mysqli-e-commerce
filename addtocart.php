<?php
session_start();
include_once('phplib/db_config.php');
global $con;
$Product_ID=$_GET['productid'];
$Amount=$_GET['price'];


//Genarate Randome Number
if(!isset($_SESSION['uniqueSessionID']))
{
	$rand=uniqid(rand(),true);
	$_SESSION['uniqueSessionID']=$rand;
}
else
{
	$rand=$_SESSION['uniqueSessionID'];
}

$sql="SELECT * FROM `balas_cart` WHERE `User_ID`='".mysqli_real_escape_string($con,$rand)."' AND `product_id`='".mysqli_real_escape_string($con,$Product_ID)."'";

$result = $con->query($sql);

if ($result->num_rows > 0) {
	echo "<div class='alert alert-success alert-danger'><a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><strong>Error!</strong> Product Already In Cart.</div>";
}
else{
$sqlcommand="INSERT INTO `balas_cart`(`User_ID`, `product_id`, `product_price`, `qty`) VALUES ('".mysqli_real_escape_string($con,$rand)."','".mysqli_real_escape_string($con,$Product_ID)."','".mysqli_real_escape_string($con,$Amount)."','".mysqli_real_escape_string($con,"1")."')";
if($con->query($sqlcommand))
{
	echo "<div class='alert alert-success'><a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><strong>Success!</strong> Product Added In Cart.</div>";
}
}

//echo $Product_ID."<br/>".$Amount;
//echo "<div class='alert alert-success alert-dismissable'><a href='#'' class='close' data-dismiss='alert' aria-label='close'>&times;</a><strong>Success!</strong> Product Added To Cart.</div>";
?>