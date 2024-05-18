<?php
include "config.php";
$product_id = $_POST['product_id'];
$price = $_POST['price'];
$user_id = $_SESSION['user_id']; // Assuming the user's ID is stored in a session variable

// SQL to insert data into cart table
$sql = "INSERT INTO cart (user_id, product_id, price) VALUES (?, ?, ?)";

// Prepare and bind
$stmt = $conn->prepare($sql);
$stmt->bind_param("iid", $user_id, $product_id, $price);

if ($stmt->execute()) {
    echo "Product added to cart successfully!";
} else {
    echo "Error: " . $stmt->error;
}
?>