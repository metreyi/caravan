<?php 
include('connect.php');
$id=$_REQUEST['id'];
mysqli_query($con,"delete from menu where `id`='".$id."'");
header('location:viewmenu.php');
?>