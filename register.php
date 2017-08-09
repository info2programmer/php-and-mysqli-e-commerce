<?php
include_once('include/header.php');
include_once('include/nav.php');
include_once('phplib/view.php');
include_once('phplib/controler.php');
?>

<!-- login -->
		<div class="w3_login">
			<h3>Register</h3>
			<div class="w3_login_module">
				<div class="module form-module">
				  <!--div class="toggle"><i class="fa fa-times fa-pencil"></i>
					<div class="tooltip">Click Me</div>
				  </div-->
				  <div class="form">
					<h2>Login to your account</h2>
					<form action="#" method="post">
					  <input type="text" name="Full Name" placeholder="Full Name" required="">
					  <input type="email" name="Email" placeholder="Email Address" required="">
					  <input type="text" name="Phone" placeholder="Phone Number" required="">
					  <input type="password" name="Password" placeholder="Password" required="">
					  <input type="submit" value="Register">
					</form>
				  </div>
				  <div class="form" action="register.php">
				  <?php
				  	if(isset($_POST['btnSubmit']))
				  	{
				  		RegisterNewUser($_POST['txtEmail'],$_POST['txtFullName'],$_POST['txtPhoneNumber'],$_POST['txtPassword'],$_POST['txtRepassword']);
				  	}
				  ?>
					<h2>Create an account</h2>
					<form action="register.php" method="post">
					  <input type="text" name="txtFullName" placeholder="Full Name" required="">
					 <input type="email" name="txtEmail" placeholder="Email Address" required="">
					  <input type="text" name="txtPhoneNumber" placeholder="Phone Number" required="">
					  <input type="password" name="txtPassword" placeholder="Password" required="">
					  <input type="password" name="txtRepassword" placeholder="Re Type Password" required="">
					  <input type="submit" value="Register" name="btnSubmit">
					</form>
				  </div>
				  <div class="cta"><a href="login.php">Already Registerd ? Login Here</a></div>
				</div>
			</div>
		</div>
<!-- //login -->

<?php
include_once('include/footer.php');
?>