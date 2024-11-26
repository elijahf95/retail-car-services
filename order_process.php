<?php
// Include database connection
include 'db_connection.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Sanitize and validate inputs
    $product_name = htmlspecialchars($_POST['product']);
    $price = (float)$_POST['price'];
    $customer_name = htmlspecialchars($_POST['name']);
    $customer_email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $card = htmlspecialchars($_POST['card']);
    $expiry = htmlspecialchars($_POST['expiry']);
    $cvv = htmlspecialchars($_POST['cvv']);

    // Validate form fields
    if (empty($product_name) || $price <= 0 || empty($customer_name) || !filter_var($customer_email, FILTER_VALIDATE_EMAIL)) {
        header("Location: error_page.php?error=" . urlencode("Invalid input"));
        exit;
    }

    // Start a transaction
    $conn->begin_transaction();

    try {
        // Prepare SQL query to insert order into the database
        $sql = "INSERT INTO orders (customer_name, customer_email, product_name, price) VALUES (?, ?, ?, ?)";
        
        if ($stmt = $conn->prepare($sql)) {
            $stmt->bind_param('sssd', $customer_name, $customer_email, $product_name, $price);
            if (!$stmt->execute()) {
                throw new Exception($stmt->error);
            }
            $orderId = $stmt->insert_id; // Get the last inserted order ID
            $stmt->close();
        } else {
            throw new Exception($conn->error);
        }

        // Fetch the image of the purchased car
        $imageSql = "SELECT image FROM cars WHERE name = ?";
        if ($imageStmt = $conn->prepare($imageSql)) {
            $imageStmt->bind_param('s', $product_name);
            $imageStmt->execute();
            $imageStmt->bind_result($image);
            $imageStmt->fetch();
            $imageStmt->close();
        } else {
            throw new Exception($conn->error);
        }

        // Update the car status to sold
        $updateSql = "UPDATE cars SET is_sold = 1 WHERE name = ?";
        if ($updateStmt = $conn->prepare($updateSql)) {
            $updateStmt->bind_param('s', $product_name);
            if (!$updateStmt->execute()) {
                throw new Exception($conn->error);
            }
            $updateStmt->close();
        } else {
            throw new Exception($conn->error);
        }

        // Commit the transaction
        $conn->commit();

        // Redirect to success page
        header("Location: success_page.php?name=" . urlencode($customer_name) . "&product=" . urlencode($product_name) . "&image=" . urlencode($image) . "&order_id=" . $orderId);
        exit;

    } catch (Exception $e) {
        // Rollback the transaction in case of an error
        $conn->rollback();
        header("Location: error_page.php?error=" . urlencode($e->getMessage()));
        exit;
    }
}

$conn->close();
?>
