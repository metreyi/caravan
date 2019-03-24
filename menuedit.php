<html>
<head>
<title>Add New Menu</title>
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
    <h1>Edit <span style="color:rgb(233, 79, 49);">Menu</span></h1>
  </div>
  <?php
    if(isset($_POST['update']))
	{
	require_once('connect.php');
	$id=$_REQUEST['id'];
	$name=$_REQUEST['name'];
	$price=$_REQUEST['price'];
	$cat=$_REQUEST['cat'];
	$pic=$_REQUEST['pic'];
	$sql="update menu set `Name`='".$name."', `price`='".$price."', `category`='".$cat."',`pic`='".$pic."' where `id`='".$id."'";
	$res=mysqli_query($con,$sql);
		if($res>=1)
		{
			echo "<script>
				alert('Menu Details update succesfully...');
				window.location.href='viewmenu.php';
				</script>";
		}
		else
		{
			echo "<script>
				alert('Error Occured in Updation, Retry!');
				window.location.href='viewmenu.php';
				</script>";
		}
	}
?>
  <div class="wrapperr">
    <div class="from_container">
      <form action="" name="myForm" method="post">
        <?php
		require_once('connect.php');
		 $id=$_REQUEST['id'];
		 $sql="select * from menu where `id`='".$id."'";
		 $res=mysqli_query($con,$sql);
		 while($row=mysqli_fetch_array($res))
	     {
		 ?>
        <table>
          <tr>
            <td style="color:#666;">Item Name:</td>
            <td><input type="text" name="name" value="<?php echo $row['Name']; ?>" class="frm" required/></td>
          </tr>
          <tr>
            <td style="color:#666;">Item Price</td>
            <td><input type="text" name="price" value="<?php echo $row['price']; ?>" class="frm" required/></td>
          </tr>
          <tr>
            <td style="color:#666;">Item Category</td>
            <td><textarea type="text" name="cat"  class="frm" required><?php echo $row['category']; ?></textarea></td>
          </tr>
          <td style="color:#666;">Item Picture</td>
            <td><input type="file" name="pic" value="<?php echo $row['pic']; ?>" class="frm" required/></td>
          </tr>
          
          <tr>
            <td></td>
            <td align="right"><input type="submit" name="update"  value="Update" class="frmm"/></td>
          </tr>
        </table>
        <?php
		  }
		 ?>
      </form>
    </div>
  </div>
</div>
<!--wrapper close-->
</body>
</html>
