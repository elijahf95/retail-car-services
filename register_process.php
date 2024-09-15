<?php
$conn = new mysqli('localhost', 'root', '', 'automotive_db');

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];
$confirm_password = $_POST['confirm_password'];

if ($password !== $confirm_password) {
    die("Passwords do not match!");
}

// Hash the password
$hashed_password = password_hash($password, PASSWORD_BCRYPT);

$sql = "INSERT INTO users (username, email, password) VALUES (?, ?, ?)";

$stmt = $conn->prepare($sql);
$stmt->bind_param('sss', $username, $email, $hashed_password);

if ($stmt->execute()) {
    header("Location: login.php?success=Registration successful! Please login.");
} else {
    echo "Error: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>
