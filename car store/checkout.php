<?php
include 'config.php'; // Connect to database

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'] ?? '';
    $phone = $_POST['phone'] ?? '';
    $address = $_POST['address'] ?? '';
    $card_number = $_POST['card_number'] ?? '';
    $exp_month = $_POST['exp_month'] ?? '';
    $exp_year = $_POST['exp_year'] ?? '';
    $cvv = $_POST['cvv'] ?? '';

    if (empty($name) || empty($phone) || empty($address) || empty($card_number) || empty($exp_month) || empty($exp_year) || empty($cvv)) {
        echo "❌ Please fill in all required fields!";
        exit();
    }

    // Insert data into the orders table
    $sql = "INSERT INTO orders (name, phone, address, card_number, exp_month, exp_year, cvv) VALUES (?, ?, ?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sssssss", $name, $phone, $address, $card_number, $exp_month, $exp_year, $cvv);

    if ($stmt->execute()) {
        echo "✅ Order placed successfully!";
    } else {
        echo "❌ Error: " . $stmt->error;
    }

    $stmt->close();
}
?>