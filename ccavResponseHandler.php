<?php include('Crypto.php')?>
<?php
session_start();
include_once('phplib/db_config.php');
global $con;

	error_reporting(0);
	
	$workingKey='';		//Working Key should be provided here.
	$encResponse=$_POST["encResp"];			//This is the response sent by the CCAvenue Server
	$rcvdString=decrypt($encResponse,$workingKey);		//Crypto Decryption used as per the specified working key.
	$order_status="";
	$order_id="";
	$txtEmail="";
	$decryptValues=explode('&', $rcvdString);
	$dataSize=sizeof($decryptValues);
	echo "<center>";

	for($i = 0; $i < $dataSize; $i++) 
	{
		$information=explode('=',$decryptValues[$i]);

		if($i==3)	$order_status=$information[1];
		if($i==0)	$order_id=$information[1];
		if($i==18)	$txtEmail=$information[1];
	}

	if($order_status==="Success")
	{
		$value=str_replace("#ORDBALAS","",$order_id);
		$sql="UPDATE `balas_order` SET `payment`=1 WHERE `order_id`='".$value."' ";
		$con->query($sql);
		unset($_SESSION['uniqueSessionID']);

		$to = 'contact.balaskolkata@gmail.com';
		$subject = 'New Order From Website-- Order Id-'.$value;
		$from = 'order@balaskolkata.com';
		 
		// To send HTML mail, the Content-type header must be set
		$headers  = 'MIME-Version: 1.0' . "\r\n";
		$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
		 
		// Create email headers
		$headers .= 'From: '.$from."\r\n".
		    'Reply-To: '.$from."\r\n" .
		    'X-Mailer: PHP/' . phpversion();
		 
		// Compose a simple HTML email message
		$message = '<html><body>';
		$message .= '<h1 style="color:#f40;">You Have A New Order From Website</h1>';
		$message .= '<p style="color:#080;font-size:18px;">Order Id- '.$order_id;
		$message .= '</p></body></html>';
		 
		// Sending email
		if(mail($to, $subject, $message, $headers)){
		    echo 'Your mail has been sent successfully.';
		} else{
		    echo 'Unable to send email. Please try again.';
		}

		// this section send mail to customer
		$mailbody="Dear Customer(s),\n
		Thank you for placing an order at www.balaskolkata.com \n
		Your order no is ".$OrderId."\n
		Please log in to www.balaskolkata.com to track your order status.\n
		Looking forward to serve you again.\n\n

		Thanks & Regards,\n
		Balas Team\n
		Kolkata\n
		(+91) 91634 88628\n
		Look Good! Do Good.'
		";

		$by ='From: orders@balaskolkata.com'."\r\n".
         'Reply-To: orders@balaskolkata.com'."\r\n" .
          'X-Mailer: PHP/' . phpversion();

		mail($txtEmail, "Thank you for placing an order at www.balaskolkata.com", $mailbody, $by);

		echo "<script>window.open('payment_success.php','_self');</script>";
		
	}
	else if($order_status==="Aborted")
	{
		echo "<br>Thank you for shopping with us.We will keep you posted regarding the status of your order through e-mail";
	echo "<script>window.open('payment_error.php','_self');</script>";
	}
	else if($order_status==="Failure")
	{
		echo "<br>Thank you for shopping with us.However,the transaction has been declined.";
		echo "<script>window.open('payment_error.php','_self');</script>";
	}
	else
	{
		echo "<br>Security Error. Illegal access detected";
		echo "<script>window.open('payment_error.php','_self');</script>";
	
	}

	echo "<br><br>";

	echo "<table cellspacing=4 cellpadding=4>";
	for($i = 0; $i < $dataSize; $i++) 
	{
		$information=explode('=',$decryptValues[$i]);
	    	echo '<tr><td>'.$information[0].'</td><td>'.$information[1].'</td></tr>';
	}

	echo "</table><br>";
	echo "</center>";
?>
