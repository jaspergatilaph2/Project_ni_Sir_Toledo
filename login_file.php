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
            // echo "Login successful! Welcome " . $row['fullname'];
            // You can set session variables or redirect the user to another page here
            header("location: index.php");
            exit();
        } else {
            // Password does not match
            echo "Incorrect password!";
        }
    } else {
        // User not found
        echo "User not found!";
    }
}

?>
