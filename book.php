<?php 
  include('connect.php');
  include"header.php";
  if (isset($_SESSION['mail'])) {
    $sql="SELECT * FROM `register` where `Mail`='".$_SESSION['mail']."'";
    $res=mysqli_query($con,$sql);
    $data=mysqli_fetch_array($res);
    if ($data) {
?>

<body>
 <section id="contact" class="section-padding" style="
    padding-top: 15px;
    padding-bottom: 1px;

    margin-bottom: 36px;

">
    <div class="container">
      <div class="row">
        <div class="col-md-12 text-center">
          <h1 class="header-h" style="color: red;">Book Your table</h1>
          <p class="header-p" style="color: red;">Caravan Corner 
            <br>The Qafila of Foodies!</p>
        </div>
      </div>
      <div class="row msg-row">
        <div class="row msg-row">
        <div class="col-md-4 col-sm-4 mr-15">
                   <div class="media-2">
            <div class="media-left">
              <div ><span class="glyphicon glyphicon-time"></span></div>
            </div>
            <div class="media-body">
              <h4 class="dark-blue regular">Opening Hours</h4>
              <p class="light-blue regular alt-p"> Monday to Friday 09.00am - 00:00am</p>
              <p class="light-blue regular alt-p">
                Saturday and Sunday 08:00am - 03.00am
              </p>
            </div>
          </div>
        </div>
        <div class="col-md-8 col-sm-8">
          <form  method="post"  class="contact-form" role="form">
            <div class="col-md-6 contact-form">
              <div class="form-group ">
                   <?php echo $data['Firstname'];?>                
              </div>
            </div>
            <div class="col-md-6 contact-form">
              <div class="form-group">
                <input type="date" class="form-control label-floating is-empty" name="bdate"  placeholder="Date"  />
                
              </div>
            </div>
            <div class="col-md-6 contact-form">
              <div class="form-group">
                 <?php echo $data['Mail'];?>
              </div>
            </div>
            <div class="col-md-6 contact-form">
              <div class="form-group">
                <input type="time" class="form-control label-floating is-empty" name="btime"  placeholder="Time"  />
                
              </div>
            </div>
            <div class="col-md-6 contact-form">
              <div class="form-group">
                 <?php echo $data['Phone'];?>
                </div>
            </div>
            <div class="col-md-12 contact-form">
              <div class="form-group">
                <input type="int" name="seat" class="form-control label-floating is-empty" placeholder="Enter no. seats">
                </div>
              </div>
            <div class="col-sm-offset-2 col-sm-10">
                <input type ="Submit" name="book" class="btn btn-default" value="Book Table">
            
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>
</div>
</section>
    <?php
    if (isset($_POST['book'])) {
    $bdate=$_REQUEST['bdate'];
    $btime=$_REQUEST['btime'];
    $seat=$_REQUEST['seat'];
     $sql="insert into book(`Bookdate`,`Booktime`,`seat`) values('$bdate','$btime','$seat')";
      $res=mysqli_query($con,$sql);
      if($res>=1){
      echo "<script>alert('successful')";
      header('location:menu.php');
    }else{
      echo "<script>alert('Unsccessful')";
      header('location:book.php');
    }
  }

}
}
else
{
echo "Booking failed! Login first!!";

}
include"footer.php";

?>