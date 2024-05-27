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
    
    // Convert price to a format that MySQL can recognize
    $price = str_replace(',', '.', $_POST['price']); // Replace comma with dot
    $price = str_replace('.', '', substr($price, 0, -3)) . substr($price, -3); // Remove thousand separators

    // Escape the converted price
    $price = mysqli_real_escape_string($connection, $price);

    $quantity = mysqli_real_escape_string($connection, $_POST['quantity']);
    // Check if image URL is provided
    if(isset($_POST['picture'])) {
        // Escape image URL
        $image_url = mysqli_real_escape_string($connection, $_POST['picture']);
        
        // Insert into cart table
        $sql = "INSERT INTO cart (product_id, price, picture, quantity) VALUES ('$product_id', '$price', '$image_url', '$quantity')";

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
