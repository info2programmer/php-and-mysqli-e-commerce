<?php
include_once('include/header.php');
include_once('include/nav.php');
include_once('phplib/view.php');

$product_details=getproductdetailsbyid(base64_decode($_GET['id']));
?>
<!-- banner -->
	<div class="banner">
		<div class="w3l_banner_nav_left">
			<nav class="navbar nav_bottom">
			 <!-- Brand and toggle get grouped for better mobile display -->
			  <div class="navbar-header nav_2">
				  <button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				  </button>
			   </div> 
			   <!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
					<ul class="nav navbar-nav nav_1">
						<?php
							viewcategories();
						?>
					</ul>
				</div><!-- /.navbar-collapse -->
			</nav>
		</div>
		<div class="w3l_banner_nav_right">
			<div  class="w3l_banner_nav_right_banner3" 
			style="background:url(images/1.jpg) no-repeat 0px 0px;
						background-size:cover;
	                    background-size:cover;
	                    -moz-background-size:cover;
	                   -o-background-size:cover;
	                   -ms-background-size:cover;">
				
			</div>
			<div class="agileinfo_single">
				<h5><?php echo $product_details['product_name']; ?></h5>
				<div class="col-md-4 agileinfo_single_left">
					<img id="example" src="admin/Upload/Products/<?php echo $product_details['image']; ?>" alt=" " class="img-responsive" />
				</div>
				<div class="col-md-8 agileinfo_single_right">
					<div class="w3agile_description">
						<h4>Description :</h4>
						<p><?php
							echo $product_details['description'];
						?>
						</p>
					</div>
					<div class="snipcart-item block">
						<div class="snipcart-thumb agileinfo_single_right_snipcart">
							<h4>Rs. <?php echo $product_details['selling']; ?>/- <span>Rs. <?php echo $product_details['price']; ?>/-</span></h4>
						</div>
						<div class="snipcart-details agileinfo_single_right_details">
							<form action="javascript:void(0);" method="post">
								<fieldset>
									<input type="hidden" name="amount" id="price" value="<?php echo $product_details['selling']; ?>" />
									<input type="hidden" name="productid" id="productid" value="<?php echo $product_details['product_id']; ?>" />
									<input type="submit" onclick="AddToCart()" name="submit" value="Add to cart" class="button" />
								</fieldset>
							</form>
						</div>
						<br/>
					</div>
					<span id="txtStatus">
					
					</span>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
		<div class="clearfix"></div>
	</div>
<!-- //banner -->
<!-- brands -->
	<div class="w3ls_w3l_banner_nav_right_grid w3ls_w3l_banner_nav_right_grid_popular">
		<div class="container">
			<h3>You may also like</h3>
				<div class="w3ls_w3l_banner_nav_right_grid1">
					<?php getrandomeproductbylimit(5); ?>
					<div class="clearfix"> </div>
				</div>
		</div>
	</div>
<!-- //brands -->

<script>
function AddToCart()
{
	var a=document.getElementById("price").value;
	var b=document.getElementById("productid").value;
 	var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("txtStatus").innerHTML = this.responseText;
        }
    };
    var url="addtocart.php?productid="+b+"&price="+a;
    xmlhttp.open("GET", url, true);
    xmlhttp.send();
}
</script>

<?php
include_once('include/footer.php');
?>