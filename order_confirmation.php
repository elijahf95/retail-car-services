<?php
// Retrieve product and price from the URL parameters, with fallbacks in case they are not set.
$product = isset($_GET['product']) ? htmlspecialchars($_GET['product']) : 'Unknown Product';
$price = isset($_GET['price']) ? (int)$_GET['price'] : 0;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment | Automotive Retail & Services</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&family=Roboto:wght@400&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f8f9fa;
        }

        header.main-header {
            background-color: #3498db;
            color: #fff;
            padding: 20px 0;
            text-align: center;
            border-bottom: 4px solid #2980b9;
            position: relative;
        }

        header.main-header h1 {
            font-family: 'Poppins', sans-serif;
            font-size: 2.5rem;
            font-weight: 700;
            margin: 0;
        }

        .back-button {
            position: absolute;
            left: 20px;
            top: 50%;
            transform: translateY(-50%);
            background-color: #2980b9;
            color: white;
            padding: 10px 20px;
            border-radius: 50px;
            font-size: 1rem;
            font-family: 'Poppins', sans-serif;
            text-decoration: none;
            display: inline-block;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .back-button:hover {
            background-color: #f1c40f;
            color: #2c3e50;
        }

        .payment-section {
            background-color: white;
            padding: 50px;
            margin: 40px auto;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-width: 600px;
            text-align: center;
        }

        .payment-section h2 {
            font-family: 'Poppins', sans-serif;
            font-size: 2rem;
            font-weight: 700;
            color: #2c3e50;
            margin-bottom: 20px;
        }

        .payment-section form {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .payment-section label {
            font-family: 'Roboto', sans-serif;
            font-size: 1.2rem;
            color: #2c3e50;
            margin-bottom: 10px;
        }

        .payment-section input[type="text"], 
        .payment-section input[type="email"], 
        .payment-section input[type="number"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border-radius: 5px;
            border: 1px solid #ddd;
            font-size: 1rem;
            font-family: 'Roboto', sans-serif;
        }

        .payment-section input[readonly] {
            background-color: #e9ecef;
        }

        .filled-button {
            background-color: #3498db;
            color: white;
            padding: 10px 20px;
            border-radius: 50px;
            font-size: 1rem;
            text-transform: uppercase;
            font-family: 'Poppins', sans-serif;
            text-decoration: none;
            display: inline-block;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .filled-button:hover {
            background-color: #2980b9;
            color: #fff;
        }

        footer {
            background-color: #3498db;
            color: white;
            text-align: center;
            padding: 10px 0;
            position: fixed;
            bottom: 0;
            width: 100%;
        }
    </style>
</head>
<body>

<header class="main-header">
    <h1>Complete Your Payment</h1>
    <a href="javascript:history.back()" class="back-button">← Back</a>
</header>

<section class="payment-section">
    <h2>Payment Information</h2>
    <p>You're about to purchase: <strong><?php echo $product; ?></strong></p>
    <p>Price: <strong>₱<?php echo number_format($price); ?></strong></p>
    
    <form action="order_process.php" method="POST">
        <!-- Hidden inputs to retain product and price details -->
        <input type="hidden" name="product" value="<?php echo htmlspecialchars($product); ?>">
        <input type="hidden" name="price" value="<?php echo (int)$price; ?>">
        
        <label for="name">Full Name</label>
        <input type="text" id="name" name="name" required>

        <label for="email">Email</label>
        <input type="email" id="email" name="email" required>

        <label for="card">Card Number</label>
        <input type="text" id="card" name="card" required placeholder="1234-5678-9012-3456">

        <label for="expiry">Expiry Date:</label>
        <input type="text" id="expiry" name="expiry" required placeholder="MM/YY">

        <label for="cvv">CVV:</label>
        <input type="text" id="cvv" name="cvv" required placeholder="123">

        <button type="submit" class="filled-button">Pay Now</button>
    </form>
</section>

<footer>
    <p>&copy; 2024 Automotive Retail & Services. All rights reserved.</p>
</footer>

</body>
</html>
