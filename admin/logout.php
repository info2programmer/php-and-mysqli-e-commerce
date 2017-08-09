<?php
session_start();
session_unset($_SESSION['BalasAdmin']);
header('Location:adminlogin.php?logout');
exit();
?>