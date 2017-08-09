<?php
include_once('db_config.php');


//This Function For Manage All Banners
function  manageAllBanner()
{
	global $con;
	$sql="SELECT * FROM `front_banner` ";
	$result = $con->query($sql);

	if ($result->num_rows > 0) {
		 while($row = $result->fetch_assoc()) {
		echo " <tr>
        <td><img src='Upload/Banner/".$row['image']."' height='100px' width='100px'></td>
        <td class='center'>".$row['url']."</td>
        <td class='center'>
            <a class='btn btn-danger' href='banner.php?bannerID=".base64_encode($row['banner_id'])."&banner=".$row['image']."'  class='saikat'>
                <i class='glyphicon glyphicon-trash icon-white'></i>
                Delete
            </a>
        </td>
    </tr>
		";
	}
	}
	else
	{
		echo "<h3 align='center'>No Record Found</h3>";
	}
}


// function manage categories
function manageCategories()
{
	global $con;
	$sql="SELECT * FROM `catrgories` ";
	$result = $con->query($sql);

	if ($result->num_rows > 0) {
		 while($row = $result->fetch_assoc()) {
		echo " <tr>
        <td><img src='Upload/Categories/".$row['category_image']."' height='100px' width='100px'></td>
        <td class='center'>".$row['category_name']."</td>
        <td class='center'>
            <a class='btn btn-danger' href='categories.php?bannerID=".base64_encode($row['category_id'])."&banner=".$row['category_image']."' >
                <i class='glyphicon glyphicon-trash icon-white'></i>
                Delete
            </a>

            <a class='btn btn-info' href='categories.php?EditID=".base64_encode($row['category_id'])."&Name=".base64_encode($row['category_name'])."&banner=".base64_encode($row['category_image'])."' >
                <i class='glyphicon glyphicon-edit icon-white'></i>
                Edit
            </a>
        </td>
    </tr>
		";
	}
	}
	else
	{
		echo "<h3 align='center'>No Record Found</h3>";
	}
}


///function for return  category
function ViewCategoryDDl()
{
	global $con;

	//Sql
	$sql="SELECT `category_id`,`category_name` FROM `catrgories`";
	$result = $con->query($sql);

	if ($result->num_rows > 0) {
		 while($row = $result->fetch_assoc()) {
		echo "
		<option value='".$row['category_id']."'>".$row['category_name']."</option>
		";
	}
}

}


//Function Manage All Products

function manageAllProduct()
{
	global $con;
	$sql="SELECT `product_id`, `product_name`, `image`, `price`, `selling`, `special`,`SKU` FROM `balas_product` ";
	$result = $con->query($sql);

	if ($result->num_rows > 0) {
		 while($row = $result->fetch_assoc()) {

		 	if($row['special']==1)
		 	{
		 		echo " <tr>
        <td><img src='Upload/Products/".$row['image']."' height='100px' width='100px'></td>
        <td class='center'>".$row['product_name']."</td>
        <td class='center'>".$row['price']."</td>
        <td class='center'>".$row['selling']."</td>
        <td class='center'>YES</td>
        <td class='center'>".$row['SKU']."</td>
        <td class='center'>
            <a class='btn btn-danger' href='product.php?ProjectID=".base64_encode($row['product_id'])."&BannerImage=".base64_encode($row['image'])."'  class='saikat'>
                <i class='glyphicon glyphicon-trash icon-white'></i>
                Delete
            </a>

            <a class='btn btn-info' href='product.php?EditID=".base64_encode($row['product_id'])."&BannerImage=".base64_encode($row['image'])."' >
                <i class='glyphicon glyphicon-edit icon-white'></i>
                Edit
            </a>

            <a class='btn btn-success' href='productimage.php?ProductID=".base64_encode($row['product_id'])."&BannerImage=".base64_encode($row['image'])."' >
                <i class='glyphicon glyphicon-edit icon-white'></i>
                Edit Images
            </a>
        </td>
    </tr>
		";
		 	}
		 	else
		 	{
		 		echo " <tr>
        <td><img src='Upload/Products/".$row['image']."' height='100px' width='100px'></td>
        <td class='center'>".$row['product_name']."</td>
        <td class='center'>".$row['price']."</td>
        <td class='center'>".$row['selling']."</td>
        <td class='center'>NO</td>
        <td class='center'>".$row['SKU']."</td>
        <td class='center'>
            <a class='btn btn-danger' href='product.php?ProjectID=".base64_encode($row['product_id'])."&BannerImage=".base64_encode($row['image'])."'  class='saikat'>
                <i class='glyphicon glyphicon-trash icon-white'></i>
                Delete
            </a>

            <a class='btn btn-info' href='product.php?EditID=".base64_encode($row['product_id'])."&BannerImage=".base64_encode($row['image'])."' >
                <i class='glyphicon glyphicon-edit icon-white'></i>
                Edit
            </a>
        </td>
    </tr>
		";
		 	}
		
	}
	}
	else
	{
		echo "<h3 align='center'>No Record Found</h3>";
	}
}

//This Function For View Category By Project ID

function viewcategoriesbyproductid($id)
{
	global $con;

	//Sql
	$sql="SELECT * FROM `product_category` WHERE `product_id`='".mysqli_real_escape_string($con,$id)."'";
	$result = $con->query($sql);

	if ($result->num_rows > 0) {
		 while($row = $result->fetch_assoc()) {
		$sql1="SELECT * FROM `catrgories` WHERE `category_id`='".mysqli_real_escape_string($con,$row['category_id'])."'";
		$result1 = $con->query($sql1);
		while($row1 = $result1->fetch_assoc()) {
			echo "
			<option value='".$row['category_id']."' selected>".$row1['category_name']."</option>
		";
		}
	}
}
ViewCategoryDDl();
}

//This Function For View Product Deails By ProductID

function ViewProductByID($id)
{
	global $con;

	//sql
	$sql="SELECT * FROM `balas_product` WHERE `product_id`='".mysqli_real_escape_string($con,$id)."' ";
	$result = $con->query($sql);
	$row = $result->fetch_assoc();
	return $row;
}


//This Function To View COD List
function ViewCODlist()
{
	global $con;
	$sql="SELECT * FROM `cod_location` ";
	$result = $con->query($sql);

	if ($result->num_rows > 0) {
		 while($row = $result->fetch_assoc()) {
		echo " <tr>
        <td class='center'>".$row['pin']."</td>
        <td class='center'>".$row['location']."</td>
        <td class='center'>
            <a class='btn btn-danger' href='cod.php?LocationID=".base64_encode($row['location_id'])."'  class='saikat'>
                <i class='glyphicon glyphicon-trash icon-white'></i>
                Delete
            </a>
        </td>
    </tr>
		";
	}
	}
	else
	{
		echo "<h3 align='center'>No Record Found</h3>";
	}
}


//This Function To View COD List
function ViewAccountHistory()
{
	//echo "<script>alert('".."');</script>";
	global $con;
	$sql="SELECT * FROM `admin_login` ";
	$result = $con->query($sql);

	if ($result->num_rows > 0) {
		 while($row = $result->fetch_assoc()) {
		 	if($_SESSION['BalasAdmin'] == $row['email'])
		 	{
			echo " <tr>
		        <td class='center'>".$row['email']."</td>
		        <td class='center'>
		            <a class='btn btn-danger' href='javascript:void(0);'>
		                <i class='glyphicon glyphicon-trash icon-white' ></i>
		                Delete
		            </a>
		        </td>
		    </tr>
				";
		 	}
		 	else
		 	{
		 		echo " <tr>
		        <td class='center'>".$row['email']."</td>
		        <td class='center'>
		            <a class='btn btn-danger' href='account.php?admin_id=".base64_encode($row['admin_id'])."'  class='saikat'>
		                <i class='glyphicon glyphicon-trash icon-white'></i>
		                Delete
		            </a>
		        </td>
		    </tr>
				";
		 	}
		
	}
	}
	else
	{
		echo "<h3 align='center'>No Record Found</h3>";
	}
}


//This Function to show all collection 
function manageallcollection()
{
	global $con;
	$sql="SELECT * FROM collection";
	$result = $con->query($sql);
	if ($result->num_rows > 0) {
		 while($row = $result->fetch_assoc()) {
		 	echo " <tr>
		        <td class='center'>".$row['collection_name']."</td>
		        <td class='center'><img src='Upload/Collection/Thamble/".$row['collection_thumble']."' height='100px' width='100px'></td>
		        <td class='center'><img src='Upload/Collection/Banner/".$row['collection_banner']."' height='100px' width='100px'></td>
		        <td class='center'>
		             <a class='btn btn-danger' href='collection.php?delete_id=".base64_encode($row['collection_id'])."&bannerid=".base64_encode($row['collection_banner'])."&thamble=".base64_encode($row['collection_thumble'])."'  class='saikat'>
		                <i class='glyphicon glyphicon-trash icon-white'></i>
		                Delete
		            </a>
		        </td>
		    </tr>
				";
		 }

	}

}



///function for return  Collection
function ViewCollectionDDl()
{
	global $con;

	//Sql
	$sql="SELECT `collection_id`,`collection_name` FROM `collection`";
	$result = $con->query($sql);

	if ($result->num_rows > 0) {
		 while($row = $result->fetch_assoc()) {
		echo "
		<option value='".$row['collection_id']."'>".$row['collection_name']."</option>
		";
	}
}

}


//This Function For View Category By Product ID

function ViewCollectionbyproductid($id)
{
	global $con;

	//Sql
	$sql="SELECT * FROM `product_collection` WHERE `product_id`='".mysqli_real_escape_string($con,$id)."'";
	$result = $con->query($sql);

	if ($result->num_rows > 0) {
		 while($row = $result->fetch_assoc()) {
		$sql1="SELECT * FROM `collection` WHERE `collection_id`='".mysqli_real_escape_string($con,$row['collection_id'])."'";
		$result1 = $con->query($sql1);
		while($row1 = $result1->fetch_assoc()) {
			echo "
			<option value='".$row['collection_id']."' selected>".$row1['collection_name']."</option>
		";
		}
	}
}
ViewCollectionDDl();
}


//this function view all pending order 
function viewpendingorder()
{
	global $con;

	//sql
	$sql="SELECT `order_id`,`cart_id`,`order_by`,`totalamount`,`deliverycharge`,`mode`,`date`,`time` FROM `balas_order` WHERE `payment`='1' AND `current_status`='Pending' ORDER BY `order_id` DESC ";
	$result = $con->query($sql);

	if ($result->num_rows > 0) {
		while($row = $result->fetch_assoc()) {
			$total=$row['totalamount']+$row['deliverycharge'];
			echo "<tr>
			<td><a href='singleorder.php?orderid=".base64_encode($row['order_id'])."&cart_id=".base64_encode($row['cart_id'])."redirct=pending' >#ORDERBALS".$row['order_id']."</a></td>
			<td>".$row['order_by']."</td>
			<td>".$row['date']."</td>
			<td>".$row['time']."</td>
			<td>".$row['mode']."</td>
			<td>".$total.".00/-</td>
			</tr>";
		}
	}
	else
	{
		echo "<h3 align='center'>Zero Record Found</h3>";
	}
}

// this function view cart details for each order
function viewproductitembycart($cart_id)
{
	global $con;
	$sql="SELECT * FROM `balas_cart` WHERE `User_ID`='".mysqli_real_escape_string($con,$cart_id)."' ";
	$result = $con->query($sql);
	if ($result->num_rows > 0) {
		while($row = $result->fetch_assoc()) {
			$sql1="SELECT product_id,product_name,image,selling,SKU FROM `balas_product` WHERE `product_id`='".mysqli_real_escape_string($con,$row['product_id'])."'";
			$result1= $con->query($sql1);
			while($row1 = $result1->fetch_assoc())
			{
				echo "<tr>
					<td>".$row1['product_name']."</td>
					<td>".$row1['SKU']."</td>
					<td><img src='Upload/Products/".$row1['image']."' height='75px' width='75px'></td>
					<td>".$row1['selling'].".00/-</td>
					<td>".$row['qty']."</td>
				</td>
				";
			}
		}
	}
	
}


//this function view orderdetails by id
function vieworderdetailsbyorderid($order_id)
{
	global $con;
	$sql="SELECT * FROM `balas_order` WHERE `order_id`='".mysqli_real_escape_string($con,$order_id)."' ";
	$result=$con->query($sql);
	if($result->num_rows>0)
	{
		while($row = $result->fetch_assoc()) {
			$TOTAL=$row['totalamount']+$row['deliverycharge'];
			echo "<tr>
				<td>".$row['order_by']."</td>
				<td>".$row['email']."</td>
				<td>".$row['phone']."</td>
				<td>".$row['address']."</td>
				<td>".$row['landmark']."</td>
				<td>".$row['pin']."</td>
				<td>".$row['state']."</td>
				<td>".$row['totalamount'].".00/-</td>
				<td>".$row['deliverycharge'].".00/-</td>
				<td>".$TOTAL.".00/-</td>
				<td>".$row['mode']."</td>
				<td>".$row['current_status']."</td>
			</tr>";
		}
	}

}

//this function view all order
function viewallorder()
{
	global $con;
	$sql="SELECT `order_id`,`cart_id`,`order_by`,`totalamount`,`deliverycharge`,`mode`,`date`,`time` FROM `balas_order` WHERE `payment`='1' ORDER BY `order_id` DESC ";
	$result = $con->query($sql);

	if ($result->num_rows > 0) {
		while($row = $result->fetch_assoc()) {
			$total=$row['totalamount']+$row['deliverycharge'];
			echo "<tr>
			<td><a href='singleorder.php?orderid=".base64_encode($row['order_id'])."&cart_id=".base64_encode($row['cart_id'])."&redirct=order' >#ORDERBALS".$row['order_id']."</a></td>
			<td>".$row['order_by']."</td>
			<td>".$row['date']."</td>
			<td>".$row['time']."</td>
			<td>".$row['mode']."</td>
			<td>".$total.".00/-</td>
			</tr>";
		}
	}
	else
	{
		echo "<h3 align='center'>Zero Record Found</h3>";
	}
}

//this function to view all review
function viewpendingreview()
{
	global $con;
	$sql="SELECT * FROM `product_review` WHERE `publish`=0 ORDER BY `review_id` DESC";

	$result = $con->query($sql);

	if ($result->num_rows > 0) {
		while($row=$result->fetch_assoc())
		{
			$sql1="SELECT `product_name`,`image` FROM `balas_product` WHERE `product_id`='".$row['product_id']."' ";
			$result1=$con->query($sql1);

			while($row1=$result1->fetch_assoc())
			{
				echo "<tr>
				<td>".$row['review_by(name)']."</td>
                <td>".$row['title']."</td>
                <td>".$row['details']."</td>
                <td>".$row['rate']."</td>
                <td><img src='Upload/Products/".$row1['image']."' height='75px' width='75px'></td>
                <td>".$row1['product_name']."</td>
                <td>
                <a href='review.php?changeId=".$row['review_id']."' class='btn btn-info'>Aprove</a>
                <a href='review.php?deleteId=".$row['review_id']."' class='btn btn-danger'>Delete</a>
                </td>
				</tr>";
			}
		}
	}
}

?>