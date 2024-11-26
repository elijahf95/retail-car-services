<?php
// Include database connection
include 'db_connection.php';

// Start session
session_start();

// Check if user is logged in
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit;
}

// Check if order ID is provided
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['order_id'])) {
    $order_id = (int)$_POST['order_id'];

    // Update order status to cancelled
    $sql = "UPDATE orders SET status = 'Cancelled' WHERE id = ? AND user_id = ?";
    if ($stmt = $conn->prepare($sql)) {
        $stmt->bind_param('ii', $order_id, $_SESSION['user_id']);
        if ($stmt->execute()) {
            header("Location: order.php?success=Order cancelled successfully.");
            exit;
        } else {
            header("Location: order.php?error=" . urlencode($stmt->error));
            exit;
        }
    } else {
        header("Location: order.php?error=" . urlencode($conn->error));
        exit;
    }
}

$conn->close();
