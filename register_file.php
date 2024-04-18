<?php
include "config.php";
// $current_page = 'login';
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



    if ($password != $confirm_password) {
        echo "<script>alert('Error: Passwords do not match!!!');</script>"; 
        // $errors[] = "Error: Passwords do not match!!!!";
    } else {
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);
        $sql = "INSERT INTO users (email, fullname, contact, password) VALUES ('$email', '$fullname', '$contact', '$hashed_password')";
        mysqli_query($connection, $sql);

        echo "<script>alert('Message: Successfully Registered!!!!');</script>"; 
        // $errors[] = "Message: Succesfully Registered!!!!";
    }
}
?>