<?php
session_start();
$servername = "localhost";
$db_username = "root";
$db_password = "";
$dbname = "automotive_db";

// Create connection
$conn = new mysqli($servername, $db_username, $db_password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$order_id = $_GET['order_id'];

// Fetch order details
$sql_order = "SELECT * FROM orders WHERE id = '$order_id'";
$result_order = $conn->query($sql_order);
$order = $result_order->fetch_assoc();

// Fetch order items
$sql_items = "SELECT * FROM order_items WHERE order_id = '$order_id'";
$result_items = $conn->query($sql_items);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Confirmation</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&family=Roboto:wght@400&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Roboto', sans-serif; background-color: #f8f9fa; }
        .order-summary { max-width: 800px; margin: 0 auto; padding: 20px; background-color: #fff; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); border-radius: 8px; }
        .order-summary h2 { font-family: 'Poppins', sans-serif; }
        table { width: 100%; border-collapse: collapse; }
        table th, table td { border: 1px solid #ddd; padding: 10px; }
        table th { background-color: #3498db; color: white; }
        footer { background-color: #3498db; color: white; text-align: center; padding: 10px 0; }
    </style>
</head>
<body>

<div class="order-summary">
    <h2>Order Confirmation</h2>
    <p>Order ID: <?php echo $order['id']; ?></p>
    <p>Total Amount: $<?php echo number_format($order['total_amount'], 2); ?></p>
    <p>Payment Status: <?php echo $order['payment_status']; ?></p>

    <h3>Order Items</h3>
    <table>
        <thead>
            <tr>
                <th>Product Name</th>
                <th>Quantity</th>
                <th>Price</th>
            </tr>
        </thead>
        <tbody>
            <?php while($item = $result_items->fetch_assoc()): ?>
            <tr>
                <td><?php echo htmlspecialchars($item['product_name']); ?></td>
                <td><?php echo $item['quantity']; ?></td>
                <td>$<?php echo number_format($item['price'], 2); ?></td>
            </tr>
            <?php endwhile; ?>
        </tbody>
    </table>
</div>

<footer>
    <p>&copy; 2024 Automotive Retail & Services. All rights reserved.</p>
</footer>

</body>
</html>

<?php $conn->close(); ?>
Frontend for Order Form (order.php)
Create an order form where users can select products and quantities.

html
Copy code
<form method="POST" action="order_process.php">
    <h2>Order Products</h2>
    <div class="order-item">
        <input type="text" name="items[0][product_name]" placeholder="Product Name" required>
        <input type="number" name="items[0][quantity]" placeholder="Quantity" required>
        <input type="number" step="0.01" name="items[0][price]" placeholder="Price" required>
    </div>

    <div class="order-item">
        <input type="text" name="items[1][product_name]" placeholder="Product Name">
        <input type="number" name="items[1][quantity]" placeholder="Quantity">
        <input type="number" step="0.01" name="items[1][price]" placeholder="Price">
    </div>

    <button type="submit">Place Order</button>
</form>