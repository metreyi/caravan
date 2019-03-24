<?php
include "header.php";?>
<!--?php
session_start();
if(isset($_SESSION['email']))
 {
  ?--><?php include('connect.php');
 $sql="SELECT * from menu";
 $res=mysqli_query($con,$sql);
 ?>
<body class="one" class="img-responsive" style="background-color: rgba(0,0,0,0.1);" >
	<h1 style="text-align: center; color: red; font-style: oblique;"><strong><i>Menu-Card</i></strong></h1><br>
	<p style="font-family: satisfy; color:black;"align="center">Seek what are you seeking for!</p>
	<hr>
	<br>
	<br>

	<div class="container-fluid" >
    <?php
    while ($row=mysqli_fetch_array($res)) {
  ?>
		<h3 align="center" style="font-family:Open sans;"><strong><?php echo $row['category'];?></strong></h3>
  <div class="row" >
  	<div class="inner_div">
    <div class="col-sm-3">
      <td><?php echo $row['Name'];?></td>
           <td><?php echo $row['price'];?></td>
           
    	<img src="img/2.jpg" style="width: 250px; height: 150px;" class="img-responsive" class="img-thumbnail" >
    	<br><p style="font-family: satisfy;" align="center"><strong>French Fries</strong><br>Rs.50.00</p></div>
    <div class="col-sm-3" ><img src="img/images.jpg" style="width: 250px; height: 150px;"class="img-responsive" class="img-thumbnail"><br><p style="font-family: satisfy;" align="center"><strong>Burger</strong><br>Rs.50.00</p></div>
    <div class="col-sm-3"><img src="img/6.jpg" style="width: 250px; height: 150px;" class="img-responsive" class="img-thumbnail"><br><p style="font-family: satisfy;" align="center"><strong>Cheese chilli Toast</strong><br>Rs.100.00</p></div>
     <div class="col-sm-3"><img src="img/99.jpg" style="width: 250px; height: 150px;"class="img-responsive" class="img-thumbnail"><br><p style="font-family: satisfy;" align="center"><strong>Mini Cheesy Hotdogs</strong><br>Rs.200.00</p></div>
 </div>
  </div>
  <div class="row" >
  	<div class="inner_div">
    <div class="col-sm-3">
    	<img src="img/98.jpg" style="width: 250px; height: 150px;" class="img-responsive" class="img-thumbnail" >
    	<br><p style="font-family: satisfy;" align="center"><strong>Potato Nuggets</strong><br>Rs.50.00</p></div>
    <div class="col-sm-3" ><img src="img/5.jpg" style="width: 250px; height: 150px;"class="img-responsive" class="img-thumbnail"><br><p style="font-family: satisfy;" align="center"><strong>Honey Chilli Potato</strong><br>Rs.200.00</p></div>
    <div class="col-sm-3"><img src="img/90.jpg" style="width: 250px; height: 150px;" class="img-responsive" class="img-thumbnail"><br><p style="font-family: satisfy;" align="center"><strong>Chilli Paneer</strong><br>Rs.250.00</p></div>
     <div class="col-sm-3"><img src="img/97.jpg" style="width: 250px; height: 150px;"class="img-responsive" class="img-thumbnail"><br><p style="font-family: satisfy;" align="center"><strong>Pasta Alfredo</strong><br>Rs.200.00</p></div>
 </div>
  </div>
</div>
</div>
<div class="container-fluid">
  <div class="row" >
  	<div class="inner_div">
    <div class="col-sm-3">
    	<img src="img/96.jpg" style="width: 250px; height: 150px;" class="img-responsive" class="img-thumbnail" >
    	<br><p style="font-family: satisfy;" align="center"><strong>Red Sauce Pasta</strong><br>Rs.150.00</p></div>
    <div class="col-sm-3" ><img src="img/10.jpg" style="width: 250px; height: 150px;"class="img-responsive" class="img-thumbnail"><br><p style="font-family: satisfy;" align="center"><strong>Garlic Breads</strong><br>Rs.100.00</p></div>
    <div class="col-sm-3"><img src="img/95.jpg" style="width: 250px; height: 150px;" class="img-responsive" class="img-thumbnail"><br><p style="font-family: satisfy;" align="center"><strong>Cheese Balls</strong><br>Rs.100.00</p></div>
     <div class="col-sm-3"><img src="img/13.jpg" style="width: 250px; height: 150px;"class="img-responsive" class="img-thumbnail"><br><p style="font-family: satisfy;" align="center"><strong>Paneer Tikka</strong><br>Rs.200.00</p></div>
 </div>
  </div>
</div>
<br>
<div class="container-fluid">
	<h3 align="center" style="font-family: OPen sans;"><strong>South Indian Cuisine</strong></h3>
  <div class="row" >
  	<div class="inner_div">
    <div class="col-sm-3">
    	<img src="img/i.jpg" style="width: 250px; height: 150px;" class="img-responsive" class="img-thumbnail" >
    	<br><p style="font-family: satisfy;" align="center"><strong>Idli Sambar</strong><br>Rs.100.00</p></div>
    <div class="col-sm-3" ><img src="img/1.jpg" style="width: 250px; height: 150px;"class="img-responsive" class="img-thumbnail"><br><p style="font-family: satisfy;" align="center"><strong>Sambar Vada</strong><br>Rs.100.00</p></div>
    <div class="col-sm-3"><img src="img/8.jpg" style="width: 250px; height: 150px;" class="img-responsive" class="img-thumbnail"><br><p style="font-family: satisfy;" align="center"><strong>Masala Dosa</strong><br>Rs.150.00</p></div>
     <div class="col-sm-3"><img src="img/3.jpg" style="width: 250px; height: 150px;"class="img-responsive" class="img-thumbnail"><br><p style="font-family: satisfy;" align="center"><strong>Paal Payasam</strong><br>Rs.150.00</p></div>
 </div>
  </div>
</div>

<div class="container-fluid">
  <div class="row" >
  	<div class="inner_div">
    <div class="col-sm-3">
    	<img src="img/94.jpg" style="width: 250px; height: 150px;" class="img-responsive" class="img-thumbnail" >
    	<br><p style="font-family: satisfy;" align="center"><strong>Iddiyappam</strong><br>Rs.150.00</p></div>
    <div class="col-sm-3" ><img src="img/17.jpg" style="width: 250px; height: 150px;"class="img-responsive" class="img-thumbnail"><br><p style="font-family: satisfy;" align="center"><strong>Unniappam</strong><br>Rs.150.00</p></div>
    <div class="col-sm-3"><img src="img/92.jpg" style="width: 250px; height: 150px;" class="img-responsive" class="img-thumbnail"><br><p style="font-family: satisfy;" align="center"><strong>Uttapam</strong><br>Rs.100.00</p></div>
     <div class="col-sm-3"><img src="img/93.jpg" style="width: 250px; height: 150px;"class="img-responsive" class="img-thumbnail"><br><p style="font-family: satisfy;" align="center"><strong>Puttu</strong><br>Rs.100.00</p></div>
 </div>
  </div>
</div>
<br>

<div class="container-fluid">
	<h3 align="center" style="font-family: Open sans;"><strong>Chinese Cuisine</strong></h3>
  <div class="row" >
  	<div class="inner_div">
    <div class="col-sm-3">
    	<img src="img/20.png" style="width: 250px; height: 150px;" class="img-responsive" class="img-thumbnail" >
    	<br><p style="font-family: satisfy;" align="center"><strong>Manchurian</strong><br>Rs.150.00</p></div>
    <div class="col-sm-3" ><img src="img/101.jpg" style="width: 250px; height: 150px;"class="img-responsive" class="img-thumbnail"><br><p style="font-family: satisfy;" align="center"><strong>Hakka Noodles</strong><br>Rs.250.00</p></div>
    <div class="col-sm-3"><img src="img/102.jpg" style="width: 250px; height: 150px;" class="img-responsive" class="img-thumbnail"><br><p style="font-family: satisfy;" align="center"><strong>Fried Rice</strong><br>Rs.200.00</p></div>
     <div class="col-sm-3"><img src="img/103.jpg" style="width: 250px; height: 150px;"class="img-responsive" class="img-thumbnail"><br><p style="font-family: satisfy;" align="center"><strong>Schezwan Noodles</strong><br>Rs.200.00</p></div>
 </div>
  </div>
  <div class="row" >
  	<div class="inner_div">
    <div class="col-sm-3">
    	<img src="img/104.jpg" style="width: 250px; height: 150px;" class="img-responsive" class="img-thumbnail" >
    	<br><p style="font-family: satisfy;" align="center"><strong>Chopsi</strong><br>Rs.150.00</p></div>
    <div class="col-sm-3" ><img src="img/105.jpg" style="width: 250px; height: 150px;"class="img-responsive" class="img-thumbnail"><br><p style="font-family: satisfy;" align="center"><strong>Momos</strong><br>Rs.150.00</p></div>
    <div class="col-sm-3"><img src="img/106.jpg" style="width: 250px; height: 150px;" class="img-responsive" class="img-thumbnail"><br><p style="font-family: satisfy;" align="center"><strong>Broth</strong><br>Rs.150.00</p></div>
     <div class="col-sm-3"><img src="img/27.jpg" style="width: 250px; height: 150px;"class="img-responsive" class="img-thumbnail"><br><p style="font-family: satisfy;" align="center"><strong>Spring Rolls</strong><br>Rs.200.00</p></div>
 </div>
  </div>
  <br>
  <h3 align="center" style="font-family: Open sans;"><strong>Main Course</strong></h3>
  
  <div class="row" >
  	<div class="inner_div">
    <div class="col-sm-3">
    	<img src="img/31.jpg" style="width: 250px; height: 150px;" class="img-responsive" class="img-thumbnail" >
    	<br><p style="font-family: satisfy;" align="center"><strong>Amritsari Kulcha</strong><br>Rs.50.00</p></div>
    <div class="col-sm-3" ><img src="img/32.jpg" style="width: 250px; height: 150px;"class="img-responsive" class="img-thumbnail"><br><p style="font-family: satisfy;" align="center"><strong>Chole Kulche</strong><br>Rs.100.00</p></div>
    <div class="col-sm-3"><img src="img/43.jpg" style="width: 250px; height: 150px;" class="img-responsive" class="img-thumbnail"><br><p style="font-family: satisfy;" align="center"><strong>Naan</strong><br>Rs.40.00</p></div>
     <div class="col-sm-3"><img src="img/44.jpg" style="width: 250px; height: 150px;"class="img-responsive" class="img-thumbnail"><br><p style="font-family: satisfy;" align="center"><strong>Tandoori Roti</strong><br>Rs.20.00</p></div>
 </div>
  </div>
  <div class="row" >
  	<div class="inner_div">
    <div class="col-sm-3">
    	<img src="img/45.jpg" style="width: 250px; height: 150px;" class="img-responsive" class="img-thumbnail" >
    	<br><p style="font-family: satisfy;" align="center"><strong>Multigrain Roti</strong><br>Rs.20.00</p></div>
    <div class="col-sm-3" ><img src="img/46.jpg" style="width: 250px; height: 150px;"class="img-responsive" class="img-thumbnail"><br><p style="font-family: satisfy;" align="center"><strong>Bejad Roti</strong><br>Rs.30.00</p></div>
    <div class="col-sm-3"><img src="img/49.jpg" style="width: 250px; height: 150px;" class="img-responsive" class="img-thumbnail"><br><p style="font-family: satisfy;" align="center"><strong>Aloo Parantha</strong><br>Rs.40.00</p></div>
     <div class="col-sm-3"><img src="img/48.jpg" style="width: 250px; height: 150px;"class="img-responsive" class="img-thumbnail"><br><p style="font-family: satisfy;" align="center"><strong>Paneer Parantha</strong><br>Rs.50.00</p></div>
 </div>
  </div>
  <div class="row" >
  	<div class="inner_div">
    <div class="col-sm-3">
    	<img src="img/38.jpg" style="width: 250px; height: 150px;" class="img-responsive" class="img-thumbnail" >
    	<br><p style="font-family: satisfy;" align="center"><strong>Dal Makhani</strong><br>Rs.75.00</p></div>
    <div class="col-sm-3" ><img src="img/40.jpg" style="width: 250px; height: 150px;"class="img-responsive" class="img-thumbnail"><br><p style="font-family: satisfy;" align="center"><strong>Dal Fry</strong><br>Rs.50.00</p></div>
    <div class="col-sm-3"><img src="img/41.jpg" style="width: 250px; height: 150px;" class="img-responsive" class="img-thumbnail"><br><p style="font-family: satisfy;" align="center"><strong>Kadhi</strong><br>Rs.50.00</p></div>
     <div class="col-sm-3"><img src="img/42.jpg" style="width: 250px; height: 150px;"class="img-responsive" class="img-thumbnail"><br><p style="font-family: satisfy;" align="center"><strong>Dal Tadka</strong><br>Rs.50.00</p></div>
 </div>
  </div>
  <div class="row" >
  	<div class="inner_div">
    <div class="col-sm-3">
    	<img src="img/34.jpg" style="width: 250px; height: 150px;" class="img-responsive" class="img-thumbnail" >
    	<br><p style="font-family: satisfy;" align="center"><strong>Pav Bhaji</strong><br>Rs.100.00</p></div>
    <div class="col-sm-3" ><img src="img/35.jpg" style="width: 250px; height: 150px;"class="img-responsive" class="img-thumbnail"><br><p style="font-family: satisfy;" align="center"><strong>Missile Pav</strong><br>Rs.100.00</p></div>
    <div class="col-sm-3"><img src="img/30.jpg" style="width: 250px; height: 150px;" class="img-responsive" class="img-thumbnail"><br><p style="font-family: satisfy;" align="center"><strong>Aloo Tikki</strong><br>Rs.75.00</p></div>
     <div class="col-sm-3"><img src="img/50.jpg" style="width: 250px; height: 150px;"class="img-responsive" class="img-thumbnail"><br><p style="font-family: satisfy;" align="center"><strong>Chole Bhature</strong><br>Rs.100.00</p></div>
 </div>
  </div>
  <div class="row" >
  	<div class="inner_div">
        <div class="col-sm-3">
    	<img src="img/111.jpg" style="width: 250px; height: 150px;" class="img-responsive" class="img-thumbnail" >
    	<br><p style="font-family: satisfy;" align="center"><strong>Dum Aloo</strong><br>Rs.75.00</p></div>
    <div class="col-sm-3" ><img src="img/36.jpg" style="width: 250px; height: 150px;"class="img-responsive" class="img-thumbnail"><br><p style="font-family: satisfy;" align="center"><strong>Shahi Paneer</strong><br>Rs.100.00</p></div>
    <div class="col-sm-3"><img src="img/37.jpg" style="width: 250px; height: 150px;" class="img-responsive" class="img-thumbnail"><br><p style="font-family: satisfy;" align="center"><strong>Kadai Paneer</strong><br>Rs.100.00</p></div>
     <div class="col-sm-3"><img src="img/39.jpg" style="width: 250px; height: 150px;"class="img-responsive" class="img-thumbnail"><br><p style="font-family: satisfy;" align="center"><strong>Chana Masala</strong><br>Rs.75.00</p></div>
 </div>
  </div>
  
  <div class="row" >
  	<div class="inner_div">
    <div class="col-sm-3">
    	<img src="img/51.jpg" style="width: 250px; height: 150px;" class="img-responsive" class="img-thumbnail" >
    	<br><p style="font-family: satisfy;" align="center"><strong>Shahi Gatte</strong><br>Rs.100.00</p></div>
    <div class="col-sm-3" ><img src="img/52.jpg" style="width: 250px; height: 150px;"class="img-responsive" class="img-thumbnail"><br><p style="font-family: satisfy;" align="center"><strong>Panchkuta</strong><br>Rs.250.00</p></div>
    <div class="col-sm-3"><img src="img/53.jpg" style="width: 250px; height: 150px;" class="img-responsive" class="img-thumbnail"><br><p style="font-family: satisfy;" align="center"><strong>Daal Bati Churma</strong><br>Rs.300.00</p></div>
     <div class="col-sm-3"><img src="img/54.jpg" style="width: 250px; height: 150px;"class="img-responsive" class="img-thumbnail"><br><p style="font-family: satisfy;" align="center"><strong>Bajra Roti with red Garlic chutney</strong><br>Rs.150.00</p></div>
 </div>
  </div>
  <br>
  <h3 align="center" style="font-family: Open sans;"><strong>Non Vegetarian</strong></h3>
  
  <div class="row" >
  	<div class="inner_div">
    <div class="col-sm-3">
    	<img src="img/60.jpg" style="width: 250px; height: 150px;" class="img-responsive" class="img-thumbnail" >
    	<br><p style="font-family: satisfy;" align="center"><strong>Chicken Tikka</strong><br>Rs.150.00</p></div>
    <div class="col-sm-3" ><img src="img/61.jpg" style="width: 250px; height: 150px;"class="img-responsive" class="img-thumbnail"><br><p style="font-family: satisfy;" align="center"><strong>Tangri Kebabs</strong><br>Rs.200.00</p></div>
    <div class="col-sm-3"><img src="img/62.jpg" style="width: 250px; height: 150px;" class="img-responsive" class="img-thumbnail"><br><p style="font-family: satisfy;" align="center"><strong>Hyderabadi Chicken Biryani</strong><br>Rs.250.00</p></div>
     <div class="col-sm-3"><img src="img/63.jpg" style="width: 250px; height: 150px;"class="img-responsive" class="img-thumbnail"><br><p style="font-family: satisfy;" align="center"><strong>Mutton Chops</strong><br>Rs.200.00</p></div>
 </div>
  </div>
  
  <div class="row" >
  	<div class="inner_div">
    <div class="col-sm-3">
    	<img src="img/64.jpg" style="width: 250px; height: 150px;" class="img-responsive" class="img-thumbnail" >
    	<br><p style="font-family: satisfy;" align="center"><strong>Laal Maans</strong><br>Rs.350.00</p></div>
    <div class="col-sm-3" ><img src="img/65.jpg" style="width: 250px; height: 150px;"class="img-responsive" class="img-thumbnail"><br><p style="font-family: satisfy;" align="center"><strong>Grilled Chicken</strong><br>Rs.250.00</p></div>
    <div class="col-sm-3"><img src="img/66.jpg" style="width: 250px; height: 150px;" class="img-responsive" class="img-thumbnail"><br><p style="font-family: satisfy;" align="center"><strong>Mutton Korma</strong><br>Rs.200.00</p></div>
     <div class="col-sm-3"><img src="img/67.jpg" style="width: 250px; height: 150px;"class="img-responsive" class="img-thumbnail"><br><p style="font-family: satisfy;" align="center"><strong>Pina Colada Pork Chops</strong><br>Rs.200.00</p></div>
 </div>
  </div>
  <br>
  <h3 align="center" style="font-family: Open sans;"><strong>Beverages</strong></h3>
  <div class="row" >
  	<div class="inner_div">
    <div class="col-sm-3">
    	<img src="img/70.jpg" style="width: 250px; height: 150px;" class="img-responsive" class="img-thumbnail" >
    	<br><p style="font-family: satisfy;" align="center"><strong>Mojito</strong><br>Rs.100.00</p></div>
    <div class="col-sm-3" ><img src="img/71.jpg" style="width: 250px; height: 150px;"class="img-responsive" class="img-thumbnail"><br><p style="font-family: satisfy;" align="center"><strong>Blue Lagoon</strong><br>Rs.100.00</p></div>
    <div class="col-sm-3"><img src="img/72.jpg" style="width: 250px; height: 150px;" class="img-responsive" class="img-thumbnail"><br><p style="font-family: satisfy;" align="center"><strong>Cherry Cocktail</strong><br>Rs.100.00</p></div>
     <div class="col-sm-3"><img src="img/73.jpg" style="width: 250px; height: 150px;"class="img-responsive" class="img-thumbnail"><br><p style="font-family: satisfy;" align="center"><strong>Gabbie's Punch</strong><br>Rs.150.00</p></div>
 </div>
  </div><div class="row" >
  	<div class="inner_div">
    <div class="col-sm-3">
    	<img src="img/74.jpg" style="width: 250px; height: 150px;" class="img-responsive" class="img-thumbnail" >
    	<br><p style="font-family: satisfy;" align="center"><strong>Oreo Shake</strong><br>Rs.100.00</p></div>
    <div class="col-sm-3" ><img src="img/75.jpg" style="width: 250px; height: 150px;"class="img-responsive" class="img-thumbnail"><br><p style="font-family: satisfy;" align="center"><strong>Kitkat Shake</strong><br>Rs.100.00</p></div>
    <div class="col-sm-3"><img src="img/76.jpg" style="width: 250px; height: 150px;" class="img-responsive" class="img-thumbnail"><br><p style="font-family: satisfy;" align="center"><strong>Brownie Shake</strong><br>Rs.100.00</p></div>
     <div class="col-sm-3"><img src="img/77.jpg" style="width: 250px; height: 150px;"class="img-responsive" class="img-thumbnail"><br><p style="font-family: satisfy;" align="center"><strong>Nutella Shake</strong><br>Rs.200.00</p></div>
 </div>
  </div>
  <br>
  <h3 align="center" style="font-family:Open sans;"><strong>Desserts</strong></h3>

  <div class="row" >
  	<div class="inner_div">
    <div class="col-sm-3">
    	<img src="img/80.jpg" style="width: 250px; height: 150px;" class="img-responsive" class="img-thumbnail" >
    	<br><p style="font-family: satisfy;" align="center"><strong>Gulab Jamun</strong><br>Rs.50.00</p></div>
    <div class="col-sm-3" ><img src="img/82.jpg" style="width: 250px; height: 150px;"class="img-responsive" class="img-thumbnail"><br><p style="font-family: satisfy;" align="center"><strong>Malpua</strong><br>Rs.100.00</p></div>
    <div class="col-sm-3"><img src="img/83.jpg" style="width: 250px; height: 150px;" class="img-responsive" class="img-thumbnail"><br><p style="font-family: satisfy;" align="center"><strong>Kheer</strong><br>Rs.70.00</p></div>
     <div class="col-sm-3"><img src="img/84.jpg" style="width: 250px; height: 150px;"class="img-responsive" class="img-thumbnail"><br><p style="font-family: satisfy;" align="center"><strong>Ras Malai</strong><br>Rs.70.00</p></div>
 </div>
  </div><div class="row" >
  	<div class="inner_div">
    <div class="col-sm-3">
    	<img src="img/85.jpg" style="width: 250px; height: 150px;" class="img-responsive" class="img-thumbnail" >
    	<br><p style="font-family: satisfy;" align="center"><strong>Rajbhog</strong><br>Rs.70.00</p></div>
    <div class="col-sm-3" ><img src="img/86.jpg" style="width: 250px; height: 150px;"class="img-responsive" class="img-thumbnail"><br><p style="font-family: satisfy;" align="center"><strong>Rabdi Ghevar</strong><br>Rs.100.00</p></div>
    <div class="col-sm-3"><img src="img/87.jpg" style="width: 250px; height: 150px;" class="img-responsive" class="img-thumbnail"><br><p style="font-family: satisfy;" align="center"><strong>Rabdi Kulfi</strong><br>Rs.50.00</p></div>
     <div class="col-sm-3"><img src="img/88.jpg" style="width: 250px; height: 150px;"class="img-responsive" class="img-thumbnail"><br><p style="font-family: satisfy;" align="center"><strong>Daal Halwa</strong><br>Rs.100.00</p></div>
 </div>
  </div>
</div>
<!--?php
  
  }
     else
     {
      header("location:Dashboard.php?login= Your not allowed to access this area");
        exit();
    }
   ?-->
<?php
 include "footer.php";
 ?>