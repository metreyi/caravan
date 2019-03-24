<!DOCTYPE html>
<html>
<head>
	<title>Add a page</title>
</head>
<body style="padding-left: 400px; background-color: rgba(0,0,0,0.1);">
	      <form class="form-horizontal" name="add" action=" " onsubmit="return validate();">
  <div class="form-group">
    <label class="control-label col-sm-2" for="Text">Add Text:</label>
    <div class="col-sm-10">
      <textarea name="content" style="width: 300px; height: 300px;"></textarea>
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="Link">Add link:</label>
    <div class="col-sm-10" align="left">
      <input type="link" class="form-control" id="link"  name="link" placeholder="Enter link">
    </div>
    <div class="form-group">
    <label class="control-label col-sm-2" for="title">Title:</label>
    <div class="col-sm-10">
      <input type="Text" class="form-control" id="Title" name="title" placeholder="Enter Title">
    </div>
  </div>
  <div class="form-group"> 
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-default">Submit</button>
    </div>
  </div>
</form>
<script>
  	function validate()
  	{
  		if(document.add.content.value=="")
  		{
  				alert("Please provide content");
  				return false;

  		}
  		if(document.add.link.value=="")
  		{
  				alert("Please provide link");
  				return false;

  		}
  		if(document.add.title.value=="")
  		{
  				alert("Please provide title");
  				return false;

  		}
  	}
  </script>
  
</body>
</html>