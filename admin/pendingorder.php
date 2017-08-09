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
            <a href="pendingorder.php">Pending Orders</a>
        </li>
    </ul>
</div>

<div class="row">
    <div class="box col-md-12">
        <div class="box-inner homepage-box">
            <div class="box-header well">
                <h2><i class="glyphicon glyphicon-th"></i> Pending Order Managment</h2>

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
                    <li class="active"><a href="#info">Pending Orders</a></li>
                </ul>

                <div id="myTabContent" class="tab-content">
                    <div class="tab-pane active" id="info">
                        <h3>Orders
                            <small>View All Pending Orders </small>
                        </h3>
                      <table class="table table-striped table-bordered bootstrap-datatable datatable responsive">
                        <thead>
                        <tr>
                            <th>Oder Id</th>
                            <th>Order By</th>
                            <th>Order Date</th>
                            <th>Order Time</th>
                            <th>Payment Mode</th>
                            <th>Subtotal</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php viewpendingorder(); ?>
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
