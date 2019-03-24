<?php
session_start();
 if(isset($_SESSION['email']))
 {
  ?><?php
 include('connect.php');
 $sql="select * from menu";
 $res=mysqli_query($con,$sql);
 ?>
 <!DOCTYPE html>
 <html>
 <head>
   <title></title>
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css" />
<link href="font-awesome-4.3.0/css/font-awesome.min.css" rel="stylesheet">

 </head>
 <body>
  <div class="panel panel-primary">
 <div class="panel-heading" style="background-color:#666; height:55px; font-weight:bold; font-size:16px;"> Menu</div>
 <div class="panel-body">
     <table class="table table-bordered table-condensed table-striped table-responsive">
       <tr style="background-color:#C63; color:white;" align="center">
          <td>Id</td>
          <td>Menu name</td>
          <td>Menu price</td>
          <td>Menu category</td>
          <td>Menu pic</td>
          <td colspan="2">Action</td>
          
       </tr>
       
       
  <?php
    while($row=mysqli_fetch_array($res))
	  {
   ?>
       <tr>
           <td><?php echo $row['id'];?></td>
           <td><?php echo $row['Name'];?></td>
           <td><?php echo $row['price'];?></td>
           <td><?php echo $row['category'];?></td>
           <td><?php echo $row['pic'];?></td>
           <td><a class="btn btn-primary" href="menuedit.php?id=<?php echo $row['id']?>" style="padding:10px;"><span class="glyphicon glyphicon-pencil"></span> Edit</a></td>
           <td><a class="btn btn-danger" href="userdelete.php?id=<?php echo $row['id']?>" style="padding:10px;"onClick="return confirm('Are you sure want to delete?')"><span class="glyphicon glyphicon-trash"></span> Delete</a></td>
        
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