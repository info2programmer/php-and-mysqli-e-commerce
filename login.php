<?php
include_once('include/header.php');
include_once('include/nav.php');
include_once('phplib/view.php');
include_once('phplib/controler.php');
?>
<!-- //header -->


<!-- login -->
		<div class="w3_login">
			<h3>Login</h3>
			<div class="w3_login_module">
				<div class="module form-module">
				  <?php
				  if(isset($_POST['btnLogin']))
				  {
				  	checklogin($_POST['txtEmail'],$_POST['txtPassword'],$_POST['txtredirurl']);
				  }
				  ?>
				  <div class="form">
					<h2>Login to your account</h2>
					<form action="login.php?name=VXNlciBMb2dpbg==" method="post">
					  <input type="text" name="txtEmail" placeholder="Email" required=" ">
					  <input type="password" name="txtPassword" placeholder="Password" required=" ">
					  <input type="submit" value="Login" name="btnLogin">
					</form>
				  </div>
				  <div class="form">
					<h2>Login to your account</h2>
					<form action="login.php?name=VXNlciBMb2dpbg==" method="post">
					  <input type="text" name="txtEmail" placeholder="Username" required=" ">
					  <input type="password" name="txtPassword" placeholder="Password" required=" ">
					  <input type="hidden" name="txtredirurl" value="<?php if(isset($_GET['redirurl'])){echo $_GET['redirurl']; } ?>">
					  <input type="submit" value="Login"  name="btnLogin">
					</form>
				  </div>
				  <div class="cta"><a href="register.php">Register A New Account</a></div>
				</div>
			</div>
		</div>
<!-- //login -->
<?php
include_once('include/footer.php');
?>