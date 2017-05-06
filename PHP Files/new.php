<?php
session_start();
$dbhost="localhost";
$dbuser="root";
$dbpass="";

//connection with database server
mysql_connect($dbhost,$dbuser,$dbpass) or die(mysql_error());

//connection with database
mysql_select_db("miniproject") or die(mysql_error());

if(isset($_POST['submit']))
{
 $Email = $_POST['Email'];
 $Password = $_POST['Password'];
 check($Email, $Password);
}
function check($Email, $Password)
{
 $check = "SELECT * FROM sign_ups WHERE Email='$Email'";
 $check_q = mysql_query($check);
 
 if(mysql_num_rows($check_q) == 1)
 {
  login($Email, $Password); 
 }
 else
 {
  echo "incorrect Email";
 }
}
function login($Email, $Password)
{
 $check = "SELECT * FROM sign_ups WHERE Email='$Email' and Password='$Password'";
 $check_q = mysql_query($check);
 
 if(mysql_num_rows($check_q) == 1)
 {
  echo "correct Email and Password");
 }
 else
 {
  echo "incorrect Email and Password";
 }
}

?>