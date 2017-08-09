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
            <a href="productimage.php?ProductID=<?php echo $_GET['ProductID']; ?>">Image Edit</a>
        </li>
    </ul>
</div>

<div class="row">
    <div class="box col-md-12">
    <?php
    if(isset($_POST['btnUploadImage']))
     {
        global $con;
        $Product_Id=$_POST['txtProductId'];
        if($_FILES['fileImages']['size']>0 )
        {
           for($i=0; $i<count($_FILES['fileImages']['name']); $i++)
                {
                 $randChar=md5(rand()).".jpg";
                    move_uploaded_file($_FILES['fileImages']['tmp_name'][$i], "Upload/ProductImage/".$randChar) or die("opps multiple picture not uploaded");
                           $query="INSERT INTO `balas_productimage`(`image_path`, `product_id`) VALUES ('".$randChar."','".$Product_Id."')";
                           if($con->query($query))
                           {
                            $count=$i+1;
                                  echo "<div class='alert alert-success'>
                                            <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                                                <span aria-hidden='true'>&times;</span>
                                            </button>
                                            <strong>Success!</strong> Iamge ".$count." Hasbeen  Updated!
                                          </div>";
                           }
                    else
                    {
                         echo "<div class='alert alert-denger'>
                                            <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                                                <span aria-hidden='true'>&times;</span>
                                            </button>
                                            <strong>Error!</strong> Iamge Not Save!
                                          </div>";
                    }
                                 
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
        
    ?>
          <div class="box-inner homepage-box">
            <div class="box-header well">
                <h2><i class="glyphicon glyphicon-th"></i> Image Edit</h2>

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
                    <li class="active"><a href="#info">Add Image To Product</a></li>
                    
                    
                </ul>

                <div id="myTabContent" class="tab-content">
                    <div class="tab-pane active" id="info">
                        <h3>Create Images
                            <small>Upload New Image Here</small>
                        </h3>
                       <form role="form" action="productimage.php?ProductID=<?php echo $_GET['ProductID']; ?>" enctype="multipart/form-data" method="post">
	                    	<div class="form-group">
	                        <label for="exampleInputFile">Select Multiple Image</label>
	                        <input type="file" multiple name="fileImages[]" id="exampleInputFile">
	                       </div>
                           <input type="hidden" name="txtProductId" value="<?php echo base64_decode($_GET['ProductID']); ?>">
	                    <button type="submit" name="btnUploadImage" class="btn btn-default">Upload</button>
                	</form>
                	<br/>
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
