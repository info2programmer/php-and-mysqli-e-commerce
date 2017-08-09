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
            <a href="categories.php">Categories</a>
        </li>
    </ul>
</div>

<div class="row">
    <div class="box col-md-12">
  <?php
    if(isset($_POST['btnUploadCategories']))
	 {
		if($_FILES['fileBanner']['size']>0 && strlen($_POST['txtCategoryName'])>0)
		{
	        $rand=md5(rand()).".jpg";
			move_uploaded_file($_FILES['fileBanner']['tmp_name'], "Upload/Categories/".$rand) or die("opps multiple picture not uploaded");
            createCategory($_POST['txtCategoryName'],$rand);
		}
		else
		{
			echo " <div class='alert alert-danger'>
	                    <button type='button' class='close' data-dismiss='alert'>&times;</button>
	                    <strong>Oh snap!</strong> Change a few things up and try submitting again.
	                </div>";
		}
	 }
	 else if(isset($_GET['bannerID']))
	 {
        $bgbanner="Upload/Categories/".$_GET['banner'];
        unlink($bgbanner);
		deleteCategories($_GET['bannerID']);
	 }
     else if(isset($_POST['btnCategoryEdit']))
     {
        if($_FILES['fileBanner']['size']>0 && strlen($_POST['txtCategoryName'])>0)
        {

            // Delete Image
            $bgbanner="Upload/Categories/".$_POST['Image'];
            unlink($bgbanner);

            //New Image Instance
            $rand=md5(rand()).".jpg";
            move_uploaded_file($_FILES['fileBanner']['tmp_name'], "Upload/Categories/".$rand) or die("opps multiple picture not uploaded");

            //UpdateCategories(,$rand);
            UpdateCategories($_POST['Edit_ID'],$_POST['txtCategoryName'],$rand);
        }
        else if(strlen($_POST['txtCategoryName'])>0)
        {
            $rand=null;
            UpdateCategories($_POST['Edit_ID'],$_POST['txtCategoryName'],$rand);
        }
     }
	 ?>
        <div class="box-inner homepage-box">
            <div class="box-header well">
                <h2><i class="glyphicon glyphicon-th"></i> Categories Managment</h2>

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
                    <li class="active"><a href="#info">New Categories</a></li>
                    <li><a href="#custom">Manage Categories</a></li>
                    
                </ul>

                <div id="myTabContent" class="tab-content">
                    <div class="tab-pane active" id="info">
                        <h3>Create Category
                            <small>Add New Category</small>
                        </h3>


                       <form role="form" action="categories.php" enctype="multipart/form-data" method="post">
	                    <div class="form-group">
	                        <label for="exampleInputPassword1">Categoriy Name</label>
	                        <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Ring,Chain" name="txtCategoryName" value="<?php if(isset($_GET['EditID'])){ echo base64_decode($_GET['Name']);} ?>">
	                    </div>
	                    <div class="form-group">
	                        <label for="exampleInputFile">Banner Image</label>
	                        <input type="file" name="fileBanner" id="exampleInputFile">
	                    </div>
                        <?php
                            if(isset($_GET['EditID']))
                            {

                                echo "
                                <input type='hidden' value='".base64_decode($_GET['EditID'])."' name='Edit_ID'>
                                <input type='hidden' value='".base64_decode($_GET['banner'])."' name='Image'>
                                <button type='submit' name='btnCategoryEdit' class='btn btn-default'>Edit Category</button>";
                            }
                            else
                            {
                                echo "<button type='submit' name='btnUploadCategories' class='btn btn-default'>Create Category</button>";
                            }
                        ?>
	                    
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
        <th>Category Name</th>
        <th>Actions</th>
    </tr>
    </thead>
    <tbody>
    <?php manageCategories(); ?>
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
