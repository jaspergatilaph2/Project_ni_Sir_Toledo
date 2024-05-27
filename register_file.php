<?php
include "config.php";
if(isset($_POST["submit"])){
    $email = mysqli_real_escape_string($connection, $_POST["email"]);
    $fullname = mysqli_real_escape_string($connection, $_POST["fullname"]);
    $contact = mysqli_real_escape_string($connection, $_POST["contact"]);
    $password = $_POST["password"];
    $confirm_password = $_POST["confirm_password"];

    // Hashing the password
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    $select = "SELECT * FROM `users` WHERE `email` = ?";
    $stmt = mysqli_prepare($connection, $select);
    mysqli_stmt_bind_param($stmt, "s", $email);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_store_result($stmt);

    if(mysqli_stmt_num_rows($stmt) > 0){
        $err[] = "Message: User already exists!!!";
    }else{
        if($password != $confirm_password){
            $err[] = "Message: Passwords do not match!!!";
        }else{
            // Insert user data
            $insert = "INSERT INTO `users` (`email`, `fullname`, `contact`, `password`) VALUES(?, ?, ?, ?)";
            $stmt = mysqli_prepare($connection, $insert);
            mysqli_stmt_bind_param($stmt, "ssss", $email, $fullname, $contact, $hashed_password);
            mysqli_stmt_execute($stmt);

            // Redirect after successful registration
            // header('Location: login.php');
            echo "<script>window.location.href='login_file.php';</script>";
            exit();
        }
    }
}
?>
