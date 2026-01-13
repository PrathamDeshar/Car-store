<?php
include 'config.php';

$result = $conn->query("SELECT * FROM orders");

echo "<h2>Customer Orders</h2>";
echo "<table border='1'>
<tr><th>Name</th><th>Phone</th><th>Address</th><th>Product</th><th>Price</th></tr>";

while ($row = $result->fetch_assoc()) {
    echo "<tr>
    <td>{$row['name']}</td>
    <td>{$row['phone']}</td>
    <td>{$row['address']}</td>
    </tr>";
}

echo "</table>";
?>
