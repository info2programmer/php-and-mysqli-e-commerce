<?php
include_once('phplib/db_config.php');
include_once('phplib/controler.php');


if(isset($_POST['btnLogin']))
{
	adminlogin($_POST['txtUsername'],$_POST['txtPassword']);
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Welcome To Dashboard </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Charisma, a fully featured, responsive, HTML5, Bootstrap admin template.">
    <meta name="author" content="Muhammad Usman">

    <!-- The styles -->
    <link id="bs-css" href="css/bootstrap-cerulean.min.css" rel="stylesheet">

    <link href="css/charisma-app.css" rel="stylesheet">
    <link href='bower_components/fullcalendar/dist/fullcalendar.css' rel='stylesheet'>
    <link href='bower_components/fullcalendar/dist/fullcalendar.print.css' rel='stylesheet' media='print'>
    <link href='bower_components/chosen/chosen.min.css' rel='stylesheet'>
    <link href='bower_components/colorbox/example3/colorbox.css' rel='stylesheet'>
    <link href='bower_components/responsive-tables/responsive-tables.css' rel='stylesheet'>
    <link href='bower_components/bootstrap-tour/build/css/bootstrap-tour.min.css' rel='stylesheet'>
    <link href='css/jquery.noty.css' rel='stylesheet'>
    <link href='css/noty_theme_default.css' rel='stylesheet'>
    <link href='css/elfinder.min.css' rel='stylesheet'>
    <link href='css/elfinder.theme.css' rel='stylesheet'>
    <link href='css/jquery.iphone.toggle.css' rel='stylesheet'>
    <link href='css/uploadify.css' rel='stylesheet'>
    <link href='css/animate.min.css' rel='stylesheet'>

    <!-- jQuery -->
    <script src="bower_components/jquery/jquery.min.js"></script>

    <!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- The fav icon -->
    <link rel="shortcut icon" href="img/favicon.ico">

</head>

<body>
<div class="ch-container">
    <div class="row">
        
    <div class="row">
        <div class="col-md-12 center login-header">
            <h2>Welcome to Dashboard</h2>
        </div>
        <!--/span-->
    </div><!--/row-->

    <div class="row">
        <div class="well col-md-5 center login-box">
        <!-- This Code For dynamic Code For Dynamic Message -->
        <?php
        	if(isset($_GET['auth']))
        	{
        		echo "<div class='alert alert-danger'>
	                Enter Valid Username And Password
	            </div>";
        	}
            else if(isset($_GET['logout']))
            {
                echo "<div class='alert alert-success'>
                    Successfully Logout .
                </div>";
            }
        	else
        	{
	        	echo "<div class='alert alert-info'>
	                Please login with your Username and Password.
	            </div>";
        	}
        ?>
            <form class="form-horizontal" action="adminlogin.php" method="post">
                <fieldset>
                <?php
                	//this code for email and password change
                	if(isset($_GET['auth']))
                	{
                		echo "
                			 <div class='input-group has-error input-group-lg'>
		                        <span class='input-group-addon'><i class='glyphicon glyphicon-user red'></i></span>
		                        <input type='text' class='form-control' name='txtUsername' placeholder='Username'>
		                    </div>
		                    <div class='clearfix'></div><br>

		                    <div class='input-group has-error input-group-lg'>
		                        <span class='input-group-addon'><i class='glyphicon glyphicon-lock red'></i></span>
		                        <input type='password' class='form-control' name='txtPassword' placeholder='Password'>
		                    </div>
		                    <div class='clearfix'></div>

		                  
		                    <div class='clearfix'></div>

		                    <p class='center col-md-5'>
		                        <button type='submit' name='btnLogin' class='btn btn-primary'>Login</button>
		                    </p>	

                		";
                	}
                    else if(isset($_GET['logout']))
                    {
                        echo "
                             <div class='input-group has-success input-group-lg'>
                                <span class='input-group-addon'><i class='glyphicon glyphicon-user red'></i></span>
                                <input type='text' class='form-control' name='txtUsername' placeholder='Username'>
                            </div>
                            <div class='clearfix'></div><br>

                            <div class='input-group has-success input-group-lg'>
                                <span class='input-group-addon'><i class='glyphicon glyphicon-lock red'></i></span>
                                <input type='password' class='form-control' placeholder='Password' name='txtPassword'>
                            </div>
                            <div class='clearfix'></div>

                          
                            <div class='clearfix'></div>

                            <p class='center col-md-5'>
                                <button type='submit' name='btnLogin' class='btn btn-primary'>Login</button>
                            </p>    

                        ";
                    }
                	else
                	{
                		echo "
                			 <div class='input-group input-group-lg'>
		                        <span class='input-group-addon'><i class='glyphicon glyphicon-user red'></i></span>
		                        <input type='text' class='form-control' name='txtUsername' placeholder='Username'>
		                    </div>
		                    <div class='clearfix'></div><br>

		                    <div class='input-group input-group-lg'>
		                        <span class='input-group-addon'><i class='glyphicon glyphicon-lock red'></i></span>
		                        <input type='password' class='form-control' placeholder='Password' name='txtPassword'>
		                    </div>
		                    <div class='clearfix'></div>

		                   
		                    <div class='clearfix'></div>

		                    <p class='center col-md-5'>
		                        <button type='submit' name='btnLogin' class='btn btn-primary'>Login</button>
		                    </p>	

                		";
                	}
                ?>
                </fieldset>
            </form>
        </div>
        <!--/span-->
    </div><!--/row-->
</div><!--/fluid-row-->

</div><!--/.fluid-container-->

<!-- external javascript -->

<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

<!-- library for cookie management -->
<script src="js/jquery.cookie.js"></script>
<!-- calender plugin -->
<script src='bower_components/moment/min/moment.min.js'></script>
<script src='bower_components/fullcalendar/dist/fullcalendar.min.js'></script>
<!-- data table plugin -->
<script src='js/jquery.dataTables.min.js'></script>

<!-- select or dropdown enhancer -->
<script src="bower_components/chosen/chosen.jquery.min.js"></script>
<!-- plugin for gallery image view -->
<script src="bower_components/colorbox/jquery.colorbox-min.js"></script>
<!-- notification plugin -->
<script src="js/jquery.noty.js"></script>
<!-- library for making tables responsive -->
<script src="bower_components/responsive-tables/responsive-tables.js"></script>
<!-- tour plugin -->
<script src="bower_components/bootstrap-tour/build/js/bootstrap-tour.min.js"></script>
<!-- star rating plugin -->
<script src="js/jquery.raty.min.js"></script>
<!-- for iOS style toggle switch -->
<script src="js/jquery.iphone.toggle.js"></script>
<!-- autogrowing textarea plugin -->
<script src="js/jquery.autogrow-textarea.js"></script>
<!-- multiple file upload plugin -->
<script src="js/jquery.uploadify-3.1.min.js"></script>
<!-- history.js for cross-browser state change on ajax -->
<script src="js/jquery.history.js"></script>
<!-- application script for Charisma demo -->
<script src="js/charisma.js"></script>


</body>
</html>
