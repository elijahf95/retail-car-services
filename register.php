<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - Automotive Retail & Services</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&family=Roboto:wght@400&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        header {
            background-color: #3498db;
            color: white;
            padding: 15px 0;
            text-align: center;
            position: sticky;
            top: 0;
            z-index: 1000;
        }

        section {
            flex: 1;
            margin: 20px auto;
            padding: 20px;
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            max-width: 500px;
            width: 90%;
        }

        .container {
            width: 100%;
            max-width: 400px;
            padding: 20px;
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            text-align: center;
            margin-top: 100px;
            margin-left: 38%;
        }

        h2 {
            font-family: 'Poppins', sans-serif;
            font-size: 1.8rem;
            margin-bottom: 20px;
            color: #333;
        }

        .form-group {
            margin-bottom: 15px;
        }

        label {
            font-size: 1rem;
            color: #333;
        }

        input[type="text"], 
        input[type="email"], 
        input[type="password"] {
            width: 100%;
            padding: 12px;
            margin-top: 5px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 1rem;
            box-sizing: border-box;
            transition: border-color 0.3s;
        }

        input[type="text"]:focus, 
        input[type="email"]:focus, 
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
            transition: background-color 0.3s;
            width: 100%;
        }

        input[type="submit"]:hover {
            background-color: #2980b9;
        }

        .form-footer {
            margin-top: 15px;
            font-size: 0.9rem;
        }

        .form-footer a {
            color: #3498db;
            text-decoration: none;
            font-weight: bold;
        }

        .form-footer a:hover {
            text-decoration: underline;
        }

        /* Notification Styles */
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

        /* Responsive Media Queries */
        @media screen and (max-width: 600px) {
            h2 {
                font-size: 1.5rem;
            }

            input[type="submit"] {
                font-size: 0.9rem;
                padding: 12px;
            }

            input[type="text"], 
            input[type="email"], 
            input[type="password"] {
                padding: 10px;
            }
        }
    </style>
</head>
<body>

<header>
    <h1>Automotive Retail & Services</h1>
</header>

<div class="container">
    <h2>Create Your Account</h2>

    <!-- Notification Element -->
    <div id="notification" class="notification"></div>

    <form id="registerForm">
        <div class="form-group">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" placeholder="Enter your username" required>
        </div>

        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" placeholder="Enter your email" required>
        </div>
        
        <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" placeholder="Enter your password" required>
        </div>
        
        <div class="form-group">
            <label for="confirm_password">Confirm Password:</label>
            <input type="password" id="confirm_password" name="confirm_password" placeholder="Confirm your password" required>
        </div>
        
        <input type="submit" value="Register">
        
        <div class="form-footer">
            <p>Already have an account? <a href="login.php">Login here</a></p>
        </div>
    </form>
</div>

<script>
document.getElementById('registerForm').addEventListener('submit', function(event) {
    event.preventDefault(); // Prevent form submission

    const username = document.getElementById('username').value;
    const email = document.getElementById('email').value;
    const password = document.getElementById('password').value;
    const confirm_password = document.getElementById('confirm_password').value;
    const notification = document.getElementById('notification');

    // Clear any previous notifications
    notification.style.display = 'none';
    notification.classList.remove('error', 'success');

    // Create form data to send via AJAX
    const formData = new FormData();
    formData.append('username', username);
    formData.append('email', email);
    formData.append('password', password);
    formData.append('confirm_password', confirm_password);

    // Send an AJAX POST request to register_process.php
    fetch('register_process.php', {
        method: 'POST',
        body: formData
    })
    .then(response => response.json())
    .then(data => {
        if (data.success) {
            // Show success notification and redirect to login page
            notification.textContent = data.message;
            notification.classList.add('success');
            notification.style.display = 'block';

            setTimeout(() => {
                window.location.href = 'login.php'; // Redirect after 1 second
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
