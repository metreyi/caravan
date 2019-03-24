<!DOCTYPE html>
<?php
 include"connect.php";
 ?>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="#" method="post">
		<label>Name</label>
		<input type="varchar" id="Name" name="Name" placeholder="Enter Name"><br>
		<label>Price</label>
		<input type="int" id="Price" name="Price" placeholder="Enter price"><br>
		<label>Cuisine</label>
		<input type="text" id="cuisine" name="Cuisine" placeholder="Enter cuisine"><br>
		<button type="Submit"  id="Price" name="Submit" class="btn btn-default">Submit</button>

	</form>
	<?php
	if(isset($_POST['Submit'])){
		$name=$_REQUEST['Name'];
		$price=$_REQUEST['Price'];
		$cuisine=$_REQUEST['Cuisine'];
		$sql="insert into Cuisines(Name,Price,Cuisine) values('$name','$price','$cuisine')";
		$res=mysqli_query($con,$sql);

		if($res){
			echo "<script>alert('Form submitted successfully');</script>";
		}
		else{
			echo "<script>alert('Not submitted');</script
			>";
		}
		}
	?>
</body>
</html>