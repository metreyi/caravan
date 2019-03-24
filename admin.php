<html>
<head>
  <title>Admin</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="stt.css">
<style>
body {
    font-family: "Lato", sans-serif;
}

.sidenav {
    height: 100%;
    width: 200px;
    position: fixed;
    z-index: 1;
    top: 0;
    left: 0;
    background-color: #111;
    overflow-x: hidden;
    padding-top: 20px;
}

.sidenav a, .dropdown-btn btn-btn {
    padding: 6px 8px 6px 16px;
    text-decoration: none;
    font-size: 20px;
    color: #818181;
    display: block;
    border: none;
    background: none;
    width: 100%;
    text-align: left;
    cursor: pointer;
    outline: none;
}


.sidenav a:hover, .dropdown-btn btn-btn:hover {
    color: #f1f1f1;
}

.main {
    margin-left: 200px; 
    font-size: 20px; 
    padding: 0px 10px;
}
.active {
    background-color: green;
    color: white;
}

.dropdown-container {
    display: none;
    background-color: #262626;
    padding-left: 8px;
}

.fa-caret-down {
    float: right;
    padding-right: 8px;
}

@media screen and (max-height: 450px) {
    .sidenav {padding-top: 15px;}
    .sidenav a {font-size: 18px;}
}
</style>
</head>
<body style="color: grey; background-color: rgba(0,0,0,0.1);">
<div class="sidenav">
<h1 style="color:white;">Admin Panel</h1>
<h6 style="color:grey;">Hello Admin! </h6>
<a href="index.html" style="color:grey; font-size: 10px">View the site</a><a href="#" style="color:grey;font-size: 10px">Signout</a>

  <a href="admin.php">Dashboard</a>
 <button class="dropdown-btn btn-btn">Articles 
    <i class="fa fa-caret-down"></i>
  </button>
 <div class="dropdown-container">
    <a href="#">Write a new article</a>
    <a href="#">Manage articles</a>
    <a href="#">Manage Comments</a>
     <a href="#">Manage Categories</a>
  </div>
  <a href="#">Clients</a>
  <a href="#about">Pages</a>
  <a href="image.php">Image Gallery</a>
  <a href="#clients">Events calender</a>
  <a href="#contact">Setting</a>
</div>

<div class="main">
  <h1 style="color:black;">Welcome Admin</h1>
  <h4>What would you like to do?</h4>
  <div class="container-fluid">
    
  <div class="row" >
    <div class="col-sm-3">
      <button onclick="window.location.href='#'" type="button" class="btn btn-default"><img src="img/hj.jpg" style="width: 50px; height: 50px;"><br>Write an article.</div></button>
    <div class="col-sm-3"><button onclick="window.location.href='add.php'" type="button" class="btn btn-default"><img src="img/wr.jpg" style="width: 50px; height: 50px;"><br>Create a new page</div></button>
    <div class="col-sm-3"><button  data-toggle="modal" data-target="#myModal" type="button" class="btn btn-default"><img src="img/p.png" style="width: 50px; height: 50px;"><br>Upload an image</div></button>
    <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Upload a Picture</h4>
        </div>
        <div class="modal-body">
          <form>
  <label>Select picture to upload</label>
  <input type="img" name="picture"><button class="btn btn-btn">browse</button>
</form>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>


    <div class="col-sm-3"><button onclick="window.location.href='#'" type="button" class="btn btn-default"><img src="img/wa.png" style="width: 50px; height: 50px;"><br>Add an event. </div></button>
    
  </div>
</div>
</div>

<script>
var dropdown = document.getElementsByClassName("dropdown-btn btn-btn");
var i;

for (i = 0; i < dropdown.length; i++) {
  dropdown[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var dropdownContent = this.nextElementSibling;
    if (dropdownContent.style.display === "block") {
      dropdownContent.style.display = "none";
    } else {
      dropdownContent.style.display = "block";
    }
  });
}
</script>

</body>
</html> 
