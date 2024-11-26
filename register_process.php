<?php
$conn = new mysqli('localhost', 'root', '', 'automotive_db');

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];
$confirm_password = $_POST['confirm_password'];

// Check if passwords match
if ($password !== $confirm_password) {
    echo json_encode(['success' => false, 'message' => 'Passwords do not match!']);
    exit();
}

// Check if username or email already exists
$stmt = $conn->prepare("SELECT * FROM users WHERE username=? OR email=?");
$stmt->bind_param('ss', $username, $email);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    // Username or email already exists
    echo json_encode(['success' => false, 'message' => 'Username or Email is already taken.']);
    exit();
}

// Hash the password
$hashed_password = password_hash($password, PASSWORD_BCRYPT);

// Insert new user into the database
$sql = "INSERT INTO users (username, email, password) VALUES (?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param('sss', $username, $email, $hashed_password);

if ($stmt->execute()) {
    echo json_encode(['success' => true, 'message' => 'Registration successful! Please login.']);
} else {
    echo json_encode(['success' => false, 'message' => 'Error during registration. Please try again.']);
}

$stmt->close();
$conn->close();
?>
