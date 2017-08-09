<?php
session_start();
include_once('phplib/view.php');
$product_details=getproductdetailsbyid(base64_decode($_GET['id']));
?>

<!DOCTYPE html>
<html>
<head>
<title>Balas | <?php echo base64_decode($_GET['name']); ?> </title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- font-awesome icons -->
<link href="css/font-awesome.css" rel="stylesheet" type="text/css" media="all" /> 
<!-- //font-awesome icons -->
<!-- js -->
<script src="js/jquery-1.11.1.min.js"></script>
<!-- //js -->
 <script src='js/okzoom.js'></script>
  <script>
    $(function(){
      $('#example').okzoom({
        width: 175,
        height: 175,
        border: "1px solid black",
        shadow: "0 0 5px #000"
      });
    });
  </script>
<link href='//fonts.googleapis.com/css?family=Ubuntu:400,300,300italic,400italic,500,500italic,700,700italic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<link href="single/css/style.css" rel="stylesheet" type="text/css" media="all" /> 
<!--flex slider-->
<script defer src="single/js/jquery.flexslider.js"></script>
<link rel="stylesheet" href="single/css/flexslider.css" type="text/css" media="screen" />
<script>
	// Can also be used with $(document).ready()
	$(window).load(function() {
	  $('.flexslider').flexslider({
		animation: "slide",
		controlNav: "thumbnails"
	  });
	});
</script>
<!--flex slider-->
<script src="single/js/imagezoom.js"></script>
<!-- //js --> 
<!-- web-fonts -->
<link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,300,300italic,400italic,700,700italic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Lovers+Quarrel' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Offside' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Tangerine:400,700' rel='stylesheet' type='text/css'>
<!-- web-fonts --> 

<script type="text/javascript" src="single/js/move-top.js"></script>
<script type="text/javascript" src="single/js/easing.js"></script>	
<script type="text/javascript">
		jQuery(document).ready(function($) {
			$(".scroll").click(function(event){		
				event.preventDefault();
				$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
			});
		});
</script>
<!-- //end-smooth-scrolling -->
<!-- smooth-scrolling-of-move-up -->
<script type="text/javascript">
	$(document).ready(function() {
	
		var defaults = {
			containerID: 'toTop', // fading element id
			containerHoverID: 'toTopHover', // fading element hover id
			scrollSpeed: 1200,
			easingType: 'linear' 
		};
		
		$().UItoTop({ easingType: 'easeOutQuart' });
		
	});
</script>
<!-- //smooth-scrolling-of-move-up --> 


<style type="text/css">
	body {
		background-image: url(images/bg2.png);
		background-size: 100%;
		background-repeat: repeat-y;
	}
	.inner {
		background-color: #fff;
		-webkit-box-shadow: 0px 0px 31px 1px rgba(0,0,0,0.75);
        -moz-box-shadow: 0px 0px 31px 1px rgba(0,0,0,0.75);
        box-shadow: 0px 0px 31px 1px rgba(0,0,0,0.75);
	}
	.wthree_banner_bottom_left_grid:hover
			{
    -webkit-animation: flash 1s;
    animation: flash 1s;
			}
	.wthree_banner_bottom_left {
		padding: 10px;
	}
	.singleppt {
		margin: 0px 60px;
	}
</style>


</head>
	
<body>
<!-- header -->
<div class="container inner">
		<div class="agileits_header">
		<div class="w3l_offers">
			<a href="offer.php">Special Offers !</a>
		</div>
		<div class="w3l_search">
			<form action="#" method="post">
				<input type="text" name="Product" value="Search a product..." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search a product...';}" required="">
				<input type="submit" value=" ">
			</form>
		</div>
		<div class="w3l_header_right">
			<ul>
				<li class="dropdown profile_details_drop">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user" aria-hidden="true"></i> My Account <span class="caret"></span></a>
					<div class="mega-dropdown-menu">
						<div class="w3ls_vegetables">
							<ul class="dropdown-menu drp-mnu">
								<?php
									if(isset($_SESSION['UserEmail']) && isset($_SESSION['UserFullName']))
									{
										echo "
											<li><a href='order.php?name=WW91ciBPcmRlciBIaXN0b3J5'>Order History</a></li>
											<li><a href='myaccount.php?name=TXkgQWNjb3VudA=='>Account</a></li>
											<li><a href='order.php?name=WW91ciBPcmRlciBIaXN0b3J5'>Track Order</a></li>
											<li><a href='logout.php'>Log Out</a></li>
										";
									}
									else
									{
										echo "
											<li><a href='login.php?name=".base64_encode('User Login')."'>Login</a></li>
								<li><a href='register.php?name=".base64_encode('Create New Account')."'>Sign Up</a></li>
										";
									}
								?>
							</ul>
						</div>                  
					</div>	
				</li>
			</ul>
		</div>
		<div class="product_list_header">  
			<form action="cart.php?name=Q2FydA==" method="post" class="last">
                <fieldset>
                    <input type="hidden" name="cmd" value="_cart" />
                    <input type="hidden" name="display" value="1" />
                    <input type="submit" name="submit" value="View cart" class="button" />
                </fieldset>
            </form>
		</div>
		<div class="w3l_header_right1">
			<h2><a href="contact.php">Contact</a></h2>
		</div>
		<div class="clearfix"> </div>
	</div>
<!-- script-for sticky-nav -->
	<script>
	$(document).ready(function() {
		 var navoffeset=$(".agileits_header").offset().top;
		 $(window).scroll(function(){
			var scrollpos=$(window).scrollTop(); 
			if(scrollpos >=navoffeset){
				$(".agileits_header").addClass("fixed");
			}else{
				$(".agileits_header").removeClass("fixed");
			}
		 });
		 
	});
	</script>
<!-- //script-for sticky-nav -->
	<div class="logo_products" style="background-color: #000; background-image: url('img/bg.png');">
		<div class="container">
			<div class="w3ls_logo_products_left">
				<a href="index.php"><img src="img/logo.png" class="logo2"></a>
			</div>
			<div class="w3ls_logo_products_left1">
				<ul class="special_items" style="color:#fff;">
					<li><a href="index.php" style="color:#fff;">Home</a><i>/</i></li>
					<li><a href="about.php" style="color:#fff;">About Us</a><i>/</i></li>
					<li><a href="products.php" style="color:#fff;">Products</a><i>/</i></li>
					<li><a href="services.php" style="color:#fff;">Services</a></li>
				</ul>
			</div>
			<div class="w3ls_logo_products_left1">
				<ul class="phone_email" >
					<li style="color:#fff;"><i class="fa fa-phone" style="color:#fff;" aria-hidden="true"></i>(+0123) 234 567</li>
					<li style="color:#fff;"><i class="fa fa-envelope-o" style="color:#fff;" aria-hidden="true"></i><a href="mailto:info@balas.co.in" style="color:#fff;">info@balas.co.in</a></li>
				</ul>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
<!-- //header -->
<!-- products-breadcrumb -->
	<div class="products-breadcrumb">
		<div class="container">
			<ul>
				<li><i class="fa fa-home" aria-hidden="true"></i><a href="index.php">Home</a></li>
				<li><?php if(isset($_GET['name'])){echo "<span>|</span>".base64_decode($_GET['name']);} ?></li>
			</ul>
		</div>
	</div>
<!-- //products-breadcrumb -->
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
			
		</div>
		<div class="clearfix"></div>
	</div>
<!-- //banner -->

	<!-- products -->
	<div class="products singleppt">	 
		<div class="container ">  
			<div class="single-page">
				<div class="single-page-row" id="detail-21">
					<div class="col-md-6 single-top-left">	
						<div class="flexslider">
							<ul class="slides">
								<?php viewproductimagebyid(base64_decode($_GET['id'])); ?>
							</ul>
						</div>
					</div>
					<div class="col-md-6 single-top-right">
						<h3 class="item_name"><?php echo $product_details['product_name']; ?></h3>
						<p>Processing Time: Item will be shipped out within 2-3 working days. </p>
						<p><strong>Product Code</strong> :<? echo $product_details['SKU']; ?></p>
						<!--div class="single-rating">
							<ul>
								<li><i class="fa fa-star-o" aria-hidden="true"></i></li>
								<li><i class="fa fa-star-o" aria-hidden="true"></i></li>
								<li><i class="fa fa-star-o" aria-hidden="true"></i></li>
								<li><i class="fa fa-star-o" aria-hidden="true"></i></li>
								<li><i class="fa fa-star-o" aria-hidden="true"></i></li>
								<li class="rating">20 reviews</li>
								<li><a href="#">Add your review</a></li>
							</ul> 
						</div-->
						<div class="single-price">
							<ul>
								<li>Rs. <?php echo $product_details['selling']; ?>/- </li>  
								<li><del>Rs. <?php echo $product_details['price']; ?>/-</del></li> 
								<li><!--span class="w3off">10% OFF</span--></li> 
								<li><!--Ends on: June,5th--></li>
								<li><!--a href="#"><i class="fa fa-gift" aria-hidden="true"></i> Coupon</a--></li>
							</ul>	
						</div> 
						<p class="single-price-text"><?php echo $product_details['description']; ?></p>
						

						<form action="javascript:void(0);" method="post">
								<fieldset>
									<input type="hidden" name="amount" id="price" value="<?php echo $product_details['selling']; ?>" />
									<input type="hidden" name="productid" id="productid" value="<?php echo $product_details['product_id']; ?>" />
									<button type="submit" onclick="AddToCart()" name="submit" class="w3ls-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
									<span id="txtStatus"></span>	
								</fieldset>
							</form>
						
					</div>
					
				   <div class="clearfix"> </div>  
				</div>
			</div> 
			
		</div>
	</div>
<!--//products--> 



<!-- brands -->
	<div class="w3ls_w3l_banner_nav_right_grid w3ls_w3l_banner_nav_right_grid_popular">
		<div class="container">
			<h3>You may also like</h3>
				<div class="w3ls_w3l_banner_nav_right_grid1">
					<?php viewhomeproduct();  ?>
					<div class="clearfix"> </div>
				</div>
		</div>
	</div>
<!-- //brands -->

<?php
include_once('include/footer.php');
?>
<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>
<script>
$(document).ready(function(){
    $(".dropdown").hover(            
        function() {
            $('.dropdown-menu', this).stop( true, true ).slideDown("fast");
            $(this).toggleClass('open');        
        },
        function() {
            $('.dropdown-menu', this).stop( true, true ).slideUp("fast");
            $(this).toggleClass('open');       
        }
    );
});
</script>
<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/
								
			$().UItoTop({ easingType: 'easeOutQuart' });
								
			});
	</script>
<!-- //here ends scrolling icon -->
<script src="js/minicart.min.js"></script>

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
</body>
</html>