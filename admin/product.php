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
            <a href="product.php">Product</a>
        </li>
    </ul>
</div>

<div class="row">
    <div class="box col-md-12">
  <?php

  //Create New Product
    if(isset($_POST['btnCreateProduct']))
	 {
		if($_FILES['fileBanner']['size']>0 && strlen($_POST['txtProductName'])>0 && strlen($_POST['txtProductDescription'])>0 && strlen($_POST['txtMRP'])>0 && strlen($_POST['txtSell'])>0 && strlen($_POST['txtSKU'])>0)
		{
            $toogle=0;
	        $rand=md5(rand()).".jpg";
			move_uploaded_file($_FILES['fileBanner']['tmp_name'], "Upload/Products/".$rand) or die("opps multiple picture not uploaded");
			//UploadBanner($_POST['txtBannerURL'],$rand);
            if(isset($_POST['chkSpecial']))
            {
                $toogle=1;
            }

            //Insert Dtat To Product Table And Get Product Table
            $productID=createProduct($_POST['txtProductName'],$_POST['txtProductDescription'],$rand,$_POST['txtMRP'],$_POST['txtSell'],$toogle,$_POST['txtSKU']);

            //Insert Categories
            global $con;
            for($i=0; $i<count($_POST['ddlCategories']); $i++)
            {
                //Insert Data
                $sql="INSERT INTO `product_category`(`product_id`, `category_id`) VALUES ('".mysqli_real_escape_string($con,$productID)."','".mysqli_real_escape_string($con,$_POST['ddlCategories'][$i])."')";
                $con->query($sql);

            }

            //Insert Collections
                for($i=0; $i<count($_POST['ddlCollections']); $i++)
                {
                    //Insert Data
                    $sql="INSERT INTO `product_collection`(`product_id`, `collection_id`) VALUES ('".mysqli_real_escape_string($con,$productID)."','".mysqli_real_escape_string($con,$_POST['ddlCollections'][$i])."')";
                    $con->query($sql);

                }

		}
		else
		{
			echo " <div class='alert alert-danger'>
	                    <button type='button' class='close' data-dismiss='alert'>&times;</button>
	                    <strong>Oh snap!</strong> Change a few things up and try submitting again.
	                </div>";
		}
	 }

     //Delete Product
	 else if(isset($_GET['ProjectID']))
	 {
	 	$bgbanner="Upload/Products/".base64_decode($_GET['BannerImage']);
        unlink($bgbanner);
		DeleteProject(base64_decode($_GET['ProjectID']));
	 }

    // Get Product Details For Product Id 
     else if(isset($_GET['EditID']))
     {
        $EditDetails=ViewProductByID(base64_decode($_GET['EditID']));
     }


     //Edit Product 
     else if(isset($_POST['btnProductEdit']) )
     {
             if($_FILES['fileBanner']['size']>0 && strlen($_POST['txtProductName'])>0 && strlen($_POST['txtProductDescription'])>0 && strlen($_POST['txtMRP'])>0 && strlen($_POST['txtSell'])>0 && strlen($_POST['txtSKU'])>0)
        {
            
            // Delete Image
            $bgbanner="Upload/Products/".$_POST['Image'];
            unlink($bgbanner);

            //New Image Instance
            $rand=$_POST['Image'];
            move_uploaded_file($_FILES['fileBanner']['tmp_name'], "Upload/Products/".$rand) or die("opps multiple picture not uploaded");

            $toogle=0;
            if(isset($_POST['chkSpecial']))
            {
                $toogle=1;
            }
            //UpdateCategories(,$rand);
            EditProductDetails($_POST['txtProductName'],$_POST['txtProductDescription'],$rand,$_POST['txtMRP'],$_POST['txtSell'],$toogle,$_POST['Edit_ID'],$_POST['txtSKU']);

            //Delete Categories
            DeleteCategoriesByProductID($_POST['Edit_ID']);

             global $con;
            for($i=0; $i<count($_POST['ddlCategories']); $i++)
            {
                //Insert Data
                $sql="INSERT INTO `product_category`(`product_id`, `category_id`) VALUES ('".mysqli_real_escape_string($con,$_POST['Edit_ID'])."','".mysqli_real_escape_string($con,$_POST['ddlCategories'][$i])."')";
                $con->query($sql);

            }

            //Delete Collection
            DeleteCollectionByProductID($_POST['Edit_ID']);

            for($i=0; $i<count($_POST['ddlCollections']); $i++)
                {
                    //Insert Data
                    $sql="INSERT INTO `product_collection`(`product_id`, `collection_id`) VALUES ('".mysqli_real_escape_string($con,$_POST['Edit_ID'])."','".mysqli_real_escape_string($con,$_POST['ddlCollections'][$i])."')";
                    $con->query($sql);

                }

        }
        else if($_FILES['fileBanner']['size']==0 && strlen($_POST['txtProductName'])>0 && strlen($_POST['txtProductDescription'])>0 && strlen($_POST['txtMRP'])>0 && strlen($_POST['txtSell'])>0 && strlen($_POST['txtSell'])>0)
        {
             $toogle=0;
            if(isset($_POST['chkSpecial']))
            {
                $toogle=1;
            }
            //UpdateCategories(,$rand);
            EditProductDetails($_POST['txtProductName'],$_POST['txtProductDescription'],$_POST['Image'],$_POST['txtMRP'],$_POST['txtSell'],$toogle,$_POST['Edit_ID'],$_POST['txtSKU']);

            //Delete Categories
            DeleteCategoriesByProductID($_POST['Edit_ID']);

             global $con;
            for($i=0; $i<count($_POST['ddlCategories']); $i++)
            {
                //Insert Data
                $sql="INSERT INTO `product_category`(`product_id`, `category_id`) VALUES ('".mysqli_real_escape_string($con,$_POST['Edit_ID'])."','".mysqli_real_escape_string($con,$_POST['ddlCategories'][$i])."')";
                $con->query($sql);

            }

            //Delete Collection
            DeleteCollectionByProductID($_POST['Edit_ID']);

            for($i=0; $i<count($_POST['ddlCollections']); $i++)
                {
                    //Insert Data
                    $sql="INSERT INTO `product_collection`(`product_id`, `collection_id`) VALUES ('".mysqli_real_escape_string($con,$_POST['Edit_ID'])."','".mysqli_real_escape_string($con,$_POST['ddlCollections'][$i])."')";
                    $con->query($sql);

                }

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
                <h2><i class="glyphicon glyphicon-th"></i> Products Managment</h2>

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
                    <li class="active"><a href="#info">Upload New Products</a></li>
                    <li><a href="#custom">Manage Products</a></li>
                    
                </ul>

                <div id="myTabContent" class="tab-content">
                    <div class="tab-pane active" id="info">
                        <h3>Create Product
                            <small>Create New Product Here</small>
                        </h3>
                       <form role="form" action="product.php" enctype="multipart/form-data" method="post">
                        <div class="form-group">
                            <label for="exampleInputPassword1">Product Name </label>
                            <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Maang Tikka" name="txtProductName" value="<?php if(isset($_GET['EditID'])) {echo $EditDetails['product_name'];} ?>">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Categories </label>
                        <select id="selectError1" multiple class="form-control" name="ddlCategories[]" data-rel="chosen">
                            <?php if(isset($_GET['EditID'])) {viewcategoriesbyproductid(base64_decode($_GET['EditID']));} else {ViewCategoryDDl();} ?>
                        </select>
                        </div>

                        <div class="form-group">
                            <label for="exampleInputPassword1">Collections </label>
                        <select id="selectError1" multiple class="form-control" name="ddlCollections[]" data-rel="chosen">
                            <?php if(isset($_GET['EditID'])) {ViewCollectionbyproductid(base64_decode($_GET['EditID']));} else {ViewCollectionDDl();} ?>
                        </select>
                        </div>


                        <div class="form-group">
                            <label for="exampleInputFile">Product Description </label>
                            <textarea class="form-control"  placeholder="Beautiful Mini Chand Kundan Maangtika With Pearls For Wedding And Sangeet Functions Indian Traditional Ethnic Wear" name="txtProductDescription" rows="5"><?php if(isset($_GET['EditID'])) {echo $EditDetails['description'];} ?></textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputFile">Product Image </label>
                            <input type="file" name="fileBanner" id="exampleInputFile">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputFile">MRP </label>
                           <input type="text" class="form-control" id="exampleInputPassword1" placeholder="87.00" name="txtMRP" value="<?php if(isset($_GET['EditID'])) {echo $EditDetails['price'];} ?>">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputFile">Selling Price </label>
                           <input type="text" class="form-control" id="exampleInputPassword1" placeholder="80.00" name="txtSell" value="<?php if(isset($_GET['EditID'])) {echo $EditDetails['selling'];} ?>">
                        </div>

                        <div class="form-group">
                            <label for="exampleInputFile">Product SKU </label>
                           <input type="text" class="form-control" id="exampleInputPassword1" placeholder="N32" name="txtSKU" value="<?php if(isset($_GET['EditID'])) {echo $EditDetails['SKU'];} ?>">
                        </div>

                         <div class="form-group">
                            <label for="exampleInputFile">Special Offres </label>
                            <?php if(isset($_GET['EditID'])) {
                                if($EditDetails['special']==1)
                                {
                                    echo "<input type='checkbox' name='chkSpecial' checked> Check Here To Show This Product In Offerzone";
                                }
                                else
                                {
                                    echo "<input type='checkbox' name='chkSpecial'> Check Here To Show This Product In Offerzone";
                                }
                                }
                                else
                                {
                                    echo "<input type='checkbox' name='chkSpecial'> Check Here To Show This Product In Offerzone";
                                }
                            ?>
                        </div>
                        <div class="form-group">
                        <?php
                            if(isset($_GET['EditID']))
                            {
                                echo "
                                <input type='hidden' value='".base64_decode($_GET['EditID'])."' name='Edit_ID'>
                                <input type='hidden' value='".$EditDetails['image']."' name='Image'>
                                <button type='submit' name='btnProductEdit' class='btn btn-default'>Edit Product</button>";
                            }
                            else
                            {
                                echo "<button type='submit' name='btnCreateProduct' class='btn btn-default'>Create Product</button>";
                            }
                        ?>
                        </div>
                    </form>
                    </div>
                    <div class="tab-pane" id="custom">
                        <h3>Manage Product
                            <small>View All Products Or Delete Products</small>
                        </h3>
                          <table class="table table-striped table-bordered bootstrap-datatable datatable responsive">
    <thead>
    <tr>
        <th>Image </th>
        <th>Product Name</th>
        <th>MRP</th>
        <th>Selling Price</th>
        <th>Offer</th>
        <th>SKU</th>
        <th>Action</th>
    </tr>
    </thead>
    <tbody>
    <?php manageAllProduct(); ?>
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

    <!-- Ad, you can remove it -->
    <div class="row">
        <div class="col-md-9 col-lg-9 col-xs-9 hidden-xs">
            
        </div>
    </div>
    <!-- Ad ends -->

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
