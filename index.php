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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" />

    <style>
        body {
            font-family: 'Roboto', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f6f7;
            color: #333;
            scroll-behavior: smooth;
        }

        header {
            background-color: #3498db;
            color: white;
            padding: 20px 0;
            text-align: center;
            border-bottom: 4px solid #2980b9;
            position: sticky;
            top: 0;
            z-index: 1000;
        }

        header h1 {
            font-family: 'Poppins', sans-serif;
            font-size: 2.5rem;
            font-weight: 700;
            margin: 10px 0;
            opacity: 0;
            animation: fadeIn 1s ease-in-out forwards;
        }

        @keyframes fadeIn {
            0% { opacity: 0; }
            100% { opacity: 1; }
        }

        /* Navigation Styles */
        nav {
            background-color: #3498db;
            position: sticky;
            top: 0;
            z-index: 1000;
        }

        nav ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 20px; /* Space between nav items */
        }

        nav ul li {
            display: inline;
        }

        nav ul li a {
            color: white;
            text-decoration: none;
            font-family: 'Poppins', sans-serif;
            font-weight: 600;
            font-size: 1.1rem;
            padding: 10px 20px;
            border-radius: 5px;
            transition: background-color 0.3s ease, transform 0.3s ease;
        }

        nav ul li a:hover {
            background-color: #f1c40f;
            color: #2c3e50;
            transform: translateY(-3px); /* Subtle hover lift */
        }

        nav ul li a.active {
            background-color: #2c3e50;
            color: white;
        }

        /* Responsive Design for Mobile */
        @media (max-width: 768px) {
            nav ul {
                flex-direction: column; /* Stack nav items vertically */
                gap: 10px;
            }

            nav ul li a {
                width: 100%;
                text-align: center;
            }
        }

        section {
            margin: 40px auto;
            padding: 30px;
            max-width: 800px;
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            text-align: center;
            opacity: 0;
            transform: translateY(20px);
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

        /* Logo Animation */
        .logo-animation {
            width: 150px; /* Adjust width as needed */
            height: auto; /* Maintain aspect ratio */
            animation: logoSpinZoom 2s ease-in-out forwards;
        }

        /* Keyframes for Logo Spin and Zoom */
        @keyframes logoSpinZoom {
            0% {
                transform: scale(0) rotate(0deg);
                opacity: 0;
            }
            50% {
                transform: scale(1.1) rotate(180deg);
                opacity: 0.7;
            }
            100% {
                transform: scale(1) rotate(360deg);
                opacity: 1;
            }
        }

    </style>
</head>
<body>

<header>
    <img src="images/logo1.png" alt="Automotive Retail & Services Logo" class="logo-animation"> <!-- Add your logo here -->
    <?php if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true): ?>
        <h1>Welcome, <?php echo htmlspecialchars($_SESSION['username']); ?> to Automotive Retail & Services!</h1>
    <?php else: ?>
        <h1 class="three-d-text">Welcome to Automotive Retail & Services!</h1>
    <?php endif; ?>
    <nav>
        <ul>
            <li><a href="index.php" class="active">Home</a></li>
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

<section data-aos="fade-up">
    <h2>Overview</h2>
    <p>At Automotive Retail & Services, we offer top-notch automotive products and services. Browse through our offerings to learn more.</p>
</section>

<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
<script>
    AOS.init({
        duration: 1200,
    });
</script>

</body>
</html>
