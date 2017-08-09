<?php
 $con = mysqli_connect('localhost','blalas_user','D&-91)XQp6T)','db_balas');
 

 if($con->connect_error)
 {
 	echo "Db Connection Error".$con->connect_error;
 }
?>