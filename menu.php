<?php
include "header.php";
 include('connect.php');
 $sql="SELECT * from menu where category='Appetizers'";
 $res=mysqli_query($con,$sql);
  $sql1="SELECT * from menu where category='SouthIndian'";
 $res1=mysqli_query($con,$sql1);
  $sql2="SELECT * from menu where category='Chinese'";
 $res2=mysqli_query($con,$sql2);
  $sql3="SELECT * from menu where category='Maincourse'";
 $res3=mysqli_query($con,$sql3);
  $sql4="SELECT * from menu where category='Nonvegetarian'";
 $res4=mysqli_query($con,$sql4);
  $sql5="SELECT * from menu where category='Beverages'";
 $res5=mysqli_query($con,$sql5);
  $sql6="SELECT * from menu where category='Desserts'";
 $res6=mysqli_query($con,$sql6);
 
 ?>
<body class="one" class="img-responsive" style="background-color: rgba(0,0,0,0.1);" >
	<h1 style="text-align: center; color: red; font-style: oblique;"><strong><i>Menu-Card</i></strong></h1><br>
	<p style="font-family: satisfy; color:black;"align="center">Seek what are you seeking for!</p>
	<hr>
	<br>
	<br>
 <div class="container-fluid">
    <h3 align="center" style="font-family:Open sans;" id="appetizers"><strong>Appetizers and Starters</strong></h3>
  <div class="row" >
    <div class="inner_div">
      <?php
    while ($row=mysqli_fetch_array($res)) {
  ?>
    <div class="col-sm-3">
      <img src="img\<?php echo $row ['pic'] ;?>" style="width: 250px; height: 150px;" class="img-responsive" class="img-thumbnail" >
      <br><p style="font-family: satisfy;" align="center"><strong><?php echo $row['Name'];?></strong><br><?php echo $row['price'];?></p></div>
<?php
    }?>
    </div>
</div><br><br>
 

      <h3 id="south" align="center" style="font-family:Open sans;"><strong>South Indian Cuisines </strong></h3>
  <div class="row" >
    <div class="inner_div">
      <?php
    while ($row=mysqli_fetch_array($res1)) {
  ?>
    <div class="col-sm-3">
      <img src="img\<?php echo $row ['pic'] ;?>" style="width: 250px; height: 150px;" class="img-responsive" class="img-thumbnail" >
      <br><p style="font-family: satisfy;" align="center"><strong><?php echo $row['Name'];?></strong><br><?php echo $row['price'];?></p></div>

 <?php
    }?></div>
</div>
    <br><br>
       <h3 align="center" id="chinese" style="font-family:Open sans;"><strong>Chinese Cuisine</strong></h3>
  <div class="row" >
    <div class="inner_div">
      <?php
    while ($row=mysqli_fetch_array($res2)) {
  ?>
    <div class="col-sm-3">
      <img src="img\<?php echo $row ['pic'] ;?>" style="width: 250px; height: 150px;" class="img-responsive" class="img-thumbnail" >
      <br><p style="font-family: satisfy;" align="center"><strong><?php echo $row['Name'];?></strong><br><?php echo $row['price'];?></p></div>
<?php
    }?>
 </div>
</div>
<br><br>
    <h3 align="center" id="main" style="font-family:Open sans;"><strong>Main Course</strong></h3>
  <div class="row" >
    <div class="inner_div">
      <?php
    while ($row=mysqli_fetch_array($res3)) {
  ?>
    <div class="col-sm-3">
      <img src="img\<?php echo $row ['pic'] ;?>" style="width: 250px; height: 150px;" class="img-responsive" class="img-thumbnail" >
      <br><p style="font-family: satisfy;" align="center"><strong><?php echo $row['Name'];?></strong><br><?php echo $row['price'];?></p></div>
<?php
    }?>
 </div>
</div>
<br><br>
    <h3 align="center" id="non" style="font-family:Open sans;"><strong>Non-Vegetarian</strong></h3>
  <div class="row" >
    <div class="inner_div">
      <?php
    while ($row=mysqli_fetch_array($res4)) {
  ?>
    <div class="col-sm-3">
      <img src="img\<?php echo $row ['pic'] ;?>" style="width: 250px; height: 150px;" class="img-responsive" class="img-thumbnail" >
      <br><p style="font-family: satisfy;" align="center"><strong><?php echo $row['Name'];?></strong><br><?php echo $row['price'];?></p></div>
<?php
    }?>
 </div>
</div>
<br><br>
    <h3 align="center" id="bev" style="font-family:Open sans;"><strong>Beverages</strong></h3>
  <div class="row" >
    <div class="inner_div">
      <?php
    while ($row=mysqli_fetch_array($res5)) {
  ?>
    <div class="col-sm-3">
      <img src="img\<?php echo $row ['pic'] ;?>" style="width: 250px; height: 150px;" class="img-responsive" class="img-thumbnail" >
      <br><p style="font-family: satisfy;" align="center"><strong><?php echo $row['Name'];?></strong><br><?php echo $row['price'];?></p></div>
<?php
    }?></div>
</div>
 <br><br>
<h3 align="center" id="des" style="font-family:Open sans;"><strong>Desserts</strong></h3>
  <div class="row" >
    <div class="inner_div">
      <?php
    while ($row=mysqli_fetch_array($res6)) {
  ?>
    <div class="col-sm-3">
      <img src="img\<?php echo $row ['pic'] ;?>" style="width: 250px; height: 150px;" class="img-responsive" class="img-thumbnail" >
      <br><p style="font-family: satisfy;" align="center"><strong><?php echo $row['Name'];?></strong><br><?php echo $row['price'];?></p></div>
<?php
    }?>
 

 
  </div>
</div></div>

<?php
 include "footer.php";
 ?>