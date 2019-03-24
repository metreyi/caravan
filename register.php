<!DOCTYPE html>
<html>
<head>
  <title>register</title>
   <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Satisfy|Bree+Serif|Candal|PT+Sans">
 
</head>
<body style="font-size: 15px; background-color: rgba(0,0,0,0.1);">
  <h1 style=" font-family:  Satisfy; text-align: center; color: red;">Register here</h1>
  <div class="col-md-8 col-sm-8" style="align-items: center">
<form class="contact-form" action="" method="post">
  <table style="padding-left: 300px; padding-top: 50px;"  >
    <tr>
      <td style="padding: 10px;" >
   <div class="col-md-6 contact-form">
              <div class="form-group ">
    <label for="Username">Username:</label>
  </td>
  <td style="padding: 10px;">
      <input type="text" class="form-control" id="Username" name="fname" placeholder="Enter first name">
    </td>
    <td >
      <input type="text" class="form-control" id="Username" name="lname" placeholder="Enter last name">
    </td>
    </div>
  </div>
</tr>
<tr>
  <div class="col-md-6 contact-form">
    <div class="form-group">
      <td style="padding: 10px;">
    <label  for="number">Mobile Number:</label>
    </td>
    <td style="padding: 10px;">
    <div class="col-sm-10" align="left"> 
      <select>
      <option value="+91">+91</option>
      <option value="+011">+011</option>
      <option value="+61">+61</option>
      <option value="+98">+98</option>
    </select>
 </td>
  </div>
  <td>
      <input type="number" class="form-control" name="number" id="number" placeholder="Enter number">
    </td>
    </div>
  </div>
</tr>
<tr>
  <td style="padding: 10px;">
  <div class="col-md-6 contact-form">
    <div class="form-group">
    <label for="email">Email:</label>
  </td>
  <td style="padding: 10px;">
    <input type="email" name="mail" placeholder="Enter Email">
  </td>
  </div>
</div>
</tr>
<tr>
  <td style="padding: 10px;">
  <div class="col-md-6 contact-form">
  <div class="form-group">
    <label for="password">Password:</label>
      </td>
      <td style="padding: 10px;">
      <input type="password" class="form-control" id="pwd" name="password" placeholder="Enter password">
  </td>
  </div>
</div>
  </tr>
  <tr>
    <td style="padding: 10px;">
  <div class="form-group"> 
    <div class="col-sm-offset-2 col-sm-10">
      <div class="checkbox">
        <label><input type="checkbox">Agree to the terms and conditions.</label>
      </div>
    </div>
  </div>
</td>
</tr>
<tr>
  <td style="padding: 10px;">
  <div class="form-group"> 
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" name="submit" class="btn btn-default">Submit</button>
    </div>
  </div>
</td>
</tr>
</table>
</form>
<?php
      include('connect.php');
      if (isset($_POST['submit'])) {
    $fname=$_REQUEST['fname'];
    $lname=$_REQUEST['lname'];
    $number=$_REQUEST['number'];
    $mail=$_REQUEST['mail'];
    $password=md5($_REQUEST['password']);

    $sql="insert into register(`Firstname`,`Lastname`,`Phone`,`Mail`,`Password`) values('$fname','$lname','$number','$mail','$password')";

   
    $res=mysqli_query($con,$sql);
      if($res>=1){
      echo "<script>alert('successful')";
      header('location:login.php');
    }else{
      echo "<script>alert('Unsccessful')";
      header('location:register.php');
    }
  }
?>
</body>
</html>