<?php
include "config.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (!isset($_POST["email"]) || !isset($_POST["fullname"]) || !isset($_POST["contact"]) || !isset($_POST["password"]) || !isset($_POST["confirm_password"])) {
        echo "<script>alert('Error: All form fields are required!');</script>";
        header('Location: login.php');
        exit();
    }

    $email = $_POST['email'];
    $fullname = $_POST['fullname'];
    $contact = $_POST['contact'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    // Check if email already exists
    $check_sql = "SELECT * FROM users WHERE email = '$email'";
    $result = mysqli_query($connection, $check_sql);
    if (mysqli_num_rows($result) > 0) {
        // echo "<script>alert('Error: Email already exists!');</script>"; 
        $err[] = "Error: Email already exists!";
        exit(); // Stop further execution
    }

    if ($password != $confirm_password) {
        // echo "<script>alert('Error: Passwords do not match!!!');</script>"; 
        $err[] = "Error: Passwords do not match!!!";
    } else {
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);
        $sql = "INSERT INTO users (email, fullname, contact, password) VALUES ('$email', '$fullname', '$contact', '$hashed_password')";
        mysqli_query($connection, $sql);

        // echo "<script>alert('Message: Successfully Registered!!!!');</script>"; 
        $err[] = "Message: Successfully Registered!!!!";
    }
}

?>