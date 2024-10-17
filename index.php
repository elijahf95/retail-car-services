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
    <link rel="stylesheet" href="styles.css"> <!-- External CSS file -->
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
  <div class="loader" style="--clr:#FF1700;--i:1;"></div>
  <div class="loader" style="--clr:#FF8E00;--i:2;"></div>
  <div class="loader" style="--clr:#06FF00;--i:3;"></div>
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