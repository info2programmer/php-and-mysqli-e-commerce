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
            <a href="collection.php">Collection</a>
        </li>
    </ul>
</div>

<div class="row">
    <div class="box col-md-12">
  <?php
    if(isset($_POST['btnCreateCollection']))
	 {
		if($_FILES['fileBanner']['size']>0 && strlen($_POST['txtCollection'])>0 && $_FILES['fileThamb']['size']>0)
		{
	        $rand=md5(rand()).".jpg";
			move_uploaded_file($_FILES['fileBanner']['tmp_name'], "Upload/Collection/Banner/".$rand) or die("opps multiple picture not uploaded");

            $rand1=md5(rand()).".jpg";
            move_uploaded_file($_FILES['fileThamb']['tmp_name'], "Upload/Collection/Thamble/".$rand1) or die("opps multiple picture not uploaded");

            createcollection($_POST['txtCollection'],$rand,$rand1,$_POST['txtDescription']);
			//UploadBanner($_POST['txtBannerURL'],$rand);
		}
		else
		{
		echo "<div class='alert alert-danger'>
                <button type='button' class='close' data-dismiss='alert'>&times;</button>
                <strong>Oh snap!</strong> Change a few things up and try submitting again.
                </div>";
		}
	 }
	 else if(isset($_GET['delete_id']))
	 {
        $bgbanner="Upload/Collection/Banner/".base64_decode($_GET['bannerid']);
	 	$bgthamb="Upload/Collection/Thamble/".base64_decode($_GET['thamble']);
        unlink($bgbanner);
        unlink($bgthamb);
		deletecollection($_GET['delete_id']);
	 }
	 ?>
        <div class="box-inner homepage-box">
            <div class="box-header well">
                <h2><i class="glyphicon glyphicon-th"></i> Collection Managment</h2>

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
                    <li class="active"><a href="#info">Create New Collection</a></li>
                    <li><a href="#custom">Manage Collection</a></li>
                    
                </ul>

                <div id="myTabContent" class="tab-content">
                    <div class="tab-pane active" id="info">
                        <h3>Create Collection
                            <small>Upload New Collection Here</small>
                        </h3>
                       <form role="form" action="collection.php" enctype="multipart/form-data" method="post">
	                    <div class="form-group">
	                        <label for="exampleInputPassword1">Collection Name</label>
	                        <input type="text" class="form-control" id="exampleInputPassword1" placeholder="WEDDING COLLECTION" name="txtCollection">
	                    </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Collection Description</label>
                            <!--input type="text" class="form-control" id="exampleInputPassword1" placeholder="WEDDING COLLECTION" name="txtCollection"-->
                            <textarea class="form-control" name="txtDescription" placeholder="Set in 24 Kt Yellow Gold (2.32 gms) with Diamonds (0.14 Ct, IJ-SI) Certified by SGL" rows="3"></textarea>
                        </div>
	                    <div class="form-group">
	                        <label for="exampleInputFile">Collection Banner</label>
	                        <input type="file" name="fileBanner" id="exampleInputFile">
	                    </div>
                        <div class="form-group">
                            <label for="exampleInputFile">Collection Thumble</label>
                            <input type="file" name="fileThamb" id="exampleInputFile">
                        </div>
	                    <button type="submit" name="btnCreateCollection" class="btn btn-default">Upload</button>
                	</form>
                	<br/>
                    </div>
                    <div class="tab-pane" id="custom">
                        <h3>Manage Collections
                            <small>View All Collection Or Delete Collections</small>
                        </h3>
                          <table class="table table-striped table-bordered bootstrap-datatable datatable responsive">
    <thead>
    <tr>
        <th>Banner Image </th>
        <th>Thumble Image</th>
        <th>Collection Name</th>
        <th>Actions</th>
    </tr>
    </thead>
    <tbody>
    <?php manageallcollection(); ?>
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
