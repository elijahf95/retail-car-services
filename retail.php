<?php
// retail.php
include 'db_connection.php'; // Include your database connection

// Fetch available cars from the database
$sql = "SELECT * FROM cars WHERE is_sold = 0"; // Only select unsold cars
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car Listings | Automotive Retail & Services</title>
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
            background-color: #3498db; /* Darker background for a more professional look */
            padding: 15px 0;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2); /* Subtle shadow for depth */
        }

        .container {
            max-width: 1200px; /* Maximum width to center the content */
            margin: 0 auto; /* Center the container */
            display: flex; /* Use flexbox for layout */
            justify-content: space-between; /* Space between logo and nav links */
            align-items: center; /* Vertically align items */
        }

        .logo {
            width: 100px;
            height: auto;
        }

        nav ul {
            list-style: none; /* Remove bullet points */
            padding: 0; /* Remove default padding */
            margin: 0; /* Remove default margin */
            display: flex; /* Use flexbox for horizontal layout */
        }

        nav ul li {
            margin: 0 15px; /* Space between items */
        }

        nav ul li a {
            color: #ecf0f1; /* Light color for links */
            text-decoration: none; /* Remove underline */
            padding: 10px 15px; /* Padding around links */
            border-radius: 5px; /* Rounded corners */
            transition: background-color 0.3s; /* Smooth background change on hover */
        }

        nav ul li a:hover {
            background-color: #2c3e50; /* Change background on hover */
            color: white; /* Change text color on hover */
        }

        .cart-icon {
            width: 24px;
            height: 24px;
            fill: #ecf0f1; /* Light color for icon */
            transition: fill 0.3s;
        }

        .cart-icon:hover {
            fill: #3498db; /* Change color on hover */
        }

        .car-listing {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            padding: 20px;
        }

        .car-card {
            border: 1px solid #ccc;
            border-radius: 5px;
            padding: 15px;
            margin: 10px;
            width: 300px;
            background-color: white;
            text-align: center;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            transition: transform 0.2s;
        }

        .car-card:hover {
            transform: translateY(-5px);
        }

        .car-image {
            width: 100%;
            height: auto;
            border-radius: 5px;
        }

        .filled-button {
            background-color: #3498db;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            text-decoration: none;
            transition: background-color 0.3s;
        }

        .filled-button:hover {
            background-color: #2980b9;
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
                <li>
                    <a href="order.php">
                        <!-- SVG Cart Icon -->
                        <svg class="cart-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                            <path d="M7 4h-2l-1 2h-2v2h2l3 8h10l3-8h2v-2h-2l-1-2h-2l-1 2h-10l-1-2zm0 2l1.3 2h7.4l1.3-2h-10zm2 12c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2zm8 0c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2z"/>
                        </svg>
                    </a>
                </li>
                <li><a href="contact.php">Contact</a></li>
            </ul>
        </nav>
    </div>
</div>

<h1 style="text-align: center; padding: 20px;">Available Cars for Sale</h1>

<div class="car-listing">
    <?php if ($result->num_rows > 0): ?>
        <?php while ($car = $result->fetch_assoc()): ?>
            <div class="car-card">
                <img src="<?php echo htmlspecialchars($car['image']); ?>" alt="<?php echo htmlspecialchars($car['name']); ?>" class="car-image">
                <h2><?php echo htmlspecialchars($car['name']); ?></h2>
                <p>Price: ₱<?php echo number_format($car['price'], 2); ?></p>
                <a href="order_confirmation.php?id=<?php echo $car['id']; ?>" class="filled-button">Buy Now</a>
            </div>
        <?php endwhile; ?>
    <?php else: ?>
        <p>No cars available for sale at the moment.</p>
    <?php endif; ?>
</div>

</body>
</html>

<?php
$conn->close(); // Close the database connection
?>
