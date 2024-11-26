<?php
// Include database connection
include 'db_connection.php';

// Initialize an empty array to hold orders
$orders = [];

// Fetch orders from the database
try {
    // Prepare the SQL query to fetch all orders including the car image
    $sql = "SELECT o.id, o.customer_name, o.product_name, o.price, o.order_date, o.status, c.image 
            FROM orders o
            LEFT JOIN cars c ON o.product_name = c.name"; // Joining cars table to get the image
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $result = $stmt->get_result();

    // Fetch results as an associative array
    while ($row = $result->fetch_assoc()) {
        $orders[] = $row;
    }
} catch (mysqli_sql_exception $e) {
    echo "Error: " . $e->getMessage();
}

// Check for order cancellation
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['cancel_order_id'])) {
    $cancel_order_id = $_POST['cancel_order_id'];

    // Prepare SQL to update order status
    try {
        $update_sql = "UPDATE orders SET status = 'Canceled' WHERE id = ?";
        $update_stmt = $conn->prepare($update_sql);
        $update_stmt->bind_param("i", $cancel_order_id);
        $update_stmt->execute();

        // Redirect to the same page to refresh the orders list
        header("Location: order.php");
        exit;
    } catch (mysqli_sql_exception $e) {
        echo "Error updating order: " . $e->getMessage();
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Management | Automotive Retail & Services</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&family=Roboto:wght@400&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
            color: #333;
        }

        header.main-header {
            background-color: #2c3e50;
            color: #ecf0f1;
            padding: 20px 0;
            text-align: center;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        header.main-header h1 {
            margin: 0;
            font-size: 2.5em;
        }

        .back-button {
            margin: 20px;
            padding: 10px 20px;
            background-color: #3498db;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            text-decoration: none;
            display: inline-block;
            transition: background-color 0.3s;
        }

        .back-button:hover {
            background-color: #2980b9;
        }

        table {
            width: 80%;
            margin: 30px auto;
            border-collapse: collapse;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            background-color: #fff;
            border-radius: 8px;
            overflow: hidden;
        }

        th, td {
            padding: 15px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #2980b9;
            color: white;
            font-weight: bold;
        }

        td {
            color: #555;
        }

        tr:hover {
            background-color: #f2f2f2;
        }

        .button-cancel {
            background-color: #e74c3c;
            color: white;
            padding: 8px 12px;
            border-radius: 5px;
            border: none;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .button-cancel:hover {
            background-color: #c0392b;
        }

        .car-image {
            width: 80px; /* Set a width for the image */
            height: auto; /* Maintain aspect ratio */
            border-radius: 5px;
            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.2);
        }

        .no-image {
            text-align: center;
            color: #999;
        }

        footer {
            text-align: center;
            padding: 20px;
            background-color: #2c3e50;
            color: #ecf0f1;
            position: relative;
            bottom: 0;
            width: 100%;
        }
    </style>
</head>
<body>

<header class="main-header">
    <h1>Order Management</h1>
    <a href="retail.php" class="back-button">Back</a> <!-- Adjust the link to your previous page -->
</header>

<table>
    <tr>
        <th>Order ID</th>
        <th>Customer Name</th>
        <th>Product Name</th>
        <th>Image</th> <!-- Added column for the image -->
        <th>Price</th>
        <th>Order Date</th>
        <th>Status</th>
        <th>Actions</th>
    </tr>
    <?php if (!empty($orders)): ?>
        <?php foreach ($orders as $order): ?>
            <tr>
                <td><?php echo htmlspecialchars($order['id']); ?></td>
                <td><?php echo htmlspecialchars($order['customer_name']); ?></td>
                <td><?php echo htmlspecialchars($order['product_name']); ?></td>
                <td>
                    <?php if (!empty($order['image'])): ?>
                        <img src="<?php echo htmlspecialchars($order['image']); ?>" alt="Car Image" class="car-image">
                    <?php else: ?>
                        <div class="no-image">No Image Available</div>
                    <?php endif; ?>
                </td>
                <td>₱<?php echo htmlspecialchars(number_format($order['price'], 2)); ?></td>
                <td><?php echo htmlspecialchars($order['order_date']); ?></td>
                <td><?php echo htmlspecialchars($order['status']); ?></td>
                <td>
                    <?php if ($order['status'] == 'Pending'): ?>
                        <form method="POST" style="display:inline;">
                            <input type="hidden" name="cancel_order_id" value="<?php echo htmlspecialchars($order['id']); ?>">
                            <button type="submit" class="button-cancel">Cancel Order</button>
                        </form>
                    <?php endif; ?>
                </td>
            </tr>
        <?php endforeach; ?>
    <?php else: ?>
        <tr>
            <td colspan="8">No orders found.</td>
        </tr>
    <?php endif; ?>
</table>


</body>
</html>
