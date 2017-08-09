<?php
include_once('include/header.php');
include_once('include/nav.php');
include_once('phplib/view.php');
include_once('phplib/controler.php');
if(isset($_SESSION['UserEmail']) && isset($_SESSION['UserFullName']))
{
    if(!isset($_GET['name']))
    {
        echo "<script>window.open('order.php?name=WW91ciBPcmRlciBIaXN0b3J5','_self');</script>";
    }
 //  $gloabvar=getuserdetailsbyemail();
}
else
{
    echo "<script>window.open('login.php?name=VXNlciBMb2dpbg==','_self');</script>";
}
?>
<div style="margin-top: 50px;">&nbsp;</div>




<div class="col-sm-10 col-sm-offset-1">
<ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#home">Open Orders</a></li>
    <li><a data-toggle="tab" href="#menu1">Order History</a></li>
  </ul>

  <div class="tab-content">
    <div id="home" class="tab-pane fade in active">
     <table class="table table-border">
     	<tr>
     		<th><b>Order No</b></th>
  			<th><b>Order Date</b></th>
  			<th><b>Total Amount</b></th>
  			<th><b>Order Status</b></th>
  			<th><b>Order Details</b></th>
     	</tr>
     	<?php viewopenorder(); ?>
     </table>
     </table>
    </div>
    

    <div id="menu1" class="tab-pane fade">
      
      <table class="table table-border">
     	<tr>
     		<th><b>Order No</b></th>
  			<th><b>Order Date</b></th>
  			<th><b>Total Amount</b></th>
  			<th><b>Order Status</b></th>
  			<th><b>Order Details</b></th>
     	</tr>
     	<?php ShowAllOrder(); ?>
     </table>
    </div>
  </div><div style="margin-bottom: 50px;">&nbsp;</div>
</div>

</div>
<?php
include_once('include/footer.php');
?>

<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>
<script type="text/javascript">
 $(document).on('ready', function () {
        $('.kv-gly-star').rating({
            containerClass: 'is-star'
        });
        $('.kv-gly-heart').rating({
            containerClass: 'is-heart',
            defaultCaption: '{rating} hearts',
            starCaptions: function (rating) {
                return rating == 1 ? 'One heart' : rating + ' hearts';
            },
            filledStar: '<i class="glyphicon glyphicon-heart"></i>',
            emptyStar: '<i class="glyphicon glyphicon-heart-empty"></i>'
        });
        $('.kv-fa').rating({
            theme: 'krajee-fa',
            filledStar: '<i class="fa fa-star"></i>',
            emptyStar: '<i class="fa fa-star-o"></i>'
        });
        $('.kv-fa-heart').rating({
            defaultCaption: '{rating} hearts',
            starCaptions: function (rating) {
                return rating == 1 ? 'One heart' : rating + ' hearts';
            },
            theme: 'krajee-fa',
            filledStar: '<i class="fa fa-heart"></i>',
            emptyStar: '<i class="fa fa-heart-o"></i>'
        });
        $('.kv-uni-star').rating({
            theme: 'krajee-uni',
            filledStar: '&#x2605;',
            emptyStar: '&#x2606;'
        });
        $('.kv-uni-rook').rating({
            theme: 'krajee-uni',
            defaultCaption: '{rating} rooks',
            starCaptions: function (rating) {
                return rating == 1 ? 'One rook' : rating + ' rooks';
            },
            filledStar: '&#9820;',
            emptyStar: '&#9814;'
        });
        $('.kv-svg').rating({
            theme: 'krajee-svg',
            filledStar: '<span class="krajee-icon krajee-icon-star"></span>',
            emptyStar: '<span class="krajee-icon krajee-icon-star"></span>'
        });
        $('.kv-svg-heart').rating({
            theme: 'krajee-svg',
            filledStar: '<span class="krajee-icon krajee-icon-heart"></span>',
            emptyStar: '<span class="krajee-icon krajee-icon-heart"></span>',
            defaultCaption: '{rating} hearts',
            starCaptions: function (rating) {
                return rating == 1 ? 'One heart' : rating + ' hearts';
            },
            containerClass: 'is-heart'
        });

        $('.rating,.kv-gly-star,.kv-gly-heart,.kv-uni-star,.kv-uni-rook,.kv-fa,.kv-fa-heart,.kv-svg,.kv-svg-heart').on(
                'change', function () {
                    console.log('Rating selected: ' + $(this).val());
                });
    });
</script>
</body>
</html>