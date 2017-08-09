<?php
include_once('include/header.php');
include_once('include/nav.php');
include_once('phplib/view.php');
if(!isset($_GET['name']))
{
 echo "<script>window.open('index.php?name=QmVzdCBPbmxpbmUgSmV3ZWxsZXJ5IFNob3Ag','_self');</script>";
}
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
				</div>
				<!-- /.navbar-collapse -->
			</nav>
		</div>
		<div class="w3l_banner_nav_right">
			<section class="slider">
				<div class="flexslider">
					<ul class="slides">
						<?php
							homeslider();
						 ?>
					</ul>
				</div>
			</section>
			<!-- flexSlider -->
				<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" property="" />
				<script defer src="js/jquery.flexslider.js"></script>
				<script type="text/javascript">
				$(window).load(function(){
				  $('.flexslider').flexslider({
					animation: "slide",
					start: function(slider){
					  $('body').removeClass('loading');
					}
				  });
				});
			  </script>
			<!-- //flexSlider -->
		</div>
		<div class="clearfix"></div>
	</div>
<!-- banner -->

	<div class="banner_bottom">
	<h2 class="text-center">Collection You Love</h2><br/><br/>

				<?php

					viewcollection();
				?>

				<div class="clearfix"> </div>
			<div class="clearfix"> </div>
	</div>
<!-- top-brands -->
	<div class="top-brands">
		<div class="container">
			<h3>Our Latest Products</h3>
			<div class="agile_top_brands_grids">

			<?php viewhomeproduct();  ?>

				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
<!-- //top-brands -->
<?php
include_once('include/footer.php');
?>