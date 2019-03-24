<?php 
include('connect.php');
$id=$_REQUEST['id'];
mysqli_query($con,"delete from book where `id`='".$id."'");
header('location:bo.php');
?>