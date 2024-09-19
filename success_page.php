<?php
// Retrieve the user's name and product from the URL parameters
$name = isset($_GET['name']) ? htmlspecialchars($_GET['name']) : 'Valued Customer';
$product = isset($_GET['product']) ? htmlspecialchars($_GET['product']) : 'Unknown Product';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Successful | Automotive Retail & Services</title>
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
            background-color: #2ecc71;
            color: #fff;
            padding: 20px 0;
            text-align: center;
            border-bottom: 4px solid #3498db;
            position: relative;
        }

        header.main-header h1 {
            font-family: 'Poppins', sans-serif;
            font-size: 2.5rem;
            font-weight: 700;
            margin: 0;
        }

        .success-section {
            background-color: white;
            padding: 50px;
            margin: 40px auto;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-width: 600px;
            text-align: center;
        }

        .success-section h2 {
            font-family: 'Poppins', sans-serif;
            font-size: 2rem;
            font-weight: 700;
            color: #2c3e50;
            margin-bottom: 20px;
        }

        .success-section p {
            font-family: 'Roboto', sans-serif;
            font-size: 1.2rem;
            color: #2c3e50;
            margin-bottom: 20px;
        }

        .back-button {
            background-color: #3498db;
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
    <h1>Payment Successful</h1>
</header>

<section class="success-section">
    <h2>Thank you for your purchase, <?php echo $name; ?>!</h2>
    <p>We have received your payment for <strong><?php echo $product; ?></strong>.</p>
    <p>Your order will be processed shortly. We appreciate your business!</p>
    <a href="index.php" class="back-button">Go to Home</a>
</section>

<footer>
    <p>&copy; 2024 Automotive Retail & Services. All rights reserved.</p>
</footer>

</body>
</html>
