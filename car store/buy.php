<?php
session_start();
include 'config.php';

if (!isset($_SESSION["user_id"])) {
    header("Location: login.php");
    exit();
}

$user_id = $_SESSION["user_id"];
$product = $_POST["product"];
$price = $_POST["price"];

$stmt = $conn->prepare("INSERT INTO orders (user_id, product_name, price) VALUES (?, ?, ?)");
$stmt->bind_param("isd", $user_id, $product, $price);
$stmt->execute();

echo "Purchase successful!";
?>