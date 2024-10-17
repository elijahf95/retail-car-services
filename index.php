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
        /* Overall body background image */
        body {
            font-family: 'Roboto', sans-serif;
            margin: 0;
            padding: 0;

            /* Background image settings */
            background-image: url('images/interior.jpg'); /* High-res image */
            background-size: cover; /* Make sure the image covers the whole body */
            background-position: center;
            background-repeat: no-repeat; /* No image repetition */
            background-attachment: fixed; /* Keeps image fixed while scrolling */


            /* Use relative positioning to enable layering */
            position: relative;
            z-index: 1; /* Image stays at the back */
            color: #333;
        }

        /* Overlay with lower opacity */
        body::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            
            /* Overlay color with transparency (adjust opacity here) */
            background-color: rgba(0, 0, 0, 0.5); /* Black with 50% opacity */
            
            z-index: -1; /* Make sure the overlay is behind text but on top of the background image */
        }

header {
    position: relative; /* This ensures the pseudo-element is positioned correctly */
    background-image: url('images/forthepage.jpg');
    background-size: cover;
    background-position: center;
    color: #ffffff;
    padding: 40px 0;
    text-align: center;
    border-bottom: 4px solid #1e5b99;
    z-index: 1; /* Ensures the content is above the overlay */
}

header h1 {
    font-family: Arial, sans-serif; /* Use a font that matches your design */
    font-size: 24px; /* Adjust size as needed */
    color: #ffffff; /* Neon green color */
    text-align: center; /* Keep the text centered */
    text-shadow: 0 0 5px #0D92F4,   /* Small glow */
                 0 0 10px #0D92F4,  /* Medium glow */
                 0 0 20px #0D92F4,  /* Larger glow */
                 0 0 30px #1e5b99,  /* Outer glow in a darker blue color */
                 0 0 40px #1e5b99,
                 0 0 50px #1e5b99;
}

header::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.5); /* Black with 50% opacity, adjust as needed */
    z-index: -1; /* Ensures the overlay is below the content */
}


        header h4 {
            font-family: 'Poppins', sans-serif;
            font-size: 3rem;
            font-weight: 500;
            margin: 0;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.7);
            
        }

        h4 {
            margin-right: 50px;
            margin-left: 50px;
            font-family: Arial, sans-serif; /* Use a font that matches your design */
            font-size: 24px; /* Adjust size as needed */
            color: #ffffff; /* Neon green color */
            text-align: center; /* Keep the text centered */
            text-shadow: 0 0 5px #0D92F4,   /* Small glow */
                        0 0 10px #0D92F4,  /* Medium glow */
                        0 0 20px #0D92F4,  /* Larger glow */
                        0 0 30px #1e5b99,  /* Outer glow in a darker blue color */
                        0 0 40px #1e5b99,
                        0 0 50px #1e5b99;
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
            background-color: rgba(255, 255, 255, 0.9); /* Slightly transparent background for readability */
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

        /* Footer background image */
        footer {
            background-image: url('images/forthepage3.jpg'); /* Relative path for footer image */
            background-size: cover;
            background-position: center;
            color: white;
            text-align: center;
            padding: 10px 0;
            position: fixed;
            bottom: 0;
            width: 100%;
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

        section {
            border-left: 6px solid #1e5b99;
            border-right: 6px solid #1e5b99;
        }

        nav ul li a {
            border: 2px solid #ffffff;
        }


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

        .card-content h4 {
            font: bold 1rem sans-serif;
            border: 0.5rem outset pink;
            font-size: 1.5rem;
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

        /* From Uiverse.io by codebykay101 */ 
        .container {
        display: flex;
        justify-content: center;
        align-items: center;
        gap: 20px;
        }

        .loader {
        position: relative;
        width: 100px;
        height: 100px;
        background: rgba(45, 45, 45, 1);
        overflow: hidden;
        transform: rotate(calc(90deg * var(--i)));
        }

        .loader::before {
        content: "";
        position: absolute;
        width: 300px;
        height: 300px;
        background: radial-gradient(var(--clr), transparent);
        animation: animate 1.5s linear infinite;
        }

        .loader::after {
        content: "";
        position: absolute;
        inset: 2px;
        background: rgba(45, 45, 45, 0.9);
        }

        @keyframes animate {
        0% {
            transform: translate(-150px, -150px);
        }
        25% {
            transform: translate(0px, -150px);
        }
        50% {
            transform: translate(0px, 0px);
        }
        75% {
            transform: translate(-150px, 0px);
        }
        100% {
            transform: translate(-150px, -150px);
        }
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
<div class="container">
  <div class="loader" style="--clr:#01e100;--i:1;"></div>
  <div class="loader" style="--clr:#f50076;--i:2;"></div>
  <div class="loader" style="--clr:#00e6fd;--i:3;"></div>
</div>

<center>
            <h4>
                At Automotive Retail & Services, we provide high-quality automotive products and expert services to ensure your 
                vehicle performs at its best. Whether you need the latest technology or reliable repairs, our experienced team 
                is here to keep your car running smoothly and safely.
            </h4>
</center>




<footer>
    <p>&copy; 2024 Automotive Retail & Services. All rights reserved.</p>
</footer>

</body>
</html>
