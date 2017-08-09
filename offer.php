<?php  
include_once('include/header.php');
include_once('include/nav.php');
include_once('phplib/view.php');
?>

<!-- top-brands -->
	<div class="top-brands">
		<div class="container">
			<h3>Special Offers For You</h3>
			<div class="agile_top_brands_grids">

			<?php
				showoffer();

			?>

				
				<div class="clearfix"> </div>
<br><br><br>
				<p align="center"><a href="index.php" class="btn btn-info">Back to Home</a></p>
			</div>
		</div>
	</div>
<!-- //top-brands -->
<?php
include_once('include/footer.php');
?>