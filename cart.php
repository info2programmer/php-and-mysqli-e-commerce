<?php
include_once('include/header.php');
include_once('include/nav.php');
include_once('phplib/view.php');
include_once('phplib/controler.php');

	if(isset($_POST['btnUpdateQty']))
	{
		updatecateitem($_POST['cartid'],$_POST['txtQty']);
	}
	else if(isset($_GET['del']))
	{
		deletecart($_GET['del']);
	}


?>

<hr/>

<table class="table table-hover table-condensed" style="max-width: 70%; margin-left: 15% ">
	<thead>
		<tr>
			<th>ITEM </th>
			<th>PRICE</th>
			<th>QTY</th>
			<th>AMOUNT</th>
			<th>ACTION</th>
		</tr>
	</thead>
	<tbody>
		<?php $bool=viewcartitem(); ?>
	</tbody>
</table>

<div class="">
<p align="center">
<a href="index.php" class="btn btn-warning"> &nbsp; &nbsp; <span class="glyphicon glyphicon-menu-left" aria-hidden="true"></span> Shop More &nbsp; &nbsp; </a> <span style="margin-left:60px; ">&nbsp;</span>
<?php if($bool[0]==true)
{
	echo "<a href='checkout.php' class='btn btn-success'> &nbsp; &nbsp; <span class='glyphicon glyphicon-menu-right' aria-hidden='true'></span> Continue As A Guest &nbsp; &nbsp; </a>";
	if(!isset($_SESSION['UserEmail']))
	echo "<span style='margin-left:60px; '>&nbsp;</span><a href='login.php' class='btn btn-success'> &nbsp; &nbsp; <span class='glyphicon glyphicon-menu-right' aria-hidden='true'></span> Continue With Login &nbsp; &nbsp; </a>";
}
?>

</p>
<br/><br/>
</div>
<?php
include_once('include/footer.php');
?>