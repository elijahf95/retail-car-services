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

// Check if the user is logged in
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header("Location: login.php?error=Please log in to place an order.");
    exit();
}

// Check if the form was submitted with POST
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $user_id = $_SESSION['user_id']; // Assuming you've stored the user ID in session
    $order_items = $_POST['items'];  // Array of items with product_name, quantity, and price

    // Calculate total amount
    $total_amount = 0;
    foreach ($order_items as $item) {
        $total_amount += $item['price'] * $item['quantity'];
    }

    // Insert order into 'orders' table
    $sql_order = "INSERT INTO orders (user_id, total_amount) VALUES ('$user_id', '$total_amount')";
    if ($conn->query($sql_order) === TRUE) {
        $order_id = $conn->insert_id; // Get the last inserted order ID

        // Insert each item into 'order_items' table
        foreach ($order_items as $item) {
            $product_name = $conn->real_escape_string($item['product_name']);
            $quantity = $item['quantity'];
            $price = $item['price'];
            $sql_item = "INSERT INTO order_items (order_id, product_name, quantity, price) 
                         VALUES ('$order_id', '$product_name', '$quantity', '$price')";
            $conn->query($sql_item);
        }

        // Redirect to a confirmation page
        header("Location: order_confirmation.php?order_id=$order_id");
    } else {
        echo "Error: " . $sql_order . "<br>" . $conn->error;
    }
    $conn->close();
} else {
    echo "Form was not submitted correctly.";
}
?>