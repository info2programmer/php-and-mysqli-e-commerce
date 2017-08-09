<?php

include_once('db_config.php');

// This function For Check Authentication For Admin
function adminlogin($username,$password,$setcookie)
{
	global $con;

	///Sql Query
	$sql="SELECT * FROM `admin_login` WHERE `email`='".mysqli_real_escape_string($con,$username)."' AND `password`='".mysqli_real_escape_string($con,md5($password))."'";

	$result=$con->query($sql);
	if($result->num_rows==1)
	{
		session_start();
		$_SESSION['BalasAdmin']=$username;
		header('Location:dashboard.php?status=ok');

	}
	else
	{
		header('Location:adminlogin.php?auth');
	}
	
}



//This Function For Banner Upload
function UploadBanner($url,$image)
{
	global $con;

	//Upload File Here
	

	$sql="INSERT INTO `front_banner`(`url`, `image`) VALUES ('".mysqli_real_escape_string($con,$url)."','".mysqli_real_escape_string($con,$image)."')";
	if($con->query($sql)>0)
	{
		echo " <div class='alert alert-success'>
	                <button type='button' class='close' data-dismiss='alert'>&times;</button>
	                <strong>Sucess!</strong> Banner Upload Successfully.
	            </div>";
	}
	else
	{
		echo " <div class='alert alert-danger'>
	                    <button type='button' class='close' data-dismiss='alert'>&times;</button>
	                    <strong>Oh snap!</strong> Change a few things up and try submitting again.
	                </div>";
	}
}


//This Function Delete Banner 
function deleteBanner($id)
{
	global $con;

	//Sql
	$sql="DELETE FROM `front_banner` WHERE `banner_id`='".base64_decode($id)."' ";

	if($result=$con->query($sql) === TRUE)
	{
		echo " <div class='alert alert-success'>
	                <button type='button' class='close' data-dismiss='alert'>&times;</button>
	                <strong>Sucess!</strong> Banner Deleted Successfully.
	            </div>";
	}
	else
	{
		echo " <div class='alert alert-danger'>
	                    <button type='button' class='close' data-dismiss='alert'>&times;</button>
	                    <strong>Oh snap!</strong> Change a few things up and try submitting again.
	                </div>";
	}
}


//This Function  To Create Category
function createCategory($categoryName,$image)
{
	global $con;

	//SQL
	$sql="INSERT INTO catrgories (`category_name`,`category_image`) VALUES('".mysqli_real_escape_string($con,$categoryName)."','".mysqli_real_escape_string($con,$image)."')";
	if($con->query($sql)>0)
	{
		echo " <div class='alert alert-success'>
	                <button type='button' class='close' data-dismiss='alert'>&times;</button>
	                <strong>Sucess!</strong> Category Upload Successfully.
	            </div>";
	}
	else
	{
		echo " <div class='alert alert-danger'>
	                    <button type='button' class='close' data-dismiss='alert'>&times;</button>
	                    <strong>Oh snap!</strong> Change a few things up and try submitting again.
	                </div>";
	}

}


///This Function For delete banner 

function deleteCategories($id)
{
	global $con;

	//Sql
	$sql="DELETE FROM `catrgories` WHERE `category_id`='".base64_decode($id)."' ";

	if($result=$con->query($sql) === TRUE)
	{
		echo " <div class='alert alert-success'>
	                <button type='button' class='close' data-dismiss='alert'>&times;</button>
	                <strong>Sucess!</strong> Category Deleted Successfully.
	            </div>";
	}
	else
	{
		echo " <div class='alert alert-danger'>
	                    <button type='button' class='close' data-dismiss='alert'>&times;</button>
	                    <strong>Oh snap!</strong> Change a few things up and try submitting again.
	                </div>";
	}
}


//Function To Update Categories
function UpdateCategories($CategoryID,$CategoryName,$CategoryImage)
{
	global $con;

	if($CategoryImage!=null)
	{
		$sql="UPDATE `catrgories` SET `category_name`='".mysqli_real_escape_string($con,$CategoryName)."',`category_image`='".mysqli_real_escape_string($con,$CategoryImage)."' WHERE `category_id`='".mysqli_real_escape_string($con,$CategoryID)."' ";
	}
	else
	{
		$sql="UPDATE `catrgories` SET `category_name`='".mysqli_real_escape_string($con,$CategoryName)."' WHERE `category_id`='".mysqli_real_escape_string($con,$CategoryID)."' ";
	}

	if($result=$con->query($sql) === TRUE)
	{
		echo " <div class='alert alert-success'>
	                <button type='button' class='close' data-dismiss='alert'>&times;</button>
	                <strong>Sucess!</strong> Category Updated Successfully.
	            </div>";
	}
	else
	{
		echo " <div class='alert alert-danger'>
	                    <button type='button' class='close' data-dismiss='alert'>&times;</button>
	                    <strong>Oh snap!</strong> Change a few things up and try submitting again.
	                </div>";
	}
}


///this function to create product 
function createProduct($productName,$description,$image,$price,$sell,$special,$sku)
{
	global $con;

	//SQL
	$sql="INSERT INTO `balas_product`(`product_name`, `description`, `image`, `price`, `selling`, `special`,`SKU`) VALUES ('".mysqli_real_escape_string($con,$productName)."','".mysqli_real_escape_string($con,$description)."','".mysqli_real_escape_string($con,$image)."','".mysqli_real_escape_string($con,$price)."','".mysqli_real_escape_string($con,$sell)."','".mysqli_real_escape_string($con,$special)."','".mysqli_real_escape_string($con,$sku)."')";

	if($result=$con->query($sql) === TRUE)
	{
		echo " <div class='alert alert-success'>
	                <button type='button' class='close' data-dismiss='alert'>&times;</button>
	                <strong>Sucess!</strong> Product Added Successfully.
	            </div>";
	}
	else
	{
		echo " <div class='alert alert-danger'>
	                    <button type='button' class='close' data-dismiss='alert'>&times;</button>
	                    <strong>Oh snap!</strong> Change a few things up and try submitting again.
	                </div>";
	}

	return mysqli_insert_id($con);

}

///Function Delete Project
function DeleteProject($ProjectID)
{
	global $con;
	$sql="DELETE FROM `balas_product` WHERE `product_id`='".mysqli_real_escape_string($con,$ProjectID)."' ";
	$sql1="DELETE FROM `product_category` WHERE `product_id`='".mysqli_real_escape_string($con,$ProjectID)."' ";
	$sql2="DELETE FROM `product_collection` WHERE `product_id`='".mysqli_real_escape_string($con,$ProjectID)."' ";

	if($con->query($sql) === TRUE && $con->query($sql1) && $con->query($sql2))
	{
		echo " <div class='alert alert-success'>
	                <button type='button' class='close' data-dismiss='alert'>&times;</button>
	                <strong>Sucess!</strong> Product Deleted.
	            </div>";
	}
	else
	{
		echo " <div class='alert alert-danger'>
	                    <button type='button' class='close' data-dismiss='alert'>&times;</button>
	                    <strong>Oh snap!</strong> Change a few things up and try submitting again.
	                </div>";
	}

} 


//Function For Edit Details
function EditProductDetails($productName,$description,$image,$price,$sell,$special,$productId,$sku)
{
	global $con;
	if($image==null)
	{
		$sql="UPDATE `balas_product` SET `product_name`='".mysqli_real_escape_string($con,$productName)."',`description`='".mysqli_real_escape_string($con,$description)."',`image`='".mysqli_real_escape_string($con,$image)."',`price`='".mysqli_real_escape_string($con,$price)."',`selling`='".mysqli_real_escape_string($con,$sell)."',`special`='".mysqli_real_escape_string($con,$special)."',`SKU`='".mysqli_real_escape_string($con,$sku)."' WHERE `product_id`='".mysqli_real_escape_string($con,$productId)."' ";

	}
	else
	{
		$sql="UPDATE `balas_product` SET `product_name`='".mysqli_real_escape_string($con,$productName)."',`description`='".mysqli_real_escape_string($con,$description)."',`price`='".mysqli_real_escape_string($con,$price)."',`selling`='".mysqli_real_escape_string($con,$sell)."',`special`='".mysqli_real_escape_string($con,$special)."',`SKU`='".mysqli_real_escape_string($con,$sku)."' WHERE `product_id`='".mysqli_real_escape_string($con,$productId)."' ";
	}


	if($result=$con->query($sql) === TRUE)
	{
		echo " <div class='alert alert-success'>
	                <button type='button' class='close' data-dismiss='alert'>&times;</button>
	                <strong>Sucess!</strong> Product Update Successfully.
	            </div>";
	}
	else
	{
		echo " <div class='alert alert-danger'>
	                    <button type='button' class='close' data-dismiss='alert'>&times;</button>
	                    <strong>Oh snap!</strong> Change a few things up and try submitting again.
	                </div>";
	}


}


///this function delete categories by product id
function DeleteCategoriesByProductID($id)
{
	global $con;
	$sql="DELETE FROM `product_category` WHERE `product_id`='".$id."'";

	$con->query($sql) or die('Opps Categories Not Deteted');
}


///Function Create New COD location
function CreateCODlocation($pin,$location)
{
	global $con;

	$sql="INSERT INTO `cod_location`(`pin`,`location`) VALUES('".mysqli_real_escape_string($con,$pin)."','".mysqli_real_escape_string($con,$location)."')";

	if($con->query($sql) === TRUE)
	{
		echo " <div class='alert alert-success'>
	                <button type='button' class='close' data-dismiss='alert'>&times;</button>
	                <strong>Sucess!</strong> Location Createed Successfully.
	            </div>";
	}
	else
	{
		echo " <div class='alert alert-danger'>
	                    <button type='button' class='close' data-dismiss='alert'>&times;</button>
	                    <strong>Oh snap!</strong> Change a few things up and try submitting again.
	                </div>";
	}
}


//this dection to delete location
function deleteCodLocation($id)
{
	global $con;

	$sql="DELETE FROM `cod_location` WHERE `location_id`='".mysqli_real_escape_string($con,$id)."' ";
	if($con->query($sql) === TRUE)
	{
		echo " <div class='alert alert-success'>
	                <button type='button' class='close' data-dismiss='alert'>&times;</button>
	                <strong>Sucess!</strong> Location Deleted Successfully.
	            </div>";
	}
	else
	{
		echo " <div class='alert alert-danger'>
	                    <button type='button' class='close' data-dismiss='alert'>&times;</button>
	                    <strong>Oh snap!</strong> Change a few things up and try submitting again.
	                </div>";
	}
}


//this function create new account
function createnewaccount($username,$password)
{
	global $con;

	$sql="INSERT INTO `admin_login`(`email`,`password`) VALUES('".mysqli_real_escape_string($con,$username)."','".mysqli_real_escape_string($con,md5($password))."')";

	if($con->query($sql) === TRUE)
	{
		echo " <div class='alert alert-success'>
	                <button type='button' class='close' data-dismiss='alert'>&times;</button>
	                <strong>Sucess!</strong> Account Created.
	            </div>";
	}
	else
	{
		echo " <div class='alert alert-danger'>
	                    <button type='button' class='close' data-dismiss='alert'>&times;</button>
	                    <strong>Oh snap!</strong> Change a few things up and try submitting again.
	                </div>";
	}
}

// This Section To Delete Account
function deleteAccount($id)
{
	global $con;

	$sql="DELETE FROM `admin_login` WHERE `admin_id`='".base64_decode($id)."' ";


	if($con->query($sql) === TRUE)
	{
		echo " <div class='alert alert-success'>
	                <button type='button' class='close' data-dismiss='alert'>&times;</button>
	                <strong>Sucess!</strong> Account Deleted.
	            </div>";
	}
	else
	{
		echo " <div class='alert alert-danger'>
	                    <button type='button' class='close' data-dismiss='alert'>&times;</button>
	                    <strong>Oh snap!</strong> Change a few things up and try submitting again.
	                </div>";
	}
}

// Thsi Section To Create New Collection 

function createcollection($collectionname,$collectionbanner,$collectionthumble,$details)
{
	global $con;

	$sql="INSERT INTO `collection`(`collection_name`,`collection_banner`,`collection_thumble`,`collection_details`) VALUES('".mysqli_real_escape_string($con,$collectionname)."','".mysqli_real_escape_string($con,$collectionbanner)."','".mysqli_real_escape_string($con,$collectionthumble)."','".mysqli_real_escape_string($con,$details)."')";
	if($con->query($sql)===true)
	{
		echo " <div class='alert alert-success'>
	                <button type='button' class='close' data-dismiss='alert'>&times;</button>
	                <strong>Sucess!</strong> Collection  Created.
	            </div>";
	}
	else
	{
		echo " <div class='alert alert-danger'>
	                    <button type='button' class='close' data-dismiss='alert'>&times;</button>
	                    <strong>Oh snap!</strong> Change a few things up and try submitting again.
	                </div>";
	}
}

///this function delete collection
function deletecollection($id)
{
	global $con;

	$sql="DELETE FROM `collection` WHERE `collection_id`='".base64_decode($id)."' ";


	if($con->query($sql) === TRUE)
	{
		echo " <div class='alert alert-success'>
	                <button type='button' class='close' data-dismiss='alert'>&times;</button>
	                <strong>Sucess!</strong> Collection Deleted.
	            </div>";
	}
	else
	{
		echo " <div class='alert alert-danger'>
	                    <button type='button' class='close' data-dismiss='alert'>&times;</button>
	                    <strong>Oh snap!</strong> Change a few things up and try submitting again.
	                </div>";
	}	
}


///this function delete collection by product id
function DeleteCollectionByProductID($id)
{
	global $con;
	$sql="DELETE FROM `product_collection` WHERE `product_id`='".$id."'";

	$con->query($sql) or die('Opps Collections Not Deteted');
}


//this function update order status
function changeorderstatusbydid($order_id,$status,$cart_id,$redir)
{
	global $con;
	//echo "<script>alert('".$order_id."');</script>";
	//echo "<script>alert('".$status."');</script>";
	//echo "<script>alert('".$cart_id."');</script>";
	//echo "<script>alert('".$redir."');</script>";
	$sql="UPDATE `balas_order` SET `current_status`='".mysqli_real_escape_string($con,$status)."' WHERE `order_id`='".mysqli_real_escape_string($con,$order_id)."' ";
	if($con->query($sql))
	{
		echo "<script>alert('Status Changed');</script>";
		echo "<script>window.open('singleorder.php?orderid=".base64_encode($order_id)."&cart_id=".$cart_id."&redirct=".$redir."','_self');</script>";
	}

}

?>