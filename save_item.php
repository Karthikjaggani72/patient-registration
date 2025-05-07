<?php
include 'db_config.php';

$item_name = $_POST['item_name'];
$category = $_POST['category'];
$quantity = $_POST['quantity'];
$price = $_POST['price'];
$expiry_date = $_POST['expiry_date'];

$sql = "INSERT INTO pharmacy_items (item_name, category, quantity, price, expiry_date)
        VALUES ('$item_name', '$category', $quantity, $price, '$expiry_date')";

if ($conn->query($sql) === TRUE) {
    echo "Item saved successfully.";
} else {
    echo "Error: " . $conn->error;
}

$conn->close();
?>
