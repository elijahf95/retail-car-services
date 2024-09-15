<?php
session_start();

$conn = new mysqli('localhost', 'root', '', 'automotive_db');

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$username = $_POST['username'];
$password = $_POST['password'];

$stmt = $conn->prepare("SELECT * FROM users WHERE username=?");
$stmt->bind_param('s', $username);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();

    // Verify the password
    if (password_verify($password, $row['password'])) {
        $_SESSION['username'] = $row['username'];
        $_SESSION['loggedin'] = true;

        header("Location: index.php");
        exit();
    } else {
        echo "Invalid username or password!";
    }
} else {
    echo "Invalid username or password!";
}

$stmt->close();
$conn->close();
?>
