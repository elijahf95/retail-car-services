<?php
// order_confirmation.php
include 'db_connection.php'; // Include your database connection

// Get the car ID from the URL
$carId = isset($_GET['id']) ? intval($_GET['id']) : 0;

// Fetch the car details from the database
$sql = "SELECT * FROM cars WHERE id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param('i', $carId);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows === 0) {
    header("Location: retail.php"); // Redirect if car not found
    exit;
}

$car = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Confirmation | Automotive Retail & Services</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&family=Roboto:wght@400&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f8f9fa;
        }

        .navbar {
            background-color: #3498db;
            padding: 15px 0;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo {
            width: 100px;
            height: auto;
        }

        nav ul {
            list-style: none;
            padding: 0;
            margin: 0;
            display: flex;
        }

        nav ul li {
            margin: 0 15px;
        }

        nav ul li a {
            color: #ecf0f1;
            text-decoration: none;
            padding: 10px 15px;
            border-radius: 5px;
            transition: background-color 0.3s;
        }

        nav ul li a:hover {
            background-color: #2c3e50;
            color: white;
        }

        .confirmation-section {
            text-align: center;
            padding: 50px 20px;
            max-width: 800px;
            margin: 0 auto;
            background-color: white;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
        }

        .confirmation-section img {
            width: 100%;
            max-width: 400px;
            border-radius: 10px;
            margin-bottom: 20px;
        }

        .confirmation-section h1 {
            color: #2c3e50;
            margin-bottom: 10px;
        }

        .confirmation-section h2 {
            color: #3498db;
            margin: 10px 0;
        }

        .confirmation-section p {
            color: #7f8c8d;
            margin: 10px 0;
        }

        .confirmation-form {
            text-align: left;
            margin-top: 20px;
        }

        .confirmation-form label {
            font-weight: bold;
            display: block;
            margin: 10px 0 5px;
        }

        .confirmation-form input {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 14px;
        }

        .filled-button {
            display: inline-block;
            background-color: #3498db;
            color: white;
            padding: 12px 24px;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            text-decoration: none;
            transition: background-color 0.3s, transform 0.3s;
            cursor: pointer;
        }

        .filled-button:hover {
            background-color: #2980b9;
            transform: translateY(-2px);
        }
    </style>
</head>
<body>

<div class="navbar">
    <div class="container">
        <img src="images/logo1.png" class="logo" alt="Logo">
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="retail.php">Cars</a></li>
                <li><a href="order.php">Orders</a></li>
                <li><a href="contact.php">Contact</a></li>
            </ul>
        </nav>
    </div>
</div>

<div class="confirmation-section">
    <h1>Confirm Your Purchase</h1>
    <p>You are about to purchase:</p>
    <h2><?php echo htmlspecialchars($car['name']); ?></h2>
    <p>Price: ₱<?php echo number_format($car['price'], 2); ?></p>
    <img src="<?php echo htmlspecialchars($car['image']); ?>" alt="<?php echo htmlspecialchars($car['name']); ?>">

    <form action="order_process.php" method="POST" class="confirmation-form">
        <input type="hidden" name="product" value="<?php echo htmlspecialchars($car['name']); ?>">
        <input type="hidden" name="price" value="<?php echo htmlspecialchars($car['price']); ?>">

        <label for="name">Your Name:</label>
        <input type="text" id="name" name="name" required placeholder="John Doe">

        <label for="email">Your Email:</label>
        <input type="email" id="email" name="email" required placeholder="example@gmail.com">

        <label for="card">Card Number:</label>
        <input type="text" id="card" name="card" required placeholder="XXXX-XXXX-XXXX-XXXX">

        <label for="expiry">Expiry Date:</label>
        <input type="text" id="expiry" name="expiry" required placeholder="MM/YY">

        <label for="cvv">CVV:</label>
        <input type="text" id="cvv" name="cvv" required placeholder="123">

        <button type="submit" class="filled-button">Complete Purchase</button>
    </form>
</div>

</body>
</html>
