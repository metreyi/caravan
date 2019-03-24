<?php
     session_start();
 include"connect.php";
 ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Caravan</title>
  <meta name="description" content="Free Bootstrap Theme by BootstrapMade.com">
  <meta name="keywords" content="free website templates, free bootstrap themes, free template, free bootstrap, free website template">
  <link rel="stylesheet" type="text/css" href="de.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
   <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Satisfy|Bree+satisfy|Candal|PT+Sans">
  <link rel="stylesheet" type="text/css" href="st.css">

  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Satisfy|Bree+Serif|Candal|PT+Sans">
  <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <style type="text/css">
      .div_wrap2{
      width: 100%;
      padding-left:50px;
    }
    .inner_div2{
      color: black;
      width:20%;
      height: 200px;
      float: left; 
      font-style: italic;
    }
    .inner_div2 img{
      width: 200px;
      height: 150px;
      margin-left:30px;
      border-radius: 0px;
    }
    .inner_div2 img:hover{
      transform:scale(1.2,1.2) 
    }
    .inner_div img{
      width: 200px;
      height: 150px;
      margin-left:30px;
      margin-top:30px;
      border-radius: 0px;
      transition: 2s;
    }
    
 .inner_div img:hover
 {
    transform: scale(1.3,1.3);
   }

    
  </style>
</head>

<body>
 
  <section style="margin-left: 0px; margin-top: 0px; margin-bottom: 0px; margin-right: 0px">
    
    <div class="bg-color" style="background-color:rgba(0, 0, 0, 0);">
      <header id="header">
        <div class="container-fluid" style="
    height: 59px;
    padding-left: 0px;
    padding-right: 0px;
">
          <nav class="navbar navbar-default" style=" padding-top: 10px;
    margin-top: 0px;
    z-index: 3000;
">

  <div class="container-fluid" >
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="index.php"><img src="img/ca.png" style="height: 30px;"></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
    <ul class="nav navbar-nav">
      <li style="font-family: candal;" ><a href="about.php" >About</a></li>
 <li class="dropdown">
        <a class="dropdown-toggle" style="font-family: candal;" data-toggle="dropdown" href="#">Menu
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="menu.php#appetizers">Appetizers</a></li>
          <li><a href="menu.php#south">South Indian</a></li>
          <li><a href="menu.php#chinese">Chinese</a></li>
          <li><a href="menu.php#main">Main Course</a></li>
          <li><a href="menu.php#non">Non-Vegetarian</a></li>
          <li><a href="menu.php#bev">Beverages</a></li>
          <li><a href="menu.php#des">Desserts</a></li>

        </ul>
      </li>
      </li>
      <li style="font-family: candal;" ><a href="book.php">Book a table</a></li>
      <li style="font-family: candal;" ><a href="contact.php">Contact</a></li>
    </ul>
       
        <?php
          if (isset($_SESSION['mail'])) {
            $sql="select * from `register` where `Mail`='".$_SESSION['mail']."' ";

$res= mysqli_query($con,$sql);
$data=mysqli_fetch_array($res);
if($data)

        ?>
        <ul class="nav navbar-nav navbar-right">
        <div class="Welcome" style="font-family: candal;">Welcome<a href="profile.php"> <?php echo $data['Firstname']; ?></a>
        <a href="logout.php" class="btn btn-danger"><span class="glyphicon glyphicon-log-out"></span>Logout</a>
      </div>
      </ul>
        <?php
      }
          else
          {
        ?>
        <ul class="nav navbar-nav navbar-right">
      <li style="font-family: candal;" ><a href="login.php">login
        <button type="button" class="btn btn-default btn-md"><span class="glyphicon glyphicon-log-in"></span></button>
</a></li>
      <li style="font-family: candal;" ><a href="register.php">signup
        <button type="button" class="btn btn-default btn-md" ><span class="glyphicon glyphicon-user"></span></button>
      </a></li>
    </ul>
  </div>
  <?php
}
  ?>
</nav>
      </header>