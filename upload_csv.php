<?php
include 'db_config.php';

if ($_FILES['csv_file']['error'] === 0) {
    $file = fopen($_FILES['csv_file']['tmp_name'], 'r');

    while (($row = fgetcsv($file)) !== false) {
        $item_name = $row[0];
        $category = $row[1];
        $quantity = (int)$row[2];
        $price = (float)$row[3];
        $expiry_date = $row[4];

        $sql = "INSERT INTO pharmacy_items (item_name, category, quantity, price, expiry_date)
                VALUES ('$item_name', '$category', $quantity, $price, '$expiry_date')";
        $conn->query($sql);
    }

    fclose($file);
    echo "CSV uploaded successfully!";
} else {
    echo "File upload failed.";
}

$conn->close();
?>
