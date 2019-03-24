<?php 
session_start();
  include('connect.php');
  if (isset($_SESSION['email'])) {
    $sql="SELECT * FROM admin WHERE email='".$_SESSION['email']."'";
    $res=mysqli_query($con,$sql);
    $data=mysqli_fetch_array($res);
    if ($data) {
?>

<html>
<head>
<title>Admin Dashboard</title>
<link rel="stylesheet" href="style.css"/>
<script src="jquery.js" ></script>
<script src="script.js" type="text/javascript"></script>
<script>
$(document).ready(function(){
  
  $("#view").click(function(){

    $("#naveFrame").attr('src','view.php');
  });
   $("#add").click(function(){
    $("#naveFrame").attr('src','cat3.php');
  });
   $("#menu").click(function(){
    $("#naveFrame").attr('src','viewmenu.php');
  });
   $("#addmenu").click(function(){
    $("#naveFrame").attr('src','addcat.php');
  });
   $("#book").click(function(){
    $("#naveFrame").attr('src','bo.php');
  });
});


</script>
</head>
<body style="background-color: rgba(0,0,0,0.2);">
<div class="wrapper" style="background-color: rgba(0,0,0,0.1);">
  <div class="header">
    <div class="logo">
     <a href="Dashboard.php"> <h2  style="color:#333; padding-left: 520px;">Admin<span style="color:rgba(0,0,0, 49);">Panel</span></h2></a>
    </div>
    <div class="search"></div>
    <div class="clear"></div>
  </div>
  <div class="container">
    <div class="container1">
      <div id='cssmenu'>
        <ul>
          <li><a href='Dashboard.php'><span>Dashboard</span></a></li>
          <li class='has-sub'><a href='#' ><span>Category</span></a>
            <ul>
              <li><a href='#' id="view"><span>View</span></a></li>
              <li><a href='#' id="add"><span>Add</span></a></li>
            </ul>
          </li>
          <li class='has-sub'><a href='#'><span>Menu</span></a>
            <ul>
              <li><a href='#' id="menu"><span>View</span></a></li>
              <li class='last'><a href='#' id="addmenu"><span>Add</span></a></li>
             </ul>
          </li>
          <li class='has-sub'><a href='#'><span>Booking Status</span></a>
            <ul>
              <li class='last'><a href='#' id="book"><span>View</span></a></li>
            </ul>
          </li>
          <li class='has-sub'><a href='logout.php'><span>Logout</span></a>
          </li>
           </ul>
      </div>
    </div>
</div>
    <div class="container2">
      <iframe frameborder="0"  id="naveFrame" style="width: 100%; height: 100%"></iframe>
    
    </div>
    <div class="clear"></div>

  <!--container close-->
  <div class="footer">
    <div class="footer_left"></div>
    <div class="footer_right">
      <p id="jay">Admin Panel</p>
    </div>
    <div class="clear"></div>
  </div>
</div>
</body>
</html>
<?php
}
}
else
{
echo "Admin Login first!!";

}
?>
