<?php
include "config.php";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Prepare SQL statement
    $sql = "SELECT `id`, `email`, `fullname`, `contact`, `password` FROM `users` WHERE `email` = '$email'";

    // Execute SQL query
    $result = $connection->query($sql);

    if ($result->num_rows > 0) {
        // User found, check password
        $row = $result->fetch_assoc();
        $hashed_password = $row['password']; // Get hashed password from database
        if (password_verify($password, $hashed_password)) {
            // Password matches, login successful
            // Set session variables
            session_start();
            $_SESSION['loggedIn'] = true;
            $_SESSION['fullName'] = $row['fullname'];
            
            // Redirect the user to another page
            header("Location: index.php");
            exit();
        } else {
            // Password does not match
            $err[] = "Message: Incorrect Password!!!";
        }
    } else {
        // User not found
        $err[] = "Message: User not found!!!!";
    }
}
?>