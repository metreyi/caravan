<!DOCTYPE html>
<?php
	include"connect.php";
?>
<html>
<head>
	<title>Book</title>
</head>
<body>
	<form action="" method="post">
		<label>Name</label>
		<input type="varchar" name="Name" placeholder="Enter Name"><br>
		<label>Date</label>
		<input type="date" name="Date" placeholder="Enter date"><br>
		<label>Mail</label>
		<input type="email" name="Mail" placeholder="Enter email"><br>
		<label>Phone</label>
		<input type="int" name="Phone" placeholder="Enter number"><br><label>Message</label>
		<input type="text area" name="Message" placeholder="Enter message"><br>
		<button type="Submit" name="Submit" class="btn btn-default">Submit</button>

	</form>
	<?php
	if(isset($_POST['Submit'])){
		$name=$_REQUEST['Name'];
		$date=$_REQUEST['Date'];
		$mail=$_REQUEST['Mail'];
		$phone=$_REQUEST['Phone'];
		$message=$_REQUEST['Message'];
		$sql="insert into Book(Name,Date,Mail,Phone,Message) values('$name','$date','$mail','$phone','$message')";
		$res=mysqli_query($con,$sql);

		if($res){
			echo "<script>alert('Form submitted successfully');</script>";
		}
		else{
			echo "<script>alert('Not submitted');</script>";
		}
		}
	?>
</body>
</html>