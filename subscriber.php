<?php
include "config.php";


// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Escape user input to prevent SQL injection
  $email = $connection->real_escape_string($_POST['email']);
  
  // SQL query to insert email into database
  $sql = "INSERT INTO subscriber (email) VALUES ('$email')";

  if ($connection->query($sql) === TRUE) {
      $err[] =  "New record created successfully";
  } else {
      $err[] =  "Error: " . $sql . "<br>";
  }
}
?>