<?php
// Check if a session is already started before calling session_start()
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

include "config.php";

// Check if the form is submitted
if(isset($_POST['submit'])) {
    // Escape other form data
    $product_id = mysqli_real_escape_string($connection, $_POST['product_id']);
    $price = mysqli_real_escape_string($connection, $_POST['price']);

    // Check if image URL is provided
    if(isset($_POST['picture'])) {
        // Escape image URL
        $image_url = mysqli_real_escape_string($connection, $_POST['picture']);
        
        // Insert into cart table
        $sql = "INSERT INTO cart (product_id, price, picture) VALUES ('$product_id', '$price', '$image_url')";

        if(mysqli_query($connection, $sql)) {
            // Redirect to prevent form resubmission
            header("Location: ".$_SERVER['PHP_SELF']);
            exit();
            
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($connection);
        }
    } else {
        echo "Error: Image URL is missing.";
    }
}

?>
