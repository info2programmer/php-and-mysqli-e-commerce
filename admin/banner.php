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
            <a href="banner.php">Banner</a>
        </li>
    </ul>
</div>

<div class="row">
    <div class="box col-md-12">
  <?php
    if(isset($_POST['btnBannerUpload']))
	 {
		if($_FILES['fileBanner']['size']>0 && strlen($_POST['txtBannerURL'])>0)
		{
	        $rand=md5(rand()).".jpg";
			move_uploaded_file($_FILES['fileBanner']['tmp_name'], "Upload/Banner/".$rand) or die("opps multiple picture not uploaded");
			UploadBanner($_POST['txtBannerURL'],$rand);
		}
		else
		{
		echo "<div class='alert alert-danger'>
                <button type='button' class='close' data-dismiss='alert'>&times;</button>
                <strong>Oh snap!</strong> Change a few things up and try submitting again.
                </div>";
		}
	 }
	 else if(isset($_GET['bannerID']))
	 {
	 	$bgbanner="Upload/Banner/".$_GET['banner'];
        unlink($bgbanner);
		deleteBanner($_GET['bannerID']);
	 }
	 ?>
        <div class="box-inner homepage-box">
            <div class="box-header well">
                <h2><i class="glyphicon glyphicon-th"></i> Banners Managment</h2>

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
                    <li class="active"><a href="#info">Upload New Banner</a></li>
                    <li><a href="#custom">Manage Banner</a></li>
                    
                </ul>

                <div id="myTabContent" class="tab-content">
                    <div class="tab-pane active" id="info">
                        <h3>Create Banner
                            <small>Upload New Banner Here</small>
                        </h3>
                       <form role="form" action="banner.php" enctype="multipart/form-data" method="post">
	                    <div class="form-group">
	                        <label for="exampleInputPassword1">Banner URL</label>
	                        <input type="text" class="form-control" id="exampleInputPassword1" placeholder="http://mydomain.com/user?getvalue" name="txtBannerURL">
	                    </div>
	                    <div class="form-group">
	                        <label for="exampleInputFile">Banner Image</label>
	                        <input type="file" name="fileBanner" id="exampleInputFile">
	                    </div>
	                    <button type="submit" name="btnBannerUpload" class="btn btn-default">Upload</button>
	                    <!--div class="checkbox">
	                        <label>
	                            <input type="checkbox"> Check me out
	                        </label>
	                    </div-->
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
        <th>URL</th>
        <th>Actions</th>
    </tr>
    </thead>
    <tbody>
    <?php manageAllBanner(); ?>
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
