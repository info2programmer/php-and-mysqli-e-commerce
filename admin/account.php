<?php
include_once('include/header.php');
include_once('include/nav.php');
include_once('phplib/controler.php');
include_once('phplib/view.php');

?>

        <div id="content" class="col-lg-10 col-sm-10">
            <!-- content starts -->
            <div>
    <ul class="breadcrumb">
        <li>
            <a href="dashboard.php">Home</a>
        </li>
        <li>
            <a href="account.php">Account Managment</a>
        </li>
    </ul>
</div>

<div class="row">
    <div class="box col-md-12">
  <?php
    if(isset($_POST['btnCreateAccount']))
	 {
		if(strlen($_POST['txtPassword'])>0 && strlen($_POST['txtRepassword'])>0 && strlen($_POST['txtUserName'])>0)
		{
	       if($_POST['txtPassword']!=$_POST['txtRepassword'])
           {
            echo "<div class='alert alert-danger'>
                    <button type='button' class='close' data-dismiss='alert'>&times;</button>
                     <strong>Oh snap!</strong> Password Not Match.
                </div>";
           }
           else
           {
                createnewaccount($_POST['txtUserName'],$_POST['txtPassword']);
           }
		}
		else
		{
			echo "<div class='alert alert-danger'>
	                <button type='button' class='close' data-dismiss='alert'>&times;</button>
	                <strong>Oh snap!</strong> Change a few things up and try submitting again.
	            </div>";
		}
	 }
	 else if(isset($_GET['admin_id']))
	 {
		deleteAccount($_GET['admin_id']);
	 }
	 ?>
        <div class="box-inner homepage-box">
            <div class="box-header well">
                <h2><i class="glyphicon glyphicon-th"></i> Account Managment</h2>

                <div class="box-icon">
                    <a href="#" class="btn btn-setting btn-round btn-default"><i
                            class="glyphicon glyphicon-cog"></i></a>
                    <a href="#" class="btn btn-minimize btn-round btn-default"><i
                            class="glyphicon glyphicon-chevron-up"></i></a>
                    <a href="#" class="btn btn-close btn-round btn-default"><i
                            class="glyphicon glyphicon-remove"></i></a>
                </div>
            </div>
            <div class="box-content">
                <ul class="nav nav-tabs" id="myTab">
                    <li class="active"><a href="#info">New Account</a></li>
                    <li><a href="#custom">Manage Account</a></li>
                    
                </ul>

                <script>
                    function checkusername(str)
                    {
                      if (str.length == 0) {
                            document.getElementById("txtHint").innerHTML = "";
                            document.getElementById("inputPassword").removeAttribute("readonly");
                           document.getElementById("ReinputPassword").removeAttribute("readonly");
                            return;
                        } else {
                            var xmlhttp = new XMLHttpRequest();
                            xmlhttp.onreadystatechange = function() {
                                if (this.readyState == 4 && this.status == 200) {
                                    document.getElementById("txtHint").innerHTML = this.responseText;
                                    if(this.responseText=="<font color='red'><i class='glyphicon glyphicon-remove'></i> <em>email already exist</em></font>")
                                    {
                                        document.getElementById("inputPassword").setAttribute("readonly", "readonly");
                                        document.getElementById("ReinputPassword").setAttribute("readonly", "readonly");
                                        document.getElementById("btnCreateAccount").setAttribute("disabled", "disabled");
                                    }
                                    else
                                    {
                                        document.getElementById("inputPassword").removeAttribute("readonly");
                                        document.getElementById("ReinputPassword").removeAttribute("readonly");
                                        document.getElementById("btnCreateAccount").removeAttribute("disabled");
                                    }
                                }
                            };
                            xmlhttp.open("GET", "checkemail.php?q=" + str, true);
                            xmlhttp.send();
                        }                 
                     }

                     function checkpassword()
                     {
                        var a=document.getElementById("inputPassword").value;
                        var b=document.getElementById("ReinputPassword").value;

                        if(a.length != 0 && b.length != 0)
                        {
                        if(a!=b)
                        {
                            document.getElementById("txtPasswordStatus").innerHTML="<font color='red'><i class='glyphicon glyphicon-remove'></i> <em>Password Not Match</em></font>";
                            document.getElementById("btnCreateAccount").setAttribute("disabled", "disabled");
                        }
                        else
                        {
                             document.getElementById("txtPasswordStatus").innerHTML="<font color='green'><i class='glyphicon glyphicon-ok'></i><em>Matched</em></font>";
                            document.getElementById("btnCreateAccount").removeAttribute("disabled");
                        }
                        }
                        else
                        {
                            document.getElementById("txtPasswordStatus").innerHTML="";
                        }
                     }
                </script>

                <div id="myTabContent" class="tab-content">
                    <div class="tab-pane active" id="info">
                        <h3>Create Account
                            <small>Create New Account</small>
                        </h3>
                       <form role="form" action="account.php" enctype="multipart/form-data" method="post">

	                    <div class="form-group">
	                        <label for="iputUsername">User Name/Email : </label>
	                        <input type="text" class="form-control" id="iputUsername" placeholder="hello@youradmin.com" name="txtUserName" onkeyup="checkusername(this.value)">
                            <span id="txtHint"></span>
	                    </div>

	                    <div class="form-group">
	                        <label for="inputPassword">Password : </label>
	                        <input type="password" class="form-control" id="inputPassword" placeholder="Password" name="txtPassword">
	                    </div>

                        <div class="form-group">
                            <label for="ReinputPassword">Re-type Password : </label>
                            <input type="password" class="form-control" id="ReinputPassword" placeholder="Password" name="txtRepassword" onkeyup="checkpassword()">
                            <span id="txtPasswordStatus"></span>
                        </div>

	                    <button type="submit" name="btnCreateAccount" Id="btnCreateAccount" class="btn btn-default">Create Account</button>
                	</form>
                	<br/>
                    </div>
                    <div class="tab-pane" id="custom">
                        <h3>Manage Banner
                            <small>View All Banners Or Delete Banners</small>
                        </h3>
                          <table class="table table-striped table-bordered bootstrap-datatable datatable responsive">
    <thead>
    <tr>
        <th>Image </th>
        <th>Actions</th>
    </tr>
    </thead>
    <tbody>
    <?php ViewAccountHistory(); ?>
    </tbody>
    </table>
    <script type="text/javascript">
    var elems = document.getElementsByClassName('saikat');
    var confirmIt = function (e) {
        if (!confirm('Are you sure?')) e.preventDefault();
    };
    for (var i = 0, l = elems.length; i < l; i++) {
        elems[i].addEventListener('click', confirmIt, false);
    }
</script>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div-->
    <!--/span-->
</div><!--/row-->
    <!-- content ends -->
    </div><!--/#content.col-md-0-->
</div><!--/fluid-row-->
    <hr>

    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
         aria-hidden="true">

        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">×</button>
                    <h3>Settings</h3>
                </div>
                <div class="modal-body">
                    <p>Here settings can be configured...</p>
                </div>
                <div class="modal-footer">
                    <a href="#" class="btn btn-default" data-dismiss="modal">Close</a>
                    <a href="#" class="btn btn-primary" data-dismiss="modal">Save changes</a>
                </div>
            </div>
        </div>
    </div>
<?php
include_once('include/footer.php');
?>
