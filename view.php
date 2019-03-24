<?php
session_start();
if(isset($_SESSION['email']))
 {
 include('connect.php');
 $sql="SELECT * from category";
 $res=mysqli_query($con,$sql);
 ?>
 <!DOCTYPE html>
 <html>
 <head>
   <title>view</title>

 <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css" />
<link href="font-awesome-4.3.0/css/font-awesome.min.css" rel="stylesheet">

 </head>
 <body>
  <h1 align="center" >View Categories</h1>
     <table >
       <tr style="padding: 40px; color:white;" align="center">
          <td style="background-color:rgba(0,0,0,0.6); padding: 40px; color:white;" align="center">Id</td>
          <td style="background-color:rgba(0,0,0,0.6); padding: 40px; color:white;" align="center">Category name</td>    
          <td style="background-color:rgba(0,0,0,0.6); padding: 40px; color:white;" align="center" colspan="2">Action</td>
       </tr>
       
       
  <?php
    while($row=mysqli_fetch_array($res))
	  {
   ?>
       <tr>
           <td><?php echo $row['id'];?></td>
           <td><?php echo $row['category'];?></td>
           <td><a class="btn btn-primary" href="edit.php?id=<?php echo $row['id']?>" style="padding:10px;"><span class="glyphicon glyphicon-pencil"></span> Edit</a></td>
           <td><a class="btn btn-danger" href="delete.php?id=<?php echo $row['id']?>" style="padding:10px;"onClick="return confirm('Are you sure want to delete?')"><span class="glyphicon glyphicon-trash"></span> Delete</a></td>
        
       </tr>
       <?php
    }?>
   </table>
    </div>
</div>
</body>
</html>
<?php
  
  }
     else
     {
      header("location:Dashboard.php?login= Your not allowed to access this area");
        exit();
    }
   ?>