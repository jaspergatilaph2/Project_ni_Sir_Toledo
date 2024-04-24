<?php
include "config.php";
if(isset($_POST["submit"])){
    $email = mysqli_real_escape_string($connection, $_POST["email"]);
    $fullname = mysqli_real_escape_string($connection, $_POST["fullname"]);
    $contact = mysqli_real_escape_string($connection, $_POST["contact"]);
    $password = md5($_POST["password"]);
    $confirm_password = md5($_POST["confirm_password"]);

    $select = "SELECT * FROM `users` WHERE `email` = '$email'";
    $result = mysqli_query($connection, $select);

    if(mysqli_num_rows($result) > 0){
        $err[] = "Message: User already exists!!!";
    }else{
        if($password != $confirm_password){
            $err[] = "Message: Password do not match!!!";
        }else{
            $insert = "INSERT INTO `users` (`email`, `fullname`, `contact`, `password`) VALUES('$email', '$fullname', '$contact', '$password')";
            mysqli_query($connection, $insert);
            header("Location: login.php");
            exit();
        }
    }
}
?>
