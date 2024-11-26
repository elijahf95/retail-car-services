<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact | Automotive Retail & Services</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&family=Roboto:wght@400&display=swap" rel="stylesheet">
    <style>

        body {
            font-family: 'Roboto', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f8f9fa;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        header {
            background-color: #3498db;
            color: white;
            padding: 20px 0;
            text-align: center;
            border-bottom: 4px solid #2980b9;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 15px 30px;
        }

/* Resize the logo only */
.logo {
    height: 70px;  /* Set the desired height for the logo */
    width: auto;   /* Automatically adjust the width to maintain aspect ratio */
}

        header h1 {
            font-family: 'Poppins', sans-serif;
            font-size: 2rem;
            font-weight: 700;
            margin: 0;
            text-align: left;
            flex-grow: 1;
        }

        nav ul {
            list-style-type: none;
            padding: 0;
            margin: 0;
            display: flex;
        }

        nav ul li {
            margin-left: 20px;
        }

nav ul li a {
    color: white;
    text-decoration: none;
    font-weight: 500;
    position: relative;
    padding-bottom: 5px; /* Space for the border */
    transition: color 0.3s;
}

nav ul li a:hover {
    color: #f1c40f; /* Change the text color on hover */
}

/* Border effect */
nav ul li a::before {
    content: '';
    position: absolute;
    bottom: 0;
    left: 0;
    width: 0;
    height: 2px; /* Border height */
    background-color: #f1c40f; /* Border color */
    transition: width 0.3s ease;
}

nav ul li a:hover::before {
    width: 100%; /* Make the border span the full width on hover */
}

        .page-heading {
            background-color: #3498db;
            color: white;
            padding: 30px 0; /* Reduced padding */
            text-align: center;
            margin-bottom: 20px; /* Added margin to reduce space */
        }

        .page-heading h1 {
            font-family: 'Poppins', sans-serif;
            font-size: 2rem; /* Adjusted font size */
            margin: 0;
        }

        .contact-form {
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 20px;
            margin: 20px auto;
            max-width: 800px;
            width: 90%;
        }

        .contact-form h2 {
            font-family: 'Poppins', sans-serif;
            font-size: 2rem;
            margin-bottom: 10px;
        }

        .contact-form span {
            display: block;
            color: #7f8c8d;
            font-size: 1rem;
            margin-bottom: 20px;
        }

        .contact-form fieldset {
            border: none;
            margin: 0 0 10px;
            padding: 0;
        }

        .contact-form input, .contact-form textarea {
            width: 100%;
            padding: 12px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 1rem;
        }

        .contact-form button {
            background-color: #3498db;
            color: white;
            border: none;
            padding: 12px 20px;
            border-radius: 5px;
            font-size: 1rem;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .contact-form button:hover {
            background-color: #2980b9;
        }

        .alert {
            padding: 15px;
            background-color: #f44336; /* Red */
            color: white;
            margin-bottom: 20px;
            border-radius: 5px;
        }

        .alert.success {
            background-color: #4CAF50; /* Green */
        }

        .alert.error {
            background-color: #f44336; /* Red */
        }

        iframe {
            border: 3px solid #3498db; /* Added border with blue color */
            border-radius: 8px; /* Rounded corners */
            width: 100%; /* Makes iframe responsive */
            max-width: 800px; /* Set a maximum width */
            height: 400px; /* Set a height */
            margin: 20px auto;
            display: block; /* Center the iframe */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Subtle shadow for depth */
        }

    </style>
</head>
<body>

<header>
<img src="images/logo1.png" alt="Logo" class="logo">
    <h1>Contact Us</h1>
    <nav>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="services.php">Services</a></li>
            <li><a href="retail.php">Retail</a></li>
            <li><a href="contact.php">Contact</a></li>
        </ul>
    </nav>
</header>

<div class="page-heading">
    <h1>Feel free to send us a message now!</h1>
</div>

<div class="contact-form">
    <h2>Customer<em>Service</em></h2>
    <span>Send us a message for maintenance, repairs, and warranty support.</span>

    <?php
    if (isset($_GET['error'])) {
        echo '<div class="alert error">' . htmlspecialchars($_GET['error']) . '</div>';
    } elseif (isset($_GET['success'])) {
        echo '<div class="alert success">' . htmlspecialchars($_GET['success']) . '</div>';
    }

    if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
        echo '<div class="alert error">You need to <a href="register.php">register or log in</a> to send a message.</div>';
    } else {
    ?>
        <form id="contactForm" method="post" action="contact_process.php">
            <fieldset>
                <input name="username" type="text" class="form-control" id="username" placeholder="Username" required>
            </fieldset>
            <fieldset>
                <input name="email" type="email" class="form-control" id="email" placeholder="E-Mail Address" required>
            </fieldset>
            <fieldset>
                <input name="subject" type="text" class="form-control" id="subject" placeholder="Subject" required>
            </fieldset>
            <fieldset>
                <textarea name="message" rows="6" class="form-control" id="message" placeholder="Your Message" required></textarea>
            </fieldset>
            <fieldset>
                <button type="submit" id="form-submit" class="filled-button">Send Message</button>
            </fieldset>
        </form>
    <?php
    }
    ?>
</div>

<iframe src="https://www.google.com/maps/embed?pb=!1m12!1m8!1m3!1d516.3781136772437!2d122.97960360975631!3d10.831701710234842!3m2!1i1024!2i768!4f13.1!2m1!1ssitio%20luguay!5e1!3m2!1sen!2sus!4v1726359888514!5m2!1sen!2sus" allowfullscreen></iframe>


</body>
</html>
