<?php
include('connect.php');

	if(isset($_POST['add']))
	{
	
		$cat=$_REQUEST['category'];
		$sql="insert into category(category) values('$cat')";
		$res=mysqli_query($con,$sql);
		if($res>=1)
		{
			//echo"<script>alert('form submitted successfully');</script>";
			header('Location:view.php');
			//echo '<script>
			//alert("successfully added");
		//</script>';
		}
		else
		{
			//echo"<script>alert('please try again');</script>";
			header('Location:cat3.php');
			//echo '<script>
			//alert("oops ");
			
			//</script>';
		}
	}
	?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style>
body {
	background:#EDECEB;
}
.wrapper {
	Width:100%;
	margin:0px;
	padding:0px;
}
.logo_name {
	width:400px;
	margin:auto;
	box-shadow: 0px 0px 2px 2px #CCC;
	margin-top:170px;
	background:#FFFFFF;
}
a {
	text-decoration:none;
}
.wrapperr {
	width:400px;
	margin:auto;
	box-shadow: 0px 0px 2px 2px #CCC;
	margin-top:30px;
	background:#FFFFFF;
}
.from_container {
	width:340;
	margin:auto;
	padding: 30px 0px 1px;
}
.frm {
	width:250px;
	height:35px;
	border:1px solid #CCC;
	border-radius:4px;
	margin:10px;
	padding-left:15px;
}
.frmm {
	width:100px;
	height:35px;
	border:1px solid rgb(233, 79, 49);
	border-radius:4px;
	margin:10px;
	color:black;
	background:rgb(233, 79, 49);
	cursor:pointer;
	font-size:15px;
}
.frmm:hover {
	color:#FFF;
	cursor:pointer;
}
h1 {
	text-align:center;
	padding:10px 0px;
	color:black;
	text-shadow: 1px 1px #666;
}
span {
	padding-left:4px;
	color:#666;
}
</style>

</head>
<body>
	<div class="wrapper">
  <div class="logo_name">
    <h1>Add <span style="color:rgb(233, 79, 49);">Category</span></h1>
  </div>
	
		<div class="wrapperr">
    <div class="from_container">
      <form action="" name="myForm" method="post">
			<div class="table-responsive">
				<table class="table table-bordered">
			<tr>
            <td style="color:#666;">Category:</td>
            <td><input type="text" name="category" value="" class="frm" required/></td>
          </tr>
			
			<tr>
            <td></td>
            <td align="right"><input type="submit" name="add"  value="ADD" class="frmm"/></td>
          </tr>
			
		</table>
	</div>
		</form>

	

</body>
</html>