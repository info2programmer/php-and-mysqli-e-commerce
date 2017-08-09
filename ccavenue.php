<?php
include ('phplib/db_config.php');
session_start();
if(isset($_GET['oderid']) && strlen($_GET['oderid'])>0)
{
	$order_id=str_replace("#ORDBALAS","",base64_decode($_GET['oderid']));
	global $con;
	$sql="SELECT * FROM `balas_order` WHERE `order_id`='".$order_id."'";
	$result = $con->query($sql);
	if ($result->num_rows > 0) {
		$var = $result->fetch_assoc();
		$totalamount=$var['totalamount']+$var['deliverycharge'];
	}
	else
	{
		echo "<script>window.open('checkout.php','_self');</script>";
	}
}
else
{
	echo "<script>window.open('checkout.php','_self');</script>";
}
?>

<html>
<head>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script>
	window.onload = function() {
		var d = new Date().getTime();
		document.getElementById("tid").value = d;
	};
</script>
<title>Pay Online Now</title>
</head>
<body>
<h1 align="center">"You are redirected to secured CCAvenue page to complete the payment.
There you can choose from multiple online payment methods like Credit Card, Debit Card, Net Banking, Paytm Wallet etc. Thanks."</h1>
	<form method="post" name="customerData" action="ccavRequestHandler.php">
		<table width="40%" height="100" border='0' align="center"><caption><font size="4" color="blue"></font></caption></table>
			<table width="40%" height="100" border='0' align="center">
				<tr>
					
				</tr>
				<tr>
					
				</tr>
				<tr>
					<td><input type="hidden" name="tid" id="tid" readonly /></td>
				</tr>
				<tr>
					<td><input type="hidden" name="merchant_id" value=""/></td>
				</tr>
				<tr>
					<td><input type="hidden" name="order_id" value="<?php echo "#ORDBALAS".$var['order_id']; ?>"/></td>
				</tr>
				<tr>
					<td><input type="hidden" name="amount" value="<?php echo $totalamount.".00"; ?>"/></td>
				</tr>
				<tr>
					<td><input type="hidden" name="currency" value="INR"/></td>
				</tr>
				<tr>
					<td><input type="hidden" name="redirect_url" value="http://balaskolkata.com/ccavResponseHandler.php"/></td>
				</tr>
			 	<tr>
			 		<td><input type="hidden" name="cancel_url" value="http://balaskolkata.com/ccavResponseHandler.php"/></td>
			 	</tr>
			 	<tr>
					<td><input type="hidden" name="language" value="EN"/></td>
				</tr>
		        <tr>
		        	<td><input type="hidden" name="billing_name" value="<?php echo $var['order_by']; ?>"/></td>
		        </tr>
		        <tr>
		        	<td><input type="hidden" name="billing_address" value="<?php echo $var['address']; ?>"/></td>
		        </tr>
		        <tr>
		        	<td><input type="hidden" name="billing_city" value=""/></td>
		        </tr>
		        <tr>
		        	<td><input type="hidden" name="billing_state" value="<?php echo $var['state']; ?>"/></td>
		        </tr>
		        <tr>
		        	<td><input type="hidden" name="billing_zip" value="<?php echo $var['pin']; ?>"/></td>
		        </tr>
		        <tr>
		        	<td><input type="hidden" name="billing_country" value="India"/></td>
		        </tr>
		        <tr>
		        	<td><input type="hidden" name="billing_tel" value="<?php echo $var['phone']; ?>"/></td>
		        </tr>
		        <tr>
		        	<td><input type="hidden" name="billing_email" value="<?php echo $var['email']; ?>"/></td>
		        </tr>
		        <tr>
		        	<td><input type="hidden" name="delivery_name" value="<?php echo $var['order_by']; ?>"/></td>
		        </tr>
		        <tr>
		        	<td><input type="hidden" name="delivery_address" value="<?php echo $var['address']; ?>"/></td>
		        </tr>
		        <tr>
		        	<td><input type="hidden" name="delivery_city" value=""/></td>
		        </tr>
		        <tr>
		        	<td><input type="hidden" name="delivery_state" value="<?php echo $var['state']; ?>"/></td>
		        </tr>
		        <tr>
		        	<td><input type="hidden" name="delivery_zip" value="<?php echo $var['pin']; ?>"/></td>
		        </tr>
		        <tr>
		        	<td><input type="hidden" name="delivery_country" value="India"/></td>
		        </tr>
		        <tr>
		        	<td><input type="hidden" name="delivery_tel" value="<?php echo $var['phone']; ?>"/></td>
		        </tr>
		        <tr>
		        	<td></td><td align="Center"><INPUT TYPE="submit" class="btn btn-success btn-lg" value="Confirm"></td>
		        </tr>
	      	</table>
	      </form>
	      <script language='javascript'>document.customerData.submit();</script>
	</body>
	
</html>