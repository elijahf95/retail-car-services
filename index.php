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
            background-color: #3498db;
            color: white;
            padding: 20px 0;
            text-align: center;
            border-bottom: 4px solid #2980b9;
        }

        header h1 {
            font-family: 'Poppins', sans-serif;
            font-size: 2.5rem;
            font-weight: 700;
            margin: 0;
        }

        nav ul {
            list-style-type: none;
            padding: 0;
            margin: 10px 0 0;
        }

        nav ul li {
            display: inline;
            margin-right: 20px;
        }

        nav ul li a {
            color: white;
            text-decoration: none;
            font-weight: 500;
            transition: color 0.3s;
        }

        nav ul li a:hover {
            color: #f1c40f;
        }

        section {
            margin: 20px auto;
            padding: 30px;
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
            background-color: #3498db;
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
    </style>
</head>
<body>

<header>
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

<section>
    <h2>Overview</h2>
    <p>At Automotive Retail & Services, we offer top-notch automotive products and services. Browse through our offerings to learn more.</p>
</section>

<footer>
    <p>&copy; 2024 Automotive Retail & Services. All rights reserved.</p>
</footer>

</body>
</html>
