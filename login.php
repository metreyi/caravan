<?php
     session_start();
 include"connect.php";
 ?>
       <!DOCTYPE html>
       <html>
       <head>
         <title>login</title>
          <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Satisfy|Bree+Serif|Candal|PT+Sans">
 
       </head>
       <body style="font-size: 15px; background-color: rgba(0,0,0,0.1);">
  <h1 style=" font-family:  Satisfy; text-align: center; color: red;">Login</h1>

       <form action="" method="post">
        <table style="padding-left: 450px;">
          <tr>
        <div class="form-group">
          <td>
    <label for="email">Email address:</label>
  </td>
  <td>
    <input type="email" class="form-control" id="email" name="mail">
  </td>
  </div>
</tr>
<tr>
  <div class="form-group">
    <td>
    <label for="pwd">Password:</label>
   </td>
   <td>
    <input type="password" class="form-control" id="pwd" name="pass">
  </td>
  </div>
</tr>
<tr>
  <td>
  <div class="checkbox">
    <label><input type="checkbox"> Remember me</label>
  </div>
</td>
</tr>
<tr>
  <td>
  <button type="submit" name="submit" class="btn btn-default">Submit</button>
</td>
</tr>
</table>
</form>
      </div>
         </div>
</div>
  </div>
<?php
  if (isset($_POST['submit'])) {
    $mail=$_REQUEST['mail'];
    $pass=md5($_REQUEST['pass']);
    $sql="select * from register where Mail='".$mail."' and Password='".$pass."'";
    $res=mysqli_query($con,$sql);
    $data=mysqli_fetch_array($res);

    if ($data) {
      $_SESSION['mail']=$mail;
      header('location:index.php');
    }
  }
?>
</body>
       </html>