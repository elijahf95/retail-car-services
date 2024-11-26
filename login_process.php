<?php
session_start();

$conn = new mysqli('localhost', 'root', '', 'automotive_db');

if ($conn->connect_error) {
    die(json_encode(['success' => false, 'message' => 'Database connection failed.']));
}

// Sanitize user inputs
$username = htmlspecialchars(trim($_POST['username']));
$password = htmlspecialchars(trim($_POST['password']));

// Prepare statement to select user by username
$stmt = $conn->prepare("SELECT * FROM users WHERE username=?");
$stmt->bind_param('s', $username);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();

    // Verify the password
    if (password_verify($password, $row['password'])) {
        // Set session variables upon successful login
        $_SESSION['username'] = $row['username'];
        $_SESSION['user_id'] = $row['id']; // assuming there's an 'id' field for users
        $_SESSION['loggedin'] = true;

        // Respond with success
        echo json_encode(['success' => true, 'message' => 'Login successful!']);
    } else {
        // Respond with incorrect password error
        echo json_encode(['success' => false, 'message' => 'Incorrect password.']);
    }
} else {
    // Respond with username not found error
    echo json_encode(['success' => false, 'message' => 'Username not found.']);
}

$stmt->close();
$conn->close();
?>
