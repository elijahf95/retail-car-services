<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Automotive Retail & Services</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&family=Roboto:wght@400&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        header {
            background-color: #3498db;
            color: white;
            padding: 15px 0;
            text-align: center;
            width: 100%;
            position: fixed;
            top: 0;
            z-index: 1000;
        }

        section {
            margin-top: 100px;
            padding: 20px;
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            width: 100%;
            text-align: center;
        }

        h2 {
            font-family: 'Poppins', sans-serif;
            font-size: 1.8rem;
            margin-bottom: 20px;
            color: #333;
        }

        .form-group {
            margin-bottom: 15px;
            text-align: left;
        }

        label {
            font-size: 1rem;
            margin-bottom: 5px;
            display: block;
            color: #333;
        }

        input[type="text"], 
        input[type="password"] {
            width: 100%;
            padding: 12px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 1rem;
            box-sizing: border-box;
        }

        input[type="text"]:focus, 
        input[type="password"]:focus {
            border-color: #3498db;
            outline: none;
            box-shadow: 0 0 5px rgba(52, 152, 219, 0.5);
        }

        input[type="submit"] {
            background-color: #3498db;
            color: white;
            border: none;
            padding: 15px;
            border-radius: 5px;
            font-size: 1rem;
            cursor: pointer;
            transition: background-color 0.3s, transform 0.2s;
            width: 100%;
        }

        input[type="submit"]:hover {
            background-color: #2980b9;
        }

        input[type="submit"]:active {
            transform: scale(0.98);
        }

        .form-footer {
            margin-top: 15px;
            text-align: center;
        }

        .form-footer a {
            color: #3498db;
            text-decoration: none;
            font-weight: bold;
        }

        .form-footer a:hover {
            text-decoration: underline;
        }

        .notification {
            display: none;
            padding: 15px;
            margin-bottom: 20px;
            border-radius: 5px;
            font-size: 0.9rem;
            text-align: left;
        }

        .notification.error {
            background-color: #e74c3c;
            color: white;
        }

        .notification.success {
            background-color: #2ecc71;
            color: white;
        }
    </style>
</head>
<body>

<header>
    <h1>Automotive Retail & Services</h1>
</header>

<section>
    <h2>Login to Your Account</h2>

    <!-- Notification Element -->
    <div id="notification" class="notification"></div>

    <form id="loginForm">
        <div class="form-group">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>
        </div>
        
        <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
        </div>
        
        <input type="submit" value="Login">
        
        <div class="form-footer">
            <p>Don't have an account? <a href="register.php">Register here</a></p>
        </div>
    </form>
</section>

<script>
document.getElementById('loginForm').addEventListener('submit', function(event) {
    event.preventDefault(); // Prevent form submission

    const username = document.getElementById('username').value;
    const password = document.getElementById('password').value;
    const notification = document.getElementById('notification');

    // Clear any previous notifications
    notification.style.display = 'none';
    notification.classList.remove('error', 'success');

    // Create form data to send via AJAX
    const formData = new FormData();
    formData.append('username', username);
    formData.append('password', password);

    // Send an AJAX POST request to login_process.php
    fetch('login_process.php', {
        method: 'POST',
        body: formData
    })
    .then(response => response.json())
    .then(data => {
        if (data.success) {
            // Show success notification and redirect to home page
            notification.textContent = data.message;
            notification.classList.add('success');
            notification.style.display = 'block';

            setTimeout(() => {
                window.location.href = 'index.php'; // Redirect after 1 second
            }, 1000);
        } else {
            // Show error notification
            notification.textContent = data.message;
            notification.classList.add('error');
            notification.style.display = 'block';
        }
    })
    .catch(error => {
        // Handle general errors
        notification.textContent = 'An error occurred. Please try again.';
        notification.classList.add('error');
        notification.style.display = 'block';
    });
});
</script>

</body>
</html>
