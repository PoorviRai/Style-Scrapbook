<?php
$dbhost="localhost";
$dbuser="root";
$dbpass="";

//connection with database server
mysql_connect($dbhost,$dbuser,$dbpass) or die(mysql_error());

//connection with database
mysql_select_db("miniproject") or die(mysql_error());

$id = addslashes($_REQUEST['id']);

$image = mysql_query("SELECT * FROM uploaded_images WHERE id=$id");
//to fetch associative array
$image = mysql_fetch_assoc($image);
$image = $image['image'];

header("Content-type: image/jpeg");

echo $image;

?>
