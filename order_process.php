<?php
// Include database connection
include 'db_connection.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Sanitize and validate inputs
    $product = htmlspecialchars($_POST['product']);
    $price = (int)$_POST['price'];
    $name = htmlspecialchars($_POST['name']);
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $card = htmlspecialchars($_POST['card']);
    $expiry = htmlspecialchars($_POST['expiry']);
    $cvv = htmlspecialchars($_POST['cvv']);

    // Validate form fields (you can add more validation)
    if (empty($product) || empty($price) || empty($name) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        die("Error: Invalid input");
    }

    // Prepare SQL query to insert order into the database
    $sql = "INSERT INTO orders (product, price, name, email, card, expiry, cvv) VALUES (?, ?, ?, ?, ?, ?, ?)";
    
    if ($stmt = $conn->prepare($sql)) {
        // Bind parameters
        $stmt->bind_param('sisssss', $product, $price, $name, $email, $card, $expiry, $cvv);
        
        // Execute query
        if ($stmt->execute()) {
            // Redirect or show success message
            header("Location: success_page.php?name=" . urlencode($name) . "&product=" . urlencode($product));
            exit;
        } else {
            echo "Error: " . $stmt->error;
        }
        
        $stmt->close();
    } else {
        echo "Error: " . $conn->error;
    }
}

$conn->close();
?>
