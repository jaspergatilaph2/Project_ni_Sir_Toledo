<?php
include "config.php";
// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//     $email = $_POST['email'];
//     $password = $_POST['password'];

//     // Prepare SQL statement
//     $sql = "SELECT `user_id`, `email`, `fullname`, `contact`, `password` FROM `users` WHERE `email` = '$email'";

//     // Execute SQL query
//     $result = $connection->query($sql);

//     if ($result->num_rows > 0) {
//         // User found, check password
//         $row = $result->fetch_assoc();
//         $hashed_password = $row['password']; // Get hashed password from database
//         if (password_verify($password, $hashed_password)) {
//             // Password matches, login successful
//             // Set session variables
//             $_SESSION['loggedIn'] = true;
//             $_SESSION['fullName'] = $row['fullname'];
            
//             // Redirect the user to another page
//             echo "<script>window.location.href='index.php';</script>";
//             exit();
//         } else {
//             // Password does not match
//             $err[] = "Message: Incorrect Password!!!";
//         }
//     } else {
//         // User not found
//         $err[] = "Message: User not found!!!!";
//     }
// }

$err = [];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize and validate user input
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    $password = $_POST['password'];

    if (empty($email) || empty($password)) {
        $err[] = "Please provide both email and password!";
    } else {
        // Prepare SQL statement with parameterized query to prevent SQL injection
        $sql = "SELECT `user_id`, `email`, `fullname`, `contact`, `password` FROM `users` WHERE `email` = ?";

        // Prepare and bind parameterized query
        $stmt = $connection->prepare($sql);
        $stmt->bind_param("s", $email);

        // Execute SQL query
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            // User found, check password
            $row = $result->fetch_assoc();
            $hashed_password = $row['password']; // Get hashed password from database

            if (password_verify($password, $hashed_password)) {
                // Password matches, login successful
                // Start session
                session_start();
                $_SESSION['loggedIn'] = true;
                $_SESSION['fullName'] = $row['fullname'];

                // Redirect the user to another page
                // header("Location: index.php");
                echo "<script>window.location.href='index.php';</script>";
                exit();
            } else {
                // Password does not match
                $err[] = "Incorrect Password!";
            }
        } else {
            // User not found
            $err[] = "User not found!";
        }
    }
}
?>