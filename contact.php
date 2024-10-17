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
    <link rel="stylesheet" href="styles.css">
    <style>
        /* Center content vertically and horizontally */
.centered-container {
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
}
.page-heading {
    background-color: rgba(255, 255, 255, 0.1); /* Transparent background */
    border: 2px solid rgba(13, 146, 244, 0.8); /* Glowing outline */
    border-radius: 12px;
    padding: 30px;
    width: 80%;
    max-width: 600px;
    box-shadow: 0 0 15px 3px rgba(13, 146, 244, 0.5); /* Glow effect */
    color: #f5f5f5; /* Bright text */
    text-align: center;
    margin: 20px;
    backdrop-filter: blur(10px); /* Frosted glass effect */  
}

/* Contact form with glowing frame */
.contact-form {
    background-color: rgba(255, 255, 255, 0.1); /* Transparent background */
    border: 2px solid rgba(13, 146, 244, 0.8); /* Glowing outline */
    border-radius: 12px;
    padding: 30px;
    width: 80%;
    max-width: 600px;
    box-shadow: 0 0 15px 3px rgba(13, 146, 244, 0.5); /* Glow effect */
    color: #f5f5f5; /* Bright text */
    text-align: center;
    margin: 20px;
    backdrop-filter: blur(10px); /* Frosted glass effect */
}

/* Headings inside the contact form */
.contact-form h2 {
    font-family: 'Poppins', sans-serif;
    font-size: 2rem;
    color: #fff;
    margin-bottom: 10px;
}

.contact-form em {
    color: #00ccdd; /* Accent color */
}

/* Form field styling */
.contact-form input,
.contact-form textarea {
    width: 100%;
    padding: 12px;
    margin-bottom: 15px;
    border: 1px solid #ccc;
    border-radius: 5px;
    background-color: rgba(255, 255, 255, 0.2);
    color: #fff;
}

/* Submit button */
.contact-form button {
    background-color: #1e5b99;
    color: white;
    border: none;
    padding: 12px 20px;
    border-radius: 5px;
    font-size: 1rem;
    cursor: pointer;
    transition: background-color 0.3s;
}

.contact-form button:hover {
    background-color: #00ccdd;
}

/* Alert messages */
.alert {
    padding: 10px;
    margin-bottom: 10px;
    border-radius: 5px;
}

.alert.error {
    background-color: rgba(255, 69, 58, 0.8);
    color: white;
}

.alert.success {
    background-color: rgba(76, 175, 80, 0.8);
    color: white;
}

/* iFrame styling for responsive design */
iframe {
    width: 80%;
    max-width: 600px;
    height: 300px;
    border: none;
    margin-top: 20px;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
}

/* Navigation and header styling */
header {
    text-align: center;
    padding: 20px;
}

nav ul {
    list-style: none;
    padding: 0;
}

nav ul li {
    display: inline;
    margin: 0 10px;
}

nav ul li a {
    text-decoration: none;
    color: #1e5b99;
    font-weight: bold;
}

footer {
    text-align: center;
    padding: 10px;
    background-color: #1e5b99;
    color: white;
}
</style>
</head>
<body>

<header>
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

<center>
    <div class="centered-container">
        <div class="page-heading">
            <h1>Feel free to send us a message now!</h1>
        </div>

        <div class="contact-form">
            <h2>Customer <em>Service</em></h2>
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
                        <input name="username" type="text" id="username" placeholder="Username" required>
                    </fieldset>
                    <fieldset>
                        <input name="email" type="email" id="email" placeholder="E-Mail Address" required>
                    </fieldset>
                    <fieldset>
                        <input name="subject" type="text" id="subject" placeholder="Subject" required>
                    </fieldset>
                    <fieldset>
                        <textarea name="message" rows="6" id="message" placeholder="Your Message" required></textarea>
                    </fieldset>
                    <fieldset>
                        <button type="submit" id="form-submit">Send Message</button>
                    </fieldset>
                </form>
            <?php
            }
            ?>
        </div>

        <iframe src="https://www.google.com/maps/embed?pb=!1m12!1m8!1m3!1d516.3781136772437!2d122.97960360975631!3d10.831701710234842!3m2!1i1024!2i768!4f13.1!2m1!1ssitio%20luguay!5e1!3m2!1sen!2sus!4v1726359888514!5m2!1sen!2sus" allowfullscreen></iframe>
    </div>
</center>

<footer>
    <p>&copy; 2024 Automotive Retail & Services. All rights reserved.</p>
</footer>

</body>
</html>
