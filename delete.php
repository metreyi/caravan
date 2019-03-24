<?php 
include('connect.php');
$id=$_REQUEST['id'];
mysqli_query($con,"delete from category where `id`='".$id."'");
header('location:view.php');
?>