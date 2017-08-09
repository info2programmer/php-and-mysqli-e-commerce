<?php
include_once('include/header.php');
include_once('include/nav.php');
include_once('phplib/controler.php');
include_once('phplib/view.php');
if(isset($_POST['btnChangeStatus']))
{
    changeorderstatusbydid($_POST['txtOrderId'],$_POST['txtStatus'],$_POST['cart_id'],$_POST['redirct']);
}
else if(strlen($_GET['orderid'])>0 && strlen($_GET['cart_id'])>0)
{
	//if block code goes here
}
else
{
	echo "<script>window.open('pendingorder.php','_self');</script>";
}

?>

        <div id="content" class="col-lg-10 col-sm-10">
            <!-- content starts -->
            <div>
    <ul class="breadcrumb">
        <li>
            <a href="dashboard.php">Home</a>
        </li>
        <li>
            <a href="pendingorder.php"><strong>#ORDERBALAS<?php echo base64_decode($_GET['orderid']); ?></strong> Order</a>
        </li>
    </ul>
</div>

<div class="row">
    <div class="box col-md-12">
        <div class="box-inner homepage-box">
            <div class="box-header well">
                <h2><i class="glyphicon glyphicon-th"></i> Order For <strong>#ORDERBALAS<?php echo base64_decode($_GET['orderid']); ?></strong></h2>

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
                    <li class="active"><a href="#info"><strong>#ORDERBALAS<?php echo base64_decode($_GET['orderid']); ?></strong></a></li>
                </ul>

                <div id="myTabContent" class="tab-content">
                    <div class="tab-pane active" id="info">
                        <h3><strong>Items Details
                        </h3>
                      <table class="table table-striped table-bordered responsive">
                        <thead>
                        <tr>
                            <th>Product Name</th>
                            <th>Product Code</th>
                            <th>Image</th>
                            <th>Price</th>
                            <th>Quantity</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php viewproductitembycart(base64_decode($_GET['cart_id'])); ?>
                        </tbody>
                    </table>

                     <h3><strong>Order Details
                        </h3>
                      <table class="table table-striped table-bordered responsive">
                        <thead>
                        <tr>
                            <th>Order By</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Address</th>
                            <th>Landmark</th>
                            <th>Pin</th>
                            <th>State</th>
                            <th>Amount</th>
                            <th>Delivery Charge</th>
                            <th>Total</th>
                            <th>Mode</th>
                            <th>Current Status</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php vieworderdetailsbyorderid(base64_decode($_GET['orderid'])); ?>
                        </tbody>
                    </table>
                    </div>
                </div>

                <form action="singleorder.php" method="post">
                    <p align="center">
                        <select name="txtStatus">
                          <option value="Confirmed">Confirmed</option>
                          <option value="Shipped">Shipped</option>
                          <option value="Ready To Shipped">Ready To Shipped</option>
                          <option value="Delivered">Delivered</option>
                        </select>

                        <input type="hidden" value="<?php echo base64_decode($_GET['orderid']); ?>" name="txtOrderId">
                        <input type="hidden" value="<?php echo $_GET['cart_id']; ?>" name="cart_id">
                        <input type="hidden" value="<?php echo $_GET['redirct']; ?>" name="redirct">

                        <button type="submit" name="btnChangeStatus" class='btn btn-success'> Change Status</button>
                    </p>
                </form>

                <?php
                if($_GET['redirct']=="order")
                {
                   echo "<p align='center'><a href='vieworder.php' class='btn btn-info'><< Back</a></p>";
                }
                else
                {
                    echo "<p align='center'><a href='pendingorder.php' class='btn btn-info'><< Back</a></p>";
                }
                ?>
                 
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
