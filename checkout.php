<?php
session_start();
include_once('phplib/view.php');
include_once('phplib/controler.php');
?>
<!DOCTYPE html>
<html>
<head>
<title>Balas Kolkata | </title>
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
	
	.checkout {
		max-width: 80%;
		border:1px solid #FFF; 
		margin: 30px 10%; 

	}
	.panel-default > .panel-heading {
    border-color: #fa1818;
    color: #fff;
    background-color: #8a0101;
}
	.panel-title > a {
    font-size: 1em;
    color: #ffffff;
    text-transform: capitalize;
    text-decoration: none;
}
	.form-control {
	border-radius: 0px;
}
</style>
</head>
	
<body>
<div class="container inner">
		<div class="agileits_header">
		<div class="w3l_offers">
			<a href="offer.html">Special Offers !</a>
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
								<li><a href="login.html">Login</a></li>
								<li><a href="register.html">Sign Up</a></li>
								<li><a href="order.html">Order History</a></li>
								<li><a href="track.html">Track Order</a></li>
								<li><a href="login.html">Log Out</a></li>
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
			<h2><a href="contact.html">Contact</a></h2>
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
	<?php
	include_once('include/nav.php');
	?>
<!-- //header -->
<!-- Check out Start -->


<div class="checkout">	
<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingOne">
      <h4 class="panel-title">
        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#deliveryAddress" aria-expanded="true" aria-controls="deliveryAddress">
          Delivery Address
        </a>
      </h4>
    </div>
    <div id="deliveryAddress" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
      <div class="panel-body">
        <div class="row">
    <form action="checkout.php" method="POST">
			<div class="form-group col-sm-12">
  				<label for="txtName">Name:</label>
  				<input type="text" class="form-control" required name="txtName" id="txtName">
			</div>
			<div class="form-group col-sm-6">
  				<label for="txtEmail">Email Address:</label>
  				<input type="text" class="form-control" required name="txtEmail" id="txtEmail">
			</div>
			<div class="form-group col-sm-6">
  				<label for="txtPhone">Phone No:</label>
  				<input type="text" class="form-control" maxlength="10" onkeydown="return ( event.ctrlKey || event.altKey 
                    || (47<event.keyCode && event.keyCode<58 && event.shiftKey==false) 
                    || (95<event.keyCode && event.keyCode<106)
                    || (event.keyCode==8) || (event.keyCode==9) 
                    || (event.keyCode>34 && event.keyCode<40) 
                    || (event.keyCode==46) )" minlength="10" required name="txtPhone" id="txtPhone">
			</div>
			<div class="form-group col-sm-12">
  				<label for="txtAddress">Address:</label>
  				<textarea class="form-control" id="txtAddress" required name="txtAddress" rows="6"></textarea>
			</div>
			<div class="form-group col-sm-3">
  				<label for="txtLandmark">Landmark:</label>
  				<input type="text" class="form-control" name="txtLandmark" id="txtLandmark">
			</div>
			<div class="form-group col-sm-2">
  				<label for="txtPincode">PIN Code:</label>
  				<input type="text" maxlength="6" onkeydown="return ( event.ctrlKey || event.altKey 
                    || (47<event.keyCode && event.keyCode<58 && event.shiftKey==false) 
                    || (95<event.keyCode && event.keyCode<106)
                    || (event.keyCode==8) || (event.keyCode==9) 
                    || (event.keyCode>34 && event.keyCode<40) 
                    || (event.keyCode==46) )" minlength="6" onblur="checkcod(this.value)" name="txtPincode" required class="form-control" id="txtPincode">
			</div>
			<div class="form-group col-sm-3">
  				<label for="phone">State:</label>
  				<select class="form-control" name="txtState">
  					<option value="Andaman and Nicobar">Andaman and Nicobar</option>
  					<option value="Andhra Pradesh">Andhra Pradesh</option>
  					<option value="Arunachal Pradesh">Arunachal Pradesh</option>
  					<option value="Assam">Assam</option>
  					<option value="Bihar">Bihar</option>
  					<option value="Chandigarh">Chandigarh</option>
  					<option value="Chhattisgarh">Chhattisgarh</option>
  					<option value="Dadra and Nagar Haveli">Dadra and Nagar Haveli</option>
  					<option value="Daman and Diu">Daman and Diu </option>
  					<option value="Delhi">Delhi</option>
  					<option value="Goa">Goa</option>
  					<option value="Gujarat">Gujarat</option>
  					<option value="Haryana">Haryana</option>
  					<option value="Himachal Pradesh">Himachal Pradesh</option>
  					<option value="Jammu and Kashmir">Jammu and Kashmir</option>
  					<option value="Jharkhand">Jharkhand</option>
  					<option value="Karnataka">Karnataka</option>
  					<option value="Kerala">Kerala</option>
  					<option value="Lakshadweep">Lakshadweep </option>
  					<option value="Madhya Pradesh">Madhya Pradesh</option>
  					<option value="Maharashtra">Maharashtra</option>
  					<option value="Manipur">Manipur</option>
  					<option value="Meghalaya">Meghalaya</option>
  					<option value="Mizoram">Mizoram</option>
  					<option value="Nagaland">Nagaland</option>
  					<option value="Odisha">Odisha</option>
  					<option value="Puducherry">Puducherry</option>
  					<option value="Punjab">Punjab</option>
  					<option value="Rajasthan">Rajasthan</option>
  					<option value="Sikkim">Sikkim</option>
  					<option value="Tamil Nadu">Tamil Nadu</option>
  					<option value="Telangana">Telangana</option>
  					<option value="Tripura">Tripura</option>
  					<option value="Uttar Pradesh">Uttar Pradesh</option>
  					<option value="Uttarakhand">Uttarakhand</option>
  					<option value="West Bengal">West Bengal</option>
  				</select>
          <input type="hidden" id="txtTotalAmount" name="txtTotalAmount" value="<?php echo getTotalAmount(); ?>">
			</div>
			<div class="form-group col-sm-4">
  				<label for="phone">Country:</label>
  				<input type="text" class="form-control" readonly="readonly" value="India (Service Available In India Only.)">
			</div>
        </div>
		<br/>
        <p align="right"><a class="btn btn-success text-right" role="button" data-toggle="collapse" data-parent="#accordion"  onclick="check();getCarttotal(document.getElementById('txtTotalAmount').value,document.getElementById('txtPincode').value);" id="nextStape" aria-expanded="false" aria-controls="itemSummery"> &nbsp;  &nbsp;  &nbsp;  &nbsp;  Next &nbsp;  &nbsp;  &nbsp;  &nbsp; </span></a></p>
      </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingTwo">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#itemSummery" aria-expanded="false" aria-controls="itemSummery">
          My Order Summary
        </a>
      </h4>
    </div>
    <div id="itemSummery" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
      <div class="panel-body">
        <div class="col-sm-12">
        	<div class="row">
        	<!-- table-->
          <table class="table table-hover table-condensed" style="max-width: 75%; margin-left: 15% ">
          <thead>
            <tr>
              <th>ITEM </th>
              <th>PRICE</th>
              <th>QTY</th>
              <th>AMOUNT</th>
            </tr>
          </thead>
          <tbody>
           <?php
          $value= ViewOrderSummery();
           ?>
          </tbody>
          </table>
          <h3 align="right">Total :</h3>
          <h4 align="right" Id="viewTotalAmount"><?php echo $value.".00 /-";?></h4><br/>
        	</div>
        <div class="row">
        <div class="col-sm-6">
        		<a role="button" data-toggle="collapse" data-parent="#accordion" href="#deliveryAddress" aria-expanded="true" aria-controls="deliveryAddress"><em><< Change Delivery Address</em></a>
        	</div>
        	<div class="col-sm-6">
        		<p align="right"><a class="btn btn-success text-right" role="button" data-toggle="collapse" data-parent="#accordion" href="#paymentMethod" aria-expanded="false" aria-controls="paymentMethod"> &nbsp;  &nbsp;  &nbsp;  &nbsp;  Next &nbsp;  &nbsp;  &nbsp;  &nbsp; </span></a></p>
        	</div>
        </div>
        	
        </div>
      </div>

    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingThree">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#paymentMethod" aria-expanded="false" aria-controls="paymentMethod">
          Payment Method
        </a>
      </h4>
    </div>
    <div id="paymentMethod" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
      <div class="panel-body">
        <div class="col-sm-12">
        <div class="row">
        	<div class="col-sm-9">
        		<div class="form-group">
    			<select class="form-control" name="txtMode">
    		    <option value="Online">Credit Card</option>
    				<option value="Online">Debit Card</option>
    				<option value="Online">All India ATM Card</option>
    				<option value="Online">Internet Banking</option>
    				<option value="Online">Mobile Wallet Payment</option>
    				<option value="Cash On Delivery" ID="COD">Cash On Delivery</option>
    			</select>
          <input type="hidden" name="txtCartId" value="<?php echo $_SESSION['uniqueSessionID']; ?>">
          <input type="hidden" name="txtDelivaryCharge" id="txtDelivaryCharge" value="">
  			</div>
        	</div>
        	<div class="col-sm-3">
          <?php
            if($value>0)
            {
              echo "<button type='submit' name='btnCompleteOrder' id='btnCompleteOrder' class='btn btn-success'>Complete Order</button>";
            }
            else
            {
              echo "<script>window.open('cart.php?name=Q2FydA==','_self');</script>";
            }
          ?>
        		
        	</div>
        </div>
        </div>
        <br><br><br><br>
        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#itemSummery" aria-expanded="true" aria-controls="itemSummery"><em><< Change Order Summary</em></a>
      </div>

    </div>
  </div>
</div>
<script>
	function check()
	{
		if(document.getElementById("txtPincode").value=="" || document.getElementById("txtAddress").value=="" || document.getElementById("txtPhone").value=="" || document.getElementById("txtEmail").value=="" || document.getElementById("txtName").value=="")
		{	
			alert("Pleace Enter The Form Properly");
      return false;
		}
		else
		{
			document.getElementById("nextStape").href="#itemSummery"; 
		}
	}
</script>
<script>
  function getCarttotal(amount,pincode)
  {
    if(pincode!=null)
    {
      //alert(amount);
     // alert(pincode);
     var charge=0;
     var total=0;
     var firstdig=pincode.substr(0, 3);
     //if(firstdig==700)
    // {
    //  charge=0;
    // }
    // else
    // {
      charge=50;
    // }
     total=parseInt(charge)+parseInt(amount);
     document.getElementById("viewTotalAmount").innerHTML="Amount : "+amount+".00 /-<br/> Delivery Charge :"+charge+".00 /-<br/>"+"Subtotal : "+total+".00/-";
     document.getElementById("txtDelivaryCharge").value=charge;
    }
  }
</script>
<script>
function checkcod(str)
{
if (str.length == 0) {
      //document.getElementById("txtHint").innerHTML = "";
     // document.getElementById("inputPassword").removeAttribute("readonly");
    // document.getElementById("ReinputPassword").removeAttribute("readonly");
    //  return;
  } else {
      var xmlhttp = new XMLHttpRequest();
      xmlhttp.onreadystatechange = function() {
          if (this.readyState == 4 && this.status == 200) {
              if(this.responseText=="N")
              {
                  document.getElementById("COD").setAttribute("disabled", "disabled");
                  //document.getElementById("btnCompleteOrder").setAttribute("disabled", "disabled");
              }
              else
              {
                
                  document.getElementById("COD").removeAttribute("disabled");
                 // document.getElementById("btnCompleteOrder").removeAttribute("disabled");
              }
          }
      };
      xmlhttp.open("GET", "checkcod.php?q=" + str, true);
      xmlhttp.send();
  }                
}
</script>
</form>
</div>
<?php
if(isset($_POST['btnCompleteOrder']))
{
  placeorder($_POST['txtName'],$_POST['txtEmail'],$_POST['txtPhone'],$_POST['txtAddress'],$_POST['txtLandmark'],$_POST['txtPincode'],$_POST['txtState'],$_POST['txtTotalAmount'],$_POST['txtCartId'],$_POST['txtDelivaryCharge'],$_POST['txtMode']);
}
include_once('include/footer.php');
?>