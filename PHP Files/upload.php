<html>
<head>
<style type=text/css>
/* layout.css Style */
.upload-drop-zone {
  height: 200px;
  border-width: 2px;
  margin-bottom: 20px;
}

/* skin.css Style*/
.upload-drop-zone {
  color: #ccc;
  border-style: dashed;
  border-color: #ccc;
  line-height: 200px;
  text-align: center
}
.upload-drop-zone.drop {
  color: #222;
  border-color: #222;
}
</style>
<!-- jquery -->
<script src="assets/jquery.js"></script>
<!-- wow script -->
<script src="assets/wow/wow.min.js"></script>
<!-- boostrap -->
<script src="assets/bootstrap/js/bootstrap.js" type="text/javascript" ></script>
<!-- custom script -->
<script src="assets/script.js"></script>
<!-- bootstrap -->
<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css" />

<!-- animate.css -->
<link rel="stylesheet" href="assets/animate/animate.css" />
<link rel="stylesheet" href="assets/animate/set.css" />

<link rel="stylesheet" href="assets/style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">

<!--javascript-->


</head>
<body background='images/city.jpg'>
	<div class="topbar animated fadeInLeftBig"></div>
<!-- Header Starts -->
<div class="navbar-wrapper">
      
    </div>
<div class="container">
      <div class="panel panel-default">
        <div class="panel-body">

          <!-- Standar Form -->
          <h2 align='center'>Select files from your computer</h2>
          <form action="upload.php" method="POST" enctype="multipart/form-data" id="js-upload-form">
            <div class="form-inline">
              <div class="form-group">
                <input type="file" name="image" id="js-upload-files" multiple>
			  </div>
              <button type="submit" class="btn btn-default" id="js-upload-submit">Upload Files</button>
            </div>
          </form>

          <!-- Drop Zone -->
          <h2 align='center'>Or drag and drop files below</h2>     
            
<?php
$dbhost="localhost";
$dbuser="root";
$dbpass="";

//connection with database server
mysql_connect($dbhost,$dbuser,$dbpass) or die(mysql_error());


//connection with database
mysql_select_db("miniproject") or die(mysql_error());

//file properties
$file=$_FILES['image']['tmp_name'];

//to check if file has been selected
if(!isset($file))
  "Please select an image.";
else
{
 $image = addslashes(file_get_contents($_FILES['image']['tmp_name']));
 $image_name = addslashes($_FILES['image']['name']);
 $image_size = getimagesize($_FILES['image']['tmp_name']);
 
 if($image_size==FALSE)
  echo "That is not an image.";
 else
 {
  if (!$insert = mysql_query("INSERT INTO uploaded_images VALUES ('','$image_name','$image')"))
   echo "Problem uploading image.";
  else
  {
    $lastid = mysql_insert_id();
	echo "Image uploaded.<p />Your Image:<p /><img src=get.php?id=$lastid>";
  }
    
 }
}
?>
          </div>

		
        </div>

</div>
    </div> <!-- /container -->

<div class="col-md-6 col-md-offset-3">
    <a href="yourscraps.html"><button type="submit" name="submit" class="btn btn-primary">Done!!!!</button></a>
</div>
            
</body>
</html>
