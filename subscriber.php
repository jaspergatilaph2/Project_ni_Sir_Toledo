<?php
include "config.php";

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if the email is set and not empty
    if (isset($_POST['email']) && !empty($_POST['email'])) {
        // Escape user input to prevent SQL injection
        $email = $connection->real_escape_string($_POST['email']);
        
        // Prepare SQL query to insert email into the database
        $stmt = $connection->prepare("INSERT INTO subscriber (email) VALUES (?)");
        $stmt->bind_param("s", $email);

        if ($stmt->execute()) {
            $msg = "New record created successfully";
        } else {
            $msg = "Error: " . $stmt->error;
        }
        
        // Close the statement
        $stmt->close();
    } else {
        $msg = "Email is required.";
    }
}
?>