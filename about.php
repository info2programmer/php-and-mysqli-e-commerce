<?php
include_once('include/header.php');
include_once('include/nav.php');
include_once('phplib/view.php');
include_once('phplib/controler.php');
if(!isset($_GET['name']))
{
	echo "<script>window.open('about.php?name=".base64_encode('About Us')."','_self');</script>";
}
?>

<!-- about -->
		<div class="privacy about">
			<h3>About Us</h3>
			
			<div class="agile_about_grids">
				<div class="col-md-6 agile_about_grid_right">
					<br><img src="images/31.jpg" alt=" " class="img-responsive" />
				</div>
				<div class="col-md-6 agile_about_grid_right">
				<p class="animi" align="justify">Located in one of the premium locations in the City of Joy, we enjoy a wide patronage from our customers. We are committed in delighting customers by our innovative and unique designs, impeccable quality and superior service. We deal in antique jewellery, american diamond,junk jewellery, kundan jewellery, precious stones and silver. Our jewellery ranges from traditional/classic designs to modern lightweight ones. Whether it is for that big day in couples’ lives, or a special reason or one of those tempting moments to pamper yourself there is always something for everyone, for all occasions!</p>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
<!-- //about -->
<!-- team -->
	<!--<div class="team">
		<div class="container">
			<h3>Meet Our Amazing Team</h3>
			<div class="agileits_team_grids">
				<div class="col-md-3 agileits_team_grid">
					<img src="images/32.jpg" alt=" " class="img-responsive" />
					<h4>Annesha Roy</h4>
					<p>Manager</p>
					<ul class="agileits_social_icons agileits_social_icons_team">
						<li><a href="#" class="facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
						<li><a href="#" class="twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
						<li><a href="#" class="google"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
					</ul>
				</div>
				<div class="col-md-3 agileits_team_grid">
					<img src="images/33.jpg" alt=" " class="img-responsive" />
					<h4>Michael Rick</h4>
					<p>Supervisor</p>
					<ul class="agileits_social_icons agileits_social_icons_team">
						<li><a href="#" class="facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
						<li><a href="#" class="twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
						<li><a href="#" class="google"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
					</ul>
				</div>
				<div class="col-md-3 agileits_team_grid">
					<img src="images/34.jpg" alt=" " class="img-responsive" />
					<h4>Thomas Carl</h4>
					<p>Supervisor</p>
					<ul class="agileits_social_icons agileits_social_icons_team">
						<li><a href="#" class="facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
						<li><a href="#" class="twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
						<li><a href="#" class="google"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
					</ul>
				</div>
				<div class="col-md-3 agileits_team_grid">
					<img src="images/35.jpg" alt=" " class="img-responsive" />
					<h4>Laura Lee</h4>
					<p>CEO</p>
					<ul class="agileits_social_icons agileits_social_icons_team">
						<li><a href="#" class="facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
						<li><a href="#" class="twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
						<li><a href="#" class="google"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
					</ul>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>-->
<!-- //team -->
<!-- testimonials -->
	<div class="testimonials">
		<div class="container">
			<h3>Testimonials</h3>
				<div class="w3_testimonials_grids">
					<div class="wmuSlider example1 animated wow slideInUp" data-wow-delay=".5s">
						<div class="wmuSliderWrapper">
							<article style="position: absolute; width: 100%; opacity: 0;"> 
								<div class="banner-wrap">
									<div class="col-md-6 w3_testimonials_grid">
										<p><i class="fa fa-quote-right" aria-hidden="true"></i>Balas fashion jewelleries are the best in the town. They have a wide range of fashion jewelleries available at affordable prices.</p>
										<h4>Annesha Roy <span>Customer</span></h4>
									</div>
									<div class="col-md-6 w3_testimonials_grid">
										<p><i class="fa fa-quote-right" aria-hidden="true"></i>I do not have to go anywhere else now for buying my jewelleries. I get everything here at reasonable prices. The collection is simply awesome.</p>
										<h4>Sathi Kayal <span>Customer</span></h4>
									</div>
									<div class="clearfix"> </div>
								</div>
							</article>
							
							
						</div>
					</div>
					<script src="js/jquery.wmuSlider.js"></script> 
					<script>
						$('.example1').wmuSlider();         
					</script> 
				</div>
		</div>
	</div>
<!-- //testimonials -->
<?php
include_once('include/footer.php');
?>