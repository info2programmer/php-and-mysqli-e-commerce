<?php
include_once('phplib/view.php');
include_once('phplib/controler.php');
session_start();
if(isset($_SESSION['UserEmail']) && isset($_SESSION['UserFullName']))
{
	if(isset($_GET['id']) && strlen($_GET['id'])>0)
	{
		$GlobalData=getOrderDetailsById(base64_decode($_GET['id']));
	}
	else
	{
		echo "<script>window.open('order.php?name=WW91ciBPcmRlciBIaXN0b3J5','_self');</script>";
	}
}
else
{
	echo "<script>window.open('login.php','_self');</script>";
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Balas Kolkata | Track Order</title>
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

	.tracking {
		padding-left: 10%;
		max-width: 90%;
	}
</style>
</head>
	
<?php include_once("include/nav.php"); ?>

<div style="margin-top: 30px;">&nbsp;</div>

<section class="tracking">
	
	<div class="row">
		<div class="col-sm-2 text-left">
			Order Placed
		</div>
		<div class="col-sm-2 text-center">
			Order Confirmed
		</div>
		<div class="col-sm-2 text-center">
			Shipped
		</div>
		
		<div class="col-sm-4  text-center">
			Item On The Way
		</div>
		<div class="col-sm-2 text-right">
			Delevered
		</div>
	</div><br/><br/>
<div class="progress">
  <div class='progress-bar progress-bar-success' role='progressbar' aria-valuenow='3' aria-valuemin='0' aria-valuemax='100' style='width:0%'>
  </div>
  <?php
       switch ($GlobalData['current_status']) {
        case 'Pending':
         echo "
        <div class='progress-bar progress-bar-success' role='progressbar' aria-valuenow='3' aria-valuemin='0' aria-valuemax='100' style='width:0%'></div>
         ";
          break;
          case 'Confirmed':
         echo "
         <div class='progress-bar progress-bar-success' role='progressbar' aria-valuenow='28' aria-valuemin='0' aria-valuemax='100' style='width:0%'></div>
         ";
          break;

        case 'Shipped':
         echo "
         <div class='progress-bar progress-bar-success' role='progressbar' aria-valuenow='42' aria-valuemin='0' aria-valuemax='100' style='width:0%'></div>
         ";
          break;

        case 'Ready To Shipped':
         echo "
         <div class='progress-bar progress-bar-success' role='progressbar' aria-valuenow='70' aria-valuemin='0' aria-valuemax='100' style='width:0%'></div>
         ";
          break;

          case 'Delivered':
         echo "
         <div class='progress-bar progress-bar-success' role='progressbar' aria-valuenow='97' aria-valuemin='0' aria-valuemax='100' style='width:0%'></div>
         ";
          break;
      }
     ?>
</div>
<br/><br/><br/>

<div class="col-sm-12" style="border:1px solid #cfcfcf; padding:10px; border-radius: 6px;">
	<h5>Order ID : #ORDBALAS<?php echo $GlobalData['order_id'] ; ?><br/>
	Order On : <?php echo $GlobalData['date']." ".$GlobalData['time'] ; ?><br/>
	Shipping Address : <?php echo $GlobalData['address'] ; ?></h5>
</div>
<br/><br/><br/><br/>
<table class="table table-striped table-bordered">
     	<tr>
     		<th>Product Name</th>
     		<th>Product Image</th>
     		<th>Price</th>
     		<th>Quantity</th>
     		<th>Review</th>
     	</tr>
     	<?php viewproductitembycart($GlobalData['cart_id'],$GlobalData['current_status']); ?>
     </table>
     <h2>Total Amount : <?php echo $GlobalData['totalamount']+$GlobalData['deliverycharge'].".00/-" ; ?> | Payment Mode : <?php echo $GlobalData['mode']; ?></h2>
</section>
<br/>
<p align="center"><a class="btn btn-info" href="javascript:BackPage();"><span class="glyphicon glyphicon-triangle-left" aria-hidden="true"></span> BACK</a>

</p>
<div style="margin-bottom: 150px;">&nbsp;</div>

<?php
include_once("include/footer.php");
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
	// progress bar
	
		 $(document).ready(function() {
      $('.progress .progress-bar').css("width",
                function() {
                    return $(this).attr("aria-valuenow") + "%";
                }
        )
    });
</script>
<script>
function BackPage() {
    window.history.back();
}
</script>
</body>
</html>