<?php
include_once('db_config.php');


//this function genaret banners
function homeslider()
{
	global $con;

	$sql="SELECT url,image FROM `front_banner`";
	$result = $con->query($sql);

	if ($result->num_rows > 0) {
		while($row = $result->fetch_assoc()) {
			echo "
			<li>
			<a href='".$row['url']."'><div class='w3l_banner_nav_right_banner' 
			style='
			background:url(admin/Upload/Banner/".$row['image'].") no-repeat 0px 0px;
			background-size:cover;
            -webkit-background-size:cover;
            -moz-background-size:cover;
            -o-background-size:cover;
            -ms-background-size:cover;
			'>
			</div></a>
			</li>
			";
		}
	}
	else
	{
		echo "no banner found";
	}

}

//this function show collection
function viewcollection()
{
	global $con;

	$sql="SELECT * FROM `collection`";
	$result = $con->query($sql);

	if ($result->num_rows > 0) {
		while($row = $result->fetch_assoc()) {
			echo "
			<div class='col-md-4 w3l_banner_nav_right_banner3_btml' style='padding:5px;'>
				<div class='view view-tenth'>
					<img src='admin/Upload/Collection/Thamble/".$row['collection_thumble']."' class='img-responsive' />
					<div class='mask'>
						<h4><a href='collection.php?type=".base64_encode($row['collection_id'])."&name=".base64_encode($row['collection_name'])."'>".$row['collection_name']."</a></h4>
						<p>".$row['collection_details']."</p>
					</div>
				</div>
			</div>
			";
		}
	}
	else
	{
		echo "<p align='center'>Coming Soon</p>";
	}
}



//this function show categories
function viewcategories()
{
	global $con;
	$sql="SELECT category_name,category_id FROM `catrgories`";
	$result = $con->query($sql);

	if ($result->num_rows > 0) {
		while($row = $result->fetch_assoc()) {
			echo "<li><a href='products.php?type=".base64_encode($row['category_id'])."&name=".base64_encode($row['category_name'])."'>".$row['category_name']."</a></li>";
		}
	}
	else
	{
		echo "no banner found";
	}
}


//this function show categories
function viewhomeproduct()
{
	global $con;
	$sql="SELECT * FROM `balas_product` ORDER BY RAND() DESC LIMIT 20";
	$result = $con->query($sql);

	if ($result->num_rows > 0) {
		while($row = $result->fetch_assoc()) {
			if($row['special']==1)
			{
				echo "	
				<div class='col-md-3 top_brand_left'>
					<div class='hover14 column'>
						<div class='agile_top_brand_left_grid'>
							<div class='agile_top_brand_left_grid_pos'>
								<img src='images/offer.png' alt=''  class='img-responsive' />
							</div>
							<div class='agile_top_brand_left_grid1'>
								<figure>
									<div class='snipcart-item block'>
										<div class='snipcart-thumb'>
											<a href='singleproduct.php?id=".base64_encode($row['product_id'])."&name=".base64_encode($row['product_name'])."'><img src='admin/Upload/Products/".$row['image']."' style='height:195.5px;width:124.75;' alt=''  class='img-responsive' /></a>
											<p>".$row['product_name']."</p>
											<h4>Rs. ".$row['selling']."/- <span>Rs. ".$row['price']."/-</span></h4>
											<strong>Product Code :</strong>".$row['SKU']."
										</div>
										<div class='snipcart-details top_brand_home_details'>
											<a href='singleproduct.php?id=".base64_encode($row['product_id'])."&name=".base64_encode($row['product_name'])."' class='snipcart-details'>Add To Cart</a>
										</div>
									</div>
								</figure>
							</div>
						</div>
					</div>
				</div>

			";
			}
			else
			{
				echo "	
				<div class='col-md-3 top_brand_left'>
					<div class='hover14 column'>
						<div class='agile_top_brand_left_grid'>
							<div class='tag'><img src='images/tag.png' alt=''  class='img-responsive' /></div>
							<div class='agile_top_brand_left_grid1'>
								<figure>
									<div class='snipcart-item block' >
										<div class='snipcart-thumb'>
											<a href='singleproduct.php?id=".base64_encode($row['product_id'])."&name=".base64_encode($row['product_name'])."'><img src='admin/Upload/Products/".$row['image']."' style='height:195.5px;width:124.75;' alt=''  class='img-responsive' /></a>
											<p>".$row['product_name']."</p>
											<h4>Rs. ".$row['selling']."/- <span>Rs. ".$row['price']."/-</span></h4>
											<strong>Product Code :</strong>".$row['SKU']."
										</div>
										<div class='snipcart-details top_brand_home_details'>
											<a href='singleproduct.php?id=".base64_encode($row['product_id'])."&name=".base64_encode($row['product_name'])."' class='snipcart-details'>Add To Cart</a>
										</div>
									</div>
								</figure>
							</div>
						</div>
					</div>
				</div>
			";
			}
		}
	}
	else
	{
		echo "no banner found";
	}
}


//this function to get single productdetails

function getproductdetailsbyid($id)
{
	global $con;
	$sql="SELECT * FROM `balas_product` WHERE `product_id`='".$id."'  ";
	$result = $con->query($sql);
	if ($result->num_rows > 0) {
		$row = $result->fetch_assoc();
		return $row;
	}
	else{
		echo "<script>window.open('index.php','_self');</script>";
	}	

}

//this function to get random 4 product
function getrandomeproductbylimit($limit)
{
	global $con;
	$sql="SELECT * FROM `balas_product` ORDER BY RAND() LIMIT $limit";
	$result = $con->query($sql);

	if ($result->num_rows > 0) {
		while($row = $result->fetch_assoc()) {
			if($row['special']==1)
			{
				echo "	
				<div class='col-md-3 top_brand_left'>
					<div class='hover14 column'>
						<div class='agile_top_brand_left_grid'>
							<div class='agile_top_brand_left_grid_pos'>
								<img src='images/offer.png' alt=''  class='img-responsive' />
							</div>
							<div class='agile_top_brand_left_grid1'>
								<figure>
									<div class='snipcart-item block'>
										<div class='snipcart-thumb'>
											<a href='singleproduct.php?id=".base64_encode($row['product_id'])."&name=".base64_encode($row['product_name'])."'><img src='admin/Upload/Products/".$row['image']."' style='height:195.5px;width:124.75;' alt=''  class='img-responsive' /></a>
											<p>".$row['product_name']."</p>
											<h4>Rs. ".$row['selling']."/- <span>Rs. ".$row['price']."/-</span></h4>
											<strong>Product Code :</strong>".$row['SKU']."
										</div>
										<div class='snipcart-details top_brand_home_details'>
											<a href='singleproduct.php?id=".base64_encode($row['product_id'])."&name=".base64_encode($row['product_name'])."' class='snipcart-details'>Add To Cart</a>
										</div>
									</div>
								</figure>
							</div>
						</div>
					</div>
				</div>

			";
			}
			else
			{
				echo "	
				<div class='col-md-3 top_brand_left'>
					<div class='hover14 column'>
						<div class='agile_top_brand_left_grid'>
							<div class='tag'><img src='images/tag.png' alt=''  class='img-responsive' /></div>
							<div class='agile_top_brand_left_grid1'>
								<figure>
									<div class='snipcart-item block' >
										<div class='snipcart-thumb'>
											<a href='singleproduct.php?id=".base64_encode($row['product_id'])."&name=".base64_encode($row['product_name'])."'><img src='admin/Upload/Products/".$row['image']."' style='height:195.5px;width:124.75;' alt=''  class='img-responsive' /></a>
											<p>".$row['product_name']."</p>
											<h4>Rs. ".$row['selling']."/- <span>Rs. ".$row['price']."/-</span></h4>
											<strong>Product Code :</strong>".$row['SKU']."
										</div>
										<div class='snipcart-details top_brand_home_details'>
											<a href='singleproduct.php?id=".base64_encode($row['product_id'])."&name=".base64_encode($row['product_name'])."' class='snipcart-details'>Add To Cart</a>
										</div>
									</div>
								</figure>
							</div>
						</div>
					</div>
				</div>
			";
			}
		}
	}
	else
	{
		echo "no product found";
	}
}


//this function to show category products
function getcategorydeatilsbyid($id)
{
	global $con;
	$sql="SELECT * FROM `catrgories` WHERE `category_id`='".$id."'  ";
	$result = $con->query($sql);
	if ($result->num_rows > 0) {
		$row = $result->fetch_assoc();
		return $row;
	}
	else{
		echo "<script>window.open('index.php','_self');</script>";
	}
}

//this function viewall product by category
function viewproductbycategory($category_id)
{
	global $con;

	$sql="SELECT product_id FROM product_category WHERE category_id='".base64_decode($category_id)."' ";
	$result=$con->query($sql);
	if ($result->num_rows > 0) {
		while($row = $result->fetch_assoc()) {
			$sql1="SELECT * FROM balas_product WHERE product_id='".$row['product_id']."' ";
			$result1=$con->query($sql1);
			if($result1->num_rows > 0)
			{
				while($row1 = $result1->fetch_assoc())
				echo "
					<div class='col-md-3 top_brand_left'>
					<div class='hover14 column'>
						<div class='agile_top_brand_left_grid'>
							<div class='tag'><img src='images/tag.png' alt=''  class='img-responsive' /></div>
							<div class='agile_top_brand_left_grid1'>
								<figure>
									<div class='snipcart-item block' >
										<div class='snipcart-thumb'>
											<a href='singleproduct.php?id=".base64_encode($row1['product_id'])."&name=".base64_encode($row1['product_name'])."'><img src='admin/Upload/Products/".$row1['image']."' style='height:195.5px;width:124.75;' alt=''  class='img-responsive' /></a>
											<p>".$row1['product_name']."</p>
											<h4>Rs. ".$row1['selling']."/- <span>Rs. ".$row1['price']."/-</span></h4>
											<strong>Product Code :</strong>".$row1['SKU']."
										</div>
										<div class='snipcart-details top_brand_home_details'>
											<a href='singleproduct.php?id=".base64_encode($row1['product_id'])."&name=".base64_encode($row1['product_name'])."' class='snipcart-details'>Add To Cart</a>
										</div>
									</div>
								</figure>
							</div>
						</div>
					</div>
				</div>

				";
			}
			else
			{
				echo "<script>window.open('index.php','_self');</script>";
			}
		}
	}
	else{
		echo "<h2 align='center'>No Product Found</h2>";
	}
}


//this function only show offer product in offerpage
function showoffer()
{
	global $con;
	$sql="SELECT * FROM `balas_product` ORDER BY RAND() LIMIT 20";
	$result = $con->query($sql);

	if ($result->num_rows > 0) {
		while($row = $result->fetch_assoc()) {
			if($row['special']==1)
			{
				echo "	
				<div class='col-md-3 top_brand_left'>
					<div class='hover14 column'>
						<div class='agile_top_brand_left_grid'>
							<div class='agile_top_brand_left_grid_pos'>
								<img src='images/offer.png' alt=''  class='img-responsive' />
							</div>
							<div class='agile_top_brand_left_grid1'>
								<figure>
									<div class='snipcart-item block'>
										<div class='snipcart-thumb'>
											<a href='singleproduct.php?id=".base64_encode($row['product_id'])."&name=".base64_encode($row['product_name'])."'><img src='admin/Upload/Products/".$row['image']."' style='height:195.5px;width:124.75;' alt=''  class='img-responsive' /></a>
											<p>".$row['product_name']."</p>
											<h4>Rs. ".$row['selling']."/- <span>Rs. ".$row['price']."/-</span></h4>
											<strong>Product Code :</strong>".$row['SKU']."
										</div>
										<div class='snipcart-details top_brand_home_details'>
											<a href='singleproduct.php?id=".base64_encode($row['product_id'])."&name=".base64_encode($row['product_name'])."' class='snipcart-details'>Add To Cart</a>
										</div>
									</div>
								</figure>
							</div>
						</div>
					</div>
				</div>

			";
			}
		}
	}
	else
	{
		echo "no banner found";
	}
}


//this function to show details to collection
function getCollectionByID($id)
{
	global $con;
	$sql="SELECT * FROM `collection` WHERE `collection_id`='".$id."'  ";
	$result = $con->query($sql);
	if ($result->num_rows > 0) {
		$row = $result->fetch_assoc();
		return $row;
	}
	else{
		echo "<script>window.open('index.php','_self');</script>";
	}
}

//This Function To Show All product using collection
function viewproductbycollection($collection_id)
{
	global $con;

	$sql="SELECT product_id FROM product_collection WHERE collection_id='".base64_decode($collection_id)."' ";
	$result=$con->query($sql);
	if ($result->num_rows > 0) {
		while($row = $result->fetch_assoc()) {
			$sql1="SELECT * FROM balas_product WHERE product_id='".$row['product_id']."' ";
			$result1=$con->query($sql1);
			if($result1->num_rows > 0)
			{
				while($row1 = $result1->fetch_assoc())
				echo "
					<div class='col-md-3 top_brand_left'>
					<div class='hover14 column'>
						<div class='agile_top_brand_left_grid'>
							<div class='tag'><img src='images/tag.png' alt=''  class='img-responsive' /></div>
							<div class='agile_top_brand_left_grid1'>
								<figure>
									<div class='snipcart-item block' >
										<div class='snipcart-thumb'>
											<a href='singleproduct.php?id=".base64_encode($row1['product_id'])."&name=".base64_encode($row1['product_name'])."'><img src='admin/Upload/Products/".$row1['image']."' style='height:195.5px;width:124.75;' alt=''  class='img-responsive' /></a>
											<p>".$row1['product_name']."</p>
											<h4>Rs. ".$row1['selling']."/- <span>Rs. ".$row1['price']."/-</span></h4>
											<strong>Product Code :</strong>".$row['SKU']."
										</div>
										<div class='snipcart-details top_brand_home_details'>
											<a href='singleproduct.php?id=".base64_encode($row1['product_id'])."&name=".base64_encode($row1['product_name'])."' class='snipcart-details'>Add To Cart</a>
										</div>
									</div>
								</figure>
							</div>
						</div>
					</div>
				</div>

				";
			}
			else
			{
				echo "<script>window.open('index.php','_self');</script>";
			}
		}
	}
	else{
		echo "<h2 align='center'>No Product Found</h2>";
	}
}


function viewcartitem()
{
	if(isset($_SESSION['uniqueSessionID']))
	{
		global $con;
	$total=0;
	$sql="SELECT * FROM `balas_cart` WHERE `User_ID`='".mysqli_real_escape_string($con,$_SESSION['uniqueSessionID'])."' ";
	$result=$con->query($sql);
	if ($result->num_rows > 0) {
		while($row = $result->fetch_assoc())
		{
			$sqlcommand="SELECT * FROM `balas_product` WHERE `product_id`='".mysqli_real_escape_string($con,$row['product_id'])."' ";
			$runquery=$con->query($sqlcommand);
			if($runquery->num_rows>0)
			{
				while($row1=$runquery->fetch_assoc())
				{
					echo "
					<form action='cart.php' method='post'>
					<tr>
						<td>
						<a href='single.php?id=".base64_encode($row1['product_id'])."&name=".base64_encode($row1['product_name'])."'><img src='admin/Upload/Products/".$row1['image']."' width='100px' height='auto'></a>
						<div style='float:right;'>".$row1['product_name']."</div>
						</td>
						<td>Rs : ".$row['product_price']." /-</td>
						<td><input type='number' name='txtQty' value='".$row['qty']."' min='1' width='50%'>
						<div style='float:right;'>
						<input type='hidden' name='cartid' value='".$row['Cart_ID']."'/>
						<button type='submit' name='btnUpdateQty' class='btn btn-default'>Update</button></div>
						</td>
						<td>RS: ".$row['qty']*$row['product_price']."/-</td>
						<td><a class='btn btn-danger' href='cart.php?del=".base64_encode($row['Cart_ID'])."&name=Q2FydA==' >Delete</a></td>
						</tr>
						</form>";
						$total=$total+($row['qty']*$row['product_price']);
				}
			}
		}
		//return true;
		return  array(true, $total);
	}
	else{
		echo "
			<div class='alert alert-danger' align='center'>
			  <strong>Empty!</strong> Cart Is Empty.
			</div>		";
			return  array(false, 0);
	}
}
else
{
	echo "
			<div class='alert alert-danger' align='center'>
			  <strong>Empty!</strong> Cart Is Empty.
			</div>		";
			return  array(false, 0);
}
	
}



//This Function Get total Amount Of Cart
function getTotalAmount()
{
	global $con;
	$total=0;
	if(isset($_SESSION['uniqueSessionID']))
	{
		$sql="SELECT * FROM `balas_cart` WHERE `User_ID`='".mysqli_real_escape_string($con,$_SESSION['uniqueSessionID'])."' ";
		$result=$con->query($sql);
		if ($result->num_rows > 0) {
			while($row = $result->fetch_assoc())
			{
				$sqlcommand="SELECT * FROM `balas_product` WHERE `product_id`='".mysqli_real_escape_string($con,$row['product_id'])."' ";
				$runquery=$con->query($sqlcommand);
				if($runquery->num_rows>0)
				{
					while($row1=$runquery->fetch_assoc())
					{
						$total=$total+($row['qty']*$row['product_price']);
					}				
				}
			}
		}
	}
	return $total;
}


function ViewOrderSummery()
{
	global $con;
	$total=0;
	if(isset($_SESSION['uniqueSessionID']))
	{
		$sql="SELECT * FROM `balas_cart` WHERE `User_ID`='".mysqli_real_escape_string($con,$_SESSION['uniqueSessionID'])."' ";
		$result=$con->query($sql);
		if ($result->num_rows > 0) {
			while($row = $result->fetch_assoc())
			{
				$sqlcommand="SELECT * FROM `balas_product` WHERE `product_id`='".mysqli_real_escape_string($con,$row['product_id'])."' ";
				$runquery=$con->query($sqlcommand);
				if($runquery->num_rows>0)
				{
					while($row1=$runquery->fetch_assoc())
					{
						echo "
						<tr>
							<td>".$row1['product_name']."</td>
							<td>".$row['product_price']."</td>
							<td>".$row['qty']."</td>
							<td>RS: ".$row['qty']*$row['product_price']."/-</td>
						</tr>
						";
						$total=$total+($row['qty']*$row['product_price']);
					}				
				}
			}
		}
	}
	return $total;
}

//this function view user details

function getuserdetailsbyemail()
{
	global $con;
	$sql="SELECT * FROM `balas_user` WHERE `customer_email`='".mysqli_real_escape_string($con,$_SESSION['UserEmail'])."' ";
	$result=$con->query($sql);

	if($result->num_rows > 0)
	{
		$row = $result->fetch_assoc();
		return $row;
	}
	else
	{
		echo "<script>window.open('login.php?name=VXNlciBMb2dpbg==','_self');</script>";
	}
}

///this function view open order 
function viewopenorder()
{
	global $con;
	$sql="SELECT * FROM `balas_order` WHERE `payment`=1 AND `email`='".mysqli_real_escape_string($con,$_SESSION['UserEmail'])."' ORDER BY `order_id` DESC";

	$result=$con->query($sql);
	if($result->num_rows > 0)
	{
		while($row = $result->fetch_assoc())
		{
			if($row["current_status"]!="Delivered" && $row["current_status"]!="Cancelled")
			{
				echo "<tr>
					<td>#ORDBALAS".$row['order_id']."</td>
	 				<td>".$row['date']."</td>
	 				<td>".$row['totalamount'].".00/-</td>
	 				<td>".$row['current_status']."</td>
	 				<td><a href='track.php?id=".base64_encode($row['order_id'])."' class='btn btn-info'>Track Orders</a></td>
				</tr>";
			}
		}

		/*echo "<tr>
		<td></td>
		</tr>";*/
	}
	else
	{
		echo "<h1 align='center'> No Order Found</h1>";
	}
}


//this function show all order
function ShowAllOrder()
{
	global $con;
	$sql="SELECT * FROM `balas_order` WHERE `payment`=1 AND `email`='".mysqli_real_escape_string($con,$_SESSION['UserEmail'])."' ORDER BY `order_id` DESC";

	$result=$con->query($sql);
	if($result->num_rows > 0)
	{
		while($row = $result->fetch_assoc())
		{
			
				echo "<tr>
					<td>#ORDBALAS".$row['order_id']."</td>
	 				<td>".$row['date']."</td>
	 				<td>".$row['totalamount'].".00/-</td>
	 				<td>".$row['current_status']."</td>
	 				<td><a href='track.php?id=".base64_encode($row['order_id'])."' class='btn btn-info'>    Track Order    </a></td>
				</tr>";
		}
	}
	else
	{
		echo "<h1 align='center'> No Order Found</h1>";
	}
}

//this function to view orderdeails by order id
function getOrderDetailsById($id)
{
	global $con;
	$sql="SELECT * FROM `balas_order` WHERE `order_id`='".mysqli_real_escape_string($con,$id)."' ";
	$result=$con->query($sql);
	$row = $result->fetch_assoc();
	return $row;
}

//this function to show item by order id
function viewproductitembycart($cart_id,$status)
{
	global $con;
	$sql="SELECT * FROM `balas_cart` WHERE `User_ID`='".mysqli_real_escape_string($con,$cart_id)."' ";
	$result = $con->query($sql);
	if ($result->num_rows > 0) {
		while($row = $result->fetch_assoc()) {
			$sql1="SELECT product_id,product_name,image,selling FROM `balas_product` WHERE `product_id`='".mysqli_real_escape_string($con,$row['product_id'])."'";
			$result1= $con->query($sql1);
			while($row1 = $result1->fetch_assoc())
			{
				if($status=="Delivered")
				{
					echo "<tr>
					<td>".$row1['product_name']."</td>
					<td><img src='admin/Upload/Products/".$row1['image']."' height='75px' width='75px'></td>
					<td>".$row1['selling'].".00/-</td>
					<td>".$row['qty']."</td>
					<td><a class='btn btn-danger' href='add_review.php?productid=".base64_encode($row1['product_id'])."'><span class='glyphicon glyphicon-star' aria-hidden='true'></span> Add Review</a></td>
				</td>
				";
				}
				else
				{
					echo "<tr>
					<td>".$row1['product_name']."</td>
					<td><img src='admin/Upload/Products/".$row1['image']."' height='75px' width='75px'></td>
					<td>".$row1['selling'].".00/-</td>
					<td>".$row['qty']."</td>
					<td><a disabled class='btn btn-danger' href='javascript:void(0);'><span class='glyphicon glyphicon-star' aria-hidden='true'></span> Add Review</a></td>
				</td>
				";
				}
			}
		}
	}
	
}


//this function to get product image
function viewproductimagebyid($id)
{
	global $con;
	$sql="SELECT * FROM `balas_productimage` WHERE `product_id`='".mysqli_real_escape_string($con,$id)."' ";
	$result = $con->query($sql);
	if ($result->num_rows > 0) {
		while($row = $result->fetch_assoc()) {
			echo "
				<li data-thumb='admin/Upload/ProductImage/".$row['image_path']."'>
				<div class='thumb-image'> <img src='admin/Upload/ProductImage/".$row['image_path']."' data-imagezoom='true' class='img-responsive' alt=''> </div>
				</li>
			";
		}
	}
}

//this function show all product in productpage
function ShowAllProduct()
{
	global $con;
	$sql="SELECT * FROM `balas_product` ORDER BY RAND()";
	$result = $con->query($sql);

	if ($result->num_rows > 0) {
		while($row = $result->fetch_assoc()) {
			if($row['special']==1)
			{
				echo "	
				<div class='col-md-3 top_brand_left'>
					<div class='hover14 column'>
						<div class='agile_top_brand_left_grid'>
							<div class='agile_top_brand_left_grid_pos'>
								<img src='images/offer.png' alt=''  class='img-responsive' />
							</div>
							<div class='agile_top_brand_left_grid1'>
								<figure>
									<div class='snipcart-item block'>
										<div class='snipcart-thumb'>
											<a href='singleproduct.php?id=".base64_encode($row['product_id'])."&name=".base64_encode($row['product_name'])."'><img src='admin/Upload/Products/".$row['image']."' style='height:195.5px;width:124.75;' alt=''  class='img-responsive' /></a>
											<p>".$row['product_name']."</p>
											<h4>Rs. ".$row['selling']."/- <span>Rs. ".$row['price']."/-</span></h4>
											<strong>Product Code :</strong>".$row['SKU']."
										</div>
										<div class='snipcart-details top_brand_home_details'>
											<a href='singleproduct.php?id=".base64_encode($row['product_id'])."&name=".base64_encode($row['product_name'])."' class='snipcart-details'>Add To Cart</a>
										</div>
									</div>
								</figure>
							</div>
						</div>
					</div>
				</div>

			";
			}
			else
			{
				echo "	
				<div class='col-md-3 top_brand_left'>
					<div class='hover14 column'>
						<div class='agile_top_brand_left_grid'>
							<div class='tag'><img src='images/tag.png' alt=''  class='img-responsive' /></div>
							<div class='agile_top_brand_left_grid1'>
								<figure>
									<div class='snipcart-item block' >
										<div class='snipcart-thumb'>
											<a href='singleproduct.php?id=".base64_encode($row['product_id'])."&name=".base64_encode($row['product_name'])."'><img src='admin/Upload/Products/".$row['image']."' style='height:195.5px;width:124.75;' alt=''  class='img-responsive' /></a>
											<p>".$row['product_name']."</p>
											<h4>Rs. ".$row['selling']."/- <span>Rs. ".$row['price']."/-</span></h4>
											<strong>Product Code :</strong>".$row['SKU']."
										</div>
										<div class='snipcart-details top_brand_home_details'>
											<a href='singleproduct.php?id=".base64_encode($row['product_id'])."&name=".base64_encode($row['product_name'])."' class='snipcart-details'>Add To Cart</a>
										</div>
									</div>
								</figure>
							</div>
						</div>
					</div>
				</div>
			";
			}
		}
	}
	else
	{
		echo "no product found";
	}
}


//This Function To Show Search Result 

function SearchResult($keyword)
{
	global $con;
	$sql="SELECT * FROM `balas_product` WHERE `product_name` LIKE '%".$keyword."%' LIMIT 20";
	$result = $con->query($sql);

	if ($result->num_rows > 0) {
		while($row = $result->fetch_assoc()) {
			if($row['special']==1)
			{
				echo "	
				<div class='col-md-3 top_brand_left'>
					<div class='hover14 column'>
						<div class='agile_top_brand_left_grid'>
							<div class='agile_top_brand_left_grid_pos'>
								<img src='images/offer.png' alt=''  class='img-responsive' />
							</div>
							<div class='agile_top_brand_left_grid1'>
								<figure>
									<div class='snipcart-item block'>
										<div class='snipcart-thumb'>
											<a href='singleproduct.php?id=".base64_encode($row['product_id'])."&name=".base64_encode($row['product_name'])."'><img src='admin/Upload/Products/".$row['image']."' style='height:195.5px;width:124.75;' alt=''  class='img-responsive' /></a>
											<p>".$row['product_name']."</p>
											<h4>Rs. ".$row['selling']."/- <span>Rs. ".$row['price']."/-</span></h4>
											<strong>Product Code :</strong>".$row['SKU']."
										</div>
										<div class='snipcart-details top_brand_home_details'>
											<a href='singleproduct.php?id=".base64_encode($row['product_id'])."&name=".base64_encode($row['product_name'])."' class='snipcart-details'>Add To Cart</a>
										</div>
									</div>
								</figure>
							</div>
						</div>
					</div>
				</div>

			";
			}
			else
			{
				echo "	
				<div class='col-md-3 top_brand_left'>
					<div class='hover14 column'>
						<div class='agile_top_brand_left_grid'>
							<div class='tag'><img src='images/tag.png' alt=''  class='img-responsive' /></div>
							<div class='agile_top_brand_left_grid1'>
								<figure>
									<div class='snipcart-item block' >
										<div class='snipcart-thumb'>
											<a href='singleproduct.php?id=".base64_encode($row['product_id'])."&name=".base64_encode($row['product_name'])."'><img src='admin/Upload/Products/".$row['image']."' style='height:195.5px;width:124.75;' alt=''  class='img-responsive' /></a>
											<p>".$row['product_name']."</p>
											<h4>Rs. ".$row['selling']."/- <span>Rs. ".$row['price']."/-</span></h4>
											<strong>Product Code :</strong>".$row['SKU']."
										</div>
										<div class='snipcart-details top_brand_home_details'>
											<a href='singleproduct.php?id=".base64_encode($row['product_id'])."&name=".base64_encode($row['product_name'])."' class='snipcart-details'>Add To Cart</a>
										</div>
									</div>
								</figure>
							</div>
						</div>
					</div>
				</div>
			";
			}
		}
	}
	else
	{
		echo "<h2 align='center'>No Match Found In This Keyword -- '".$keyword."'</h2>";
	}
}

?>