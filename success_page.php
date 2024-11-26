<?php
$name = isset($_GET['name']) ? htmlspecialchars($_GET['name']) : 'Customer';
$product = isset($_GET['product']) ? htmlspecialchars($_GET['product']) : 'Product';
$image = isset($_GET['image']) ? htmlspecialchars($_GET['image']) : 'default-image.jpg'; // Default image in case none is provided
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thank You | Automotive Retail & Services</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&family=Roboto:wght@400&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f8f9fa;
        }

        .filled-button {
            display: inline-block; /* Make it behave like a block-level element */
            background-color: #3498db; /* Button color */
            color: white; /* Text color */
            padding: 12px 24px; /* Button padding */
            border: none; /* Remove border */
            border-radius: 5px; /* Rounded corners */
            font-size: 16px; /* Font size */
            text-decoration: none; /* Remove underline */
            text-align: center; /* Center text */
            transition: background-color 0.3s, transform 0.3s; /* Smooth transition for hover effects */
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); /* Subtle shadow for depth */
        }

        .filled-button:hover {
            background-color: #2980b9; /* Darker shade on hover */
            transform: translateY(-2px); /* Lift effect on hover */
        }

        .filled-button:active {
            transform: translateY(0); /* Reset on click */
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2); /* Slightly lower shadow on click */
        }

        .success-section {
            text-align: center;
            padding: 50px;
            max-width: 600px;
            margin: 0 auto;
        }

        .success-section img {
            width: 100%;
            max-width: 400px;
            margin-bottom: 20px;
        }

        footer {
            background-color: #3498db;
            color: white;
            text-align: center;
            padding: 10px 0;
            position: relative;
            bottom: 0;
            width: 100%;
        }
    </style>
</head>
<body>

<div class="success-section">
    <h1>Thank You for Your Purchase, <?php echo $name; ?>!</h1>
    <p>Congratulations on your new car: <strong><?php echo $product; ?></strong>.</p>
    <img src="<?php echo $image; ?>" alt="<?php echo htmlspecialchars($product); ?>">
    <p>We appreciate your business and hope you enjoy your purchase. If you have any questions, feel free to contact us.</p>
    <a href="retail.php" class="filled-button">Continue Shopping</a>
</div>

<footer>
    <p>&copy; 2024 Automotive Retail & Services. All rights reserved.</p>
</footer>

</body>
</html>
