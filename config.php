<?php
$servername = "localhost";
$username = "root";
$password = "";
$db_name = "tech_stored";

$connection = new mysqli($servername, $username, $password, $db_name);

if(!$connection){
  // echo "Success..";
  die(mysqli_error($connection));
}
?>