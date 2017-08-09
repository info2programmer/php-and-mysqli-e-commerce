<?php
include_once('include/header.php');
include_once('include/nav.php');
include_once('phplib/controler.php');
include_once('phplib/view.php');

if(isset($_GET['changeId']))
{
   // UPDATE `product_review` SET `publish`=1 WHERE `review_id`=
    global $con;
    $sql="UPDATE `product_review` SET `publish`=1 WHERE `review_id`='".$_GET['changeId']."' ";
    if($con->query($sql))
    {
        echo "<script>alert('Request Aprouved');</script>";
    }
}
else if(isset($_GET['deleteId']))
{
    global $con;
    $sql="DELETE FROM `product_review` WHERE `review_id`='".$_GET['deleteId']."' ";
    if($con->query($sql))
    {
        echo "<script>alert('Request Deleted');</script>";
    }
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
            <a href="review.php"><strong>Review</strong> Order</a>
        </li>
    </ul>
</div>

<div class="row">
    <div class="box col-md-12">
        <div class="box-inner homepage-box">
            <div class="box-header well">
                <h2><i class="glyphicon glyphicon-th"></i> Order For <strong>Review</strong></h2>

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
                    <li class="active"><a href="#info"><strong>Review</strong></a></li>
                </ul>

                <div id="myTabContent" class="tab-content">
                    <div class="tab-pane active" id="info">
                        <h3><strong>Review Details
                        </h3>
                      <table class="table table-striped table-bordered responsive">
                        <thead>
                        <tr>
                            <th>Review By</th>
                            <th>Review Title</th>
                            <th>Review Details</th>
                            <th>Rate</th>
                            <th>Product Image</th>
                            <th>Product Name</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php viewpendingreview(); ?>
                        </tbody>
                    </table>
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
