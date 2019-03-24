<?php
session_start();
 if(!isset($_SESSION['Aname']))
 {
  header("location:index.php?login= Your not allowed to access this area");
        exit();
 }
 ?>
<html>
<head>
<title>Add New Menu</title>
<style>
body {
	background: #EDECEB;
}
.wrapper {
	Width: 100%;
	margin: 0px;
	padding: 0px;
}
.logo_name {
	width: 400px;
	margin: auto;
	box-shadow: 0px 0px 2px 2px #CCC;
	margin-top: 170px;
	background: #FFFFFF;
}
a {
	text-decoration: none;
}
.wrapperr {
	width: 400px;
	margin: auto;
	box-shadow: 0px 0px 2px 2px #CCC;
	margin-top: 30px;
	background: #FFFFFF;
}
.from_container {
	width: 340;
	margin: auto;
	padding: 30px 0px 1px;
}
.frm {
	width: 250px;
	height: 35px;
	border: 1px solid #CCC;
	border-radius: 4px;
	margin: 10px;
	padding-left: 15px;
}
.frmm {
	width: 100px;
	height: 35px;
	border: 1px solid rgb(233, 79, 49);
	border-radius: 4px;
	margin: 10px;
	color: black;
	background: rgb(233, 79, 49);
	cursor: pointer;
	font-size: 15px;
}
.frmm:hover {
	color: #FFF;
	cursor: pointer;
}
h1 {
	text-align: center;
	padding: 10px 0px;
	color: black;
	text-shadow: 1px 1px #666;
}
span {
	padding-left: 4px;
	color: #666;
}
</style>
</head>

<body>
<div class="wrapper">
  <div class="logo_name">
    <h1>Add New <span style="color:rgb(233, 79, 49);">Menu</span></h1>
  </div>
  <?php
						 include('connect.php');
						 if(isset($_POST['submit']))
						 {
							
							$name=$_REQUEST['cat'];
							
							$sql1="insert into `add_cat` (`add_cat` )values('$name')";
							$res=mysqli_query($con,$sql1);
							if($res>=1)
							{
								
								echo '<script>alert("Successfilly added.....");</script>';
							}
							else
							{
								echo '<script>alert("oops! Error Occured , Try again after sometime...");</script></div>';
							}
						  }
					   ?>
  <div class="wrapperr">
    <div class="from_container">
      <form action="" name="myForm" method="post"   >
        <table>
          <tr>
            <td style="color:#666;">Add Cat:</td>
            <td><input type="text" name="cat" placeholder="Please Enter  Here" class="frm" required/></td>
          </tr>
         
          <tr>
            <td></td>
            <td align="right"><input type="submit" name="submit"  value="Submit" class="frmm"/></td>
          </tr>
        </table>
      </form>
    </div>
  </div>
</div>
<!--wrapper close-->
</body>
</html>
