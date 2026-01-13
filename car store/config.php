<?php
$servername = "localhost";
$username = "root";
$password = ""; 
$dbname = "car_store_db";
$port="3306";

$conn = new mysqli($servername, $username, $password, $dbname,$port);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);}
?>