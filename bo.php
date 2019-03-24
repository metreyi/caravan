<!--?php
session_start();
if(isset($_SESSION['email']))
 {
  ?--><?php include('connect.php');
 $sql="SELECT * from book";
 $res=mysqli_query($con,$sql);
 ?>
 <!DOCTYPE html>
 <html>
 <head>
   <title>Booking Status</title>

 <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css" />
<link href="font-awesome-4.3.0/css/font-awesome.min.css" rel="stylesheet">

 </head>
 <body>
  <h1 align="center" >Booking Status</h1>
     <table >
       <tr style="padding: 40px; color:white;" align="center">
          <td style="background-color:rgba(0,0,0,0.6); padding: 40px; color:white;" align="center">Id</td>
          <td style="background-color:rgba(0,0,0,0.6); padding: 40px; color:white;" align="center">Bookdate</td>    
          <td style="background-color:rgba(0,0,0,0.6); padding: 40px; color:white;" align="center" >Booktime</td>

          <td style="background-color:rgba(0,0,0,0.6); padding: 40px; color:white;" align="center"> Seat</td>
          <td style="background-color:rgba(0,0,0,0.6); padding: 40px; color:white;" align="center"> Action</td>
       </tr>
       
       
  <?php
    while($row=mysqli_fetch_array($res))
	  {
   ?>
       <tr>
           <td><?php echo $row['id'];?></td>
           <td><?php echo $row['Bookdate'];?></td>
           <td><?php echo $row['Booktime'];?></td>
           <td><?php echo $row['seat'];?></td>
           <td><a class="btn btn-danger" href="del.php?id=<?php echo $row['id']?>" style="padding:10px;"onClick="return confirm('Are you sure want to delete?')"><span class="glyphicon glyphicon-trash"></span> Delete</a></td>
        
       </tr>
       <?php
    }?>
   </table>
    </div>
</div>
</body>
</html>
<!--?php
  
  }
     else
     {
      header("location:Dashboard.php?login= Your not allowed to access this area");
        exit();
    }
   ?-->