<?php
// Start the session
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home | Automotive Retail & Services</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&family=Roboto:wght@400&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f8f9fa;
            color: #333;
        }

        header {
            background-image: url('C:/xampp2/htdocs/newautomotive/newautomotive/car1.jpg');
            background-size: cover;
            background-position: center;
            color: yellow;
            padding: 40px 0;
            text-align: center;
            border-bottom: 4px solid #1e5b99;
        }

        header h1 {
            font-family: 'Poppins', sans-serif;
            font-size: 3rem;
            font-weight: 700;
            margin: 0;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.7);
        }

        nav ul {
            list-style-type: none;
            padding: 0;
            margin: 20px 0 0;
        }

        nav ul li {
            display: inline;
            margin-right: 20px;
        }

        nav ul li a {
            color: white;
            text-decoration: none;
            font-weight: 500;
            padding: 10px 15px;
            border-radius: 5px;
            background-color: #2980b9;
            transition: background-color 0.3s;
        }

        nav ul li a:hover {
            background-color: #fcfc0e;
        }

        section {
            margin: 20px auto;
            padding: 60px;
            max-width: 800px;
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        section h2 {
            font-family: 'Poppins', sans-serif;
            font-size: 2rem;
            font-weight: 600;
            color: #2c3e50;
            margin-bottom: 15px;
        }

        section p {
            font-size: 1.2rem;
            color: #7f8c8d;
            line-height: 1.6;
            margin: 0;
        }

        footer {
            background-color: #1e5b99;
            color: white;
            text-align: center;
            padding: 10px 0;
            position: fixed;
            bottom: 0;
            width: 100%;
        }

        footer p {
            margin: 0;
            font-size: 0.9rem;
        }

        /* Additional Design Enhancements */
        body {
            background: linear-gradient(135deg, #1e5b99 30%, #3498db 70%);
            color: #333;
        }

        section {
            border-left: 6px solid #1e5b99;
            border-right: 6px solid #1e5b99;
        }

        nav ul li a {
            border: 2px solid #ffffff;
        }

        <style>
    /* Existing styles... */

    /* Style for the overview card */
    .card {
    background-color: #ffffff; /* Light background for readability */
    border: px solid #3498db; /* Primary blue border */
    border-radius: 15px;
    padding: 30px;
    margin: 40px auto;
    max-width: 800px;
    box-shadow: 0 8px 16px rgba(0, 0, 0, 0.15); /* Soft shadow for depth */
    text-align: center;
    color: #333; /* Darker text for contrast */
    position: relative;
    overflow: hidden; /* Ensures pseudo-elements don’t exceed card bounds */
}


.card-content h1 {
    font: bold 1rem sans-serif;
    border: 0.5rem outset pink;
    font-size: 2.5rem;
    font-weight: 700;
    color: #ffff; /* Complementary color for header */
    margin-bottom: 15px;
    text-transform: uppercase;
    letter-spacing: 2px;

}

.card-content h2 {
    font-family: 'Roboto', sans-serif;
    font-size: 1.1rem;
    font-weight: 400;
    color: #ffff;
    line-height: 1.8;
    margin: 0;
    text-align: justify;
}

        /* Style for the image near the footer */
        .image-container {
            text-align: center;
            margin-bottom: 20px;
        }

        .image-container img {
            width: 150px; /* Adjust size of image */
            height: auto;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .title {
            color: #ffff;


        }
    </style>
</head>
<body>

<header>
    <?php if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true): ?>
        <h1>Welcome, <?php echo htmlspecialchars($_SESSION['username']); ?> to Automotive Retail & Services!</h1>
    <?php else: ?>
        <h1>Welcome to Automotive Retail & Services!</h1>
    <?php endif; ?>
    <nav>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="services.php">Services</a></li>
            <li><a href="retail.php">Retail</a></li>
            <li><a href="contact.php">Contact</a></li>
            <?php if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true): ?>
                <li><a href="logout.php">Logout</a></li>
            <?php else: ?>
                <li><a href="login.php">Login</a></li>
                <li><a href="register.php">Register</a></li>
            <?php endif; ?>
        </ul>
    </nav>
</header>

<div class="title"> <center>
                <h1>OVERVIEW</h1>
            </div> </center>
<center>
    <div class="card">
        <div class="card-content">
    
            <h1> <fieldset> 
                At Automotive Retail & Services, we offer top-notch automotive products and services,
                designed to meet the highest standards of quality and performance. Whether you're looking
                for the latest in automotive technology or seeking expert service and repairs, our experienced
                team is dedicated to ensuring your vehicle runs smoothly and safely.
            </h1> </fieldset>
        </div>
    </div>
</center>




<footer>
    <p>&copy; 2024 Automotive Retail & Services. All rights reserved.</p>
</footer>

</body>
</html>
