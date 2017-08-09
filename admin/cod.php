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
            <a href="cod.php">COD Setup</a>
        </li>
    </ul>
</div>

<div class="row">
    <div class="box col-md-12">
    <?php
        if(isset($_POST['btnCteateLocation']))
        {
            if(strlen($_POST['txtLocation'])>0 &&strlen($_POST['txtPinCode'])>0 )
            {
                CreateCODlocation($_POST['txtPinCode'],$_POST['txtLocation']);
            }
            
            else
            {
             echo " <div class='alert alert-danger'>
                        <button type='button' class='close' data-dismiss='alert'>&times;</button>
                        <strong>Oh snap!</strong> Change a few things up and try submitting again.
                    </div>";
            }
        }
        else if(isset($_GET['LocationID']))
        {
            deleteCodLocation(base64_decode($_GET['LocationID']));
        }
    ?>
        <div class="box-inner homepage-box">
            <div class="box-header well">
                <h2><i class="glyphicon glyphicon-th"></i> Cash On Delivery Managment</h2>

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
                    <li class="active"><a href="#info">Create New Location</a></li>
                    <li><a href="#custom">Manage Location</a></li>
                    
                </ul>

                <div id="myTabContent" class="tab-content">
                    <div class="tab-pane active" id="info">
                        <h3>Create Location
                            <small>Add New Location Here</small>
                        </h3>
                       <form role="form" action="cod.php" enctype="multipart/form-data" method="post">
                        <div class="form-group">
                            <label for="exampleInputPassword1">Location Name </label>
                            <input type="text" class="form-control" id="exampleInputPassword1" placeholder="South Dum Dum , Ultodanga , Shyambazer" name="txtLocation" value="">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Pin Code </label>
                            <input type="text" class="form-control" id="exampleInputPassword1" placeholder="700080" name="txtPinCode" maxlength="6" minlength="6" value="">
                        </div>
                        <div class="form-group">
                        <button type='submit' name='btnCteateLocation' class='btn btn-default'>Create Location</button>
                        </div>
                    </form>
                    </div>
                    <div class="tab-pane" id="custom">
                        <h3>Manage Location
                            <small>View All Location Or Delete Location</small>
                        </h3>
                          <table class="table table-striped table-bordered bootstrap-datatable datatable responsive">
    <thead>
    <tr>
        <th>Pin Code</th>
        <th>Location</th>
        <th>Action</th>
    </tr>
    </thead>
    <tbody>
    <?php ViewCODlist(); ?>
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
