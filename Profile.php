<?php 
  session_start();
  include('connect.php');
  if (isset($_SESSION['mail'])) {
    $sql="SELECT * FROM `register` where `Mail`='".$_SESSION['mail']."'";
    $sql1="SELECT * FROM `book`";
    $res1=mysqli_query($con,$sql1);
    $data1=mysqli_fetch_array($res1);
    $res=mysqli_query($con,$sql);
    $data=mysqli_fetch_array($res);
    if ($data && $data1) {
?>
<!DOCTYPE html>
<html>
<head>
	<title>Profile</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Free Bootstrap Theme by BootstrapMade.com">
  <meta name="keywords" content="free website templates, free bootstrap themes, free template, free bootstrap, free website template">
<style type="text/css">
  .p{
    word-spacing: 20px;
  }
</style>
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Satisfy|Bree+Serif|Candal|PT+Sans">
  <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  
</head>
<body style="background-color: rgba(0,0,0,0.1); align-content: center;">
	<h1 style="font-family:Satisfy; text-align: center; color: red;">Welcome<br><span style="color:#E47200;"><?php echo $data['Firstname'], $data['Lastname'];?></span></h1><br><br>
  <div><a href="logout.php">
  <input type="submit" value="Logout">
  <a href="index.php">
  <input type="submit" value="Visit site">
  
  </a></div>
  <br>
  <br>	 
  <div class="col-md-8 col-sm-8" style="align-items: center">
          <form action="" method="post"  class="contact-form" role="form">
            <div class="col-md-6 contact-form">
              <div class="form-group ">
              	<label style="font-family: sans;"><sup>Firstname</sup></label><br>
                <?php echo $data['Firstname'];?>
              </div>
            </div>
            <div class="col-md-6 contact-form">
              <div class="form-group ">
              	<label style="font-family: sans;"><sup>Lastname</sup></label><br>
                 <?php echo $data['Lastname'];?>
                </div>
            </div>
            <div class="col-md-6 contact-form">
              <div class="form-group ">
              	<label style="font-family: sans;"><sup>Email</sup></label><br>
                 <?php echo $data['Mail'];?>
              </div>
            </div>
            <div class="col-md-6 contact-form">
              <div class="form-group ">
              	<label style="font-family: sans;"><sup>Phone</sup></label><br>
                 <?php echo $data['Phone'];?>
              </div>
            </div>
            <div class="col-md-6 contact-form">
              <div class="form-group ">
                <label style="font-family: sans;"><sup>Bookdate</sup></label><br>
                <?php echo $data1['Bookdate'];?>
              </div>
            </div>
            <div class="col-md-6 contact-form">
              <div class="form-group ">
                <label style="font-family: sans;"><sup>Booktime</sup></label><br>
                <?php echo $data1['Booktime'];?>
              </div>
            </div>
            <div class="col-md-6 contact-form">
              <div class="form-group ">
                <label style="font-family: sans;"><sup>Seats</sup></label><br>
                <?php echo $data1['seat'];?>
              </div>
            </div>
</body>
</html>
<?php
}
}
else
{
echo "Login failed!";

}
?>