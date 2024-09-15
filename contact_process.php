<?php
session_start();

// Database connection settings
$servername = "localhost";  // Replace with your server name if needed
$db_username = "root";      // Replace with your MySQL username
$db_password = "";          // Replace with your MySQL password
$dbname = "automotive_db";  // Replace with your database name

// Create connection
$conn = new mysqli($servername, $db_username, $db_password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the user is logged in
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    // Redirect back to contact page with an error message
    header("Location: contact.php?error=Please log in to submit a message.");
    exit();
}

// Make sure the form was submitted with POST
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Sanitize form data
    $username = $conn->real_escape_string($_POST['username']);
    $email = $conn->real_escape_string($_POST['email']);
    $subject = $conn->real_escape_string($_POST['subject']);
    $message = $conn->real_escape_string($_POST['message']);

    // Prepare the SQL query
    $sql = "INSERT INTO contact_messages (username, email, subject, message) 
            VALUES ('$username', '$email', '$subject', '$message')";

    // Execute the query and handle success or failure
    if ($conn->query($sql) === TRUE) {
        header("Location: contact.php?success=Your message has been sent successfully.");
    } else {
        header("Location: contact.php?error=There was an error sending your message.");
    }
    $conn->close();
} else {
    echo "Form was not submitted correctly.";
}
?>
