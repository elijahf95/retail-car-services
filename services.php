<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Services | Automotive Retail & Services</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&family=Roboto:wght@400&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f8f9fa;
            color: #333;
        }

        /* Header */
        header {
            background-color: #3498db;
            color: white;
            padding: 20px 0;
            text-align: center;
            border-bottom: 4px solid #2980b9;
            position: relative;
            animation: fadeIn 1.5s;
        }

        header img {
            max-width: 150px;
            animation: fadeInLogo 1.5s ease-out;
        }

        header h1 {
            font-family: 'Poppins', sans-serif;
            font-size: 2.5rem;
            font-weight: 700;
            margin: 0;
            animation: bounceIn 2s infinite alternate;
        }

        /* Navigation Bar */
        nav ul {
            list-style-type: none;
            padding: 0;
            margin: 10px 0 0;
            display: flex;
            justify-content: center;
            gap: 30px;
        }

        nav ul li a {
            color: white;
            text-decoration: none;
            font-weight: 500;
            transition: color 0.3s ease, transform 0.3s ease, text-shadow 0.3s ease;
            position: relative;
            font-size: 1.2rem;
        }

        nav ul li a:hover {
            color: #f1c40f; /* Change to desired hover color */
            transform: scale(1.1); /* Scale effect on hover */
            text-shadow: 0 0 10px #f1c40f, 0 0 20px #f1c40f; /* Glowing text effect */
        }

        nav ul li a:before {
            content: "";
            position: absolute;
            bottom: -4px;
            left: 0;
            width: 100%;
            height: 2px;
            background-color: #f1c40f;
            transform: scaleX(0);
            transition: transform 0.3s ease;
        }

        nav ul li a:hover:before {
            transform: scaleX(1);
        }

        section {
            margin: 20px auto;
            padding: 30px;
            max-width: 1000px;
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        section h2 {
            font-size: 2rem;
            font-weight: 600;
            color: #2c3e50;
            margin-bottom: 15px;
        }

        section p {
            font-size: 1.2rem;
            color: #7f8c8d;
            line-height: 1.6;
            margin: 0;
        }

        /* Card Layout */
        .card-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 20px;
            margin-top: 30px;
        }

        .card {
            width: 300px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            transition: transform 0.3s ease-in-out;
        }

/* Neon Border Animation */
.card:hover {
    transform: translateY(-10px);
    animation: neonBorder 1.5s infinite alternate;
}

/* Neon Border Keyframe */
@keyframes neonBorder {
    0% {
        border-color: #f7ba2b; /* Neon yellow */
        box-shadow: 0 0 5px #f7ba2b, 0 0 15px #f7ba2b, 0 0 25px #f7ba2b;
    }
    50% {
        border-color: #ea5358; /* Neon pink/red */
        box-shadow: 0 0 5px #ea5358, 0 0 15px #ea5358, 0 0 25px #ea5358;
    }
    100% {
        border-color: #f7ba2b; /* Neon yellow */
        box-shadow: 0 0 5px #f7ba2b, 0 0 15px #f7ba2b, 0 0 25px #f7ba2b;
    }
}

/* Hover Effect on the After Pseudo-Element */
.card:hover::after {
    opacity: 0;
}

        .card img {
            width: 100%;
            height: 300px;
            object-fit: cover;
        }

        .card-info {
            padding: 20px;
            text-align: center;
        }

        .card-info h4 {
            font-size: 1.5rem;
            color: #2c3e50;
            margin-bottom: 10px;
        }

        .card-info span {
            font-size: 1.1rem;
            color: #3498db;
            font-weight: 500;
        }

        .card-info p {
            font-size: 1rem;
            color: #7f8c8d;
            margin-top: 10px;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
            }
            to {
                opacity: 1;
            }
        }

        @keyframes fadeInLogo {
            from {
                opacity: 0;
                transform: translateY(-50px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes bounceIn {
            from {
                transform: scale(1);
            }
            to {
                transform: scale(1.1);
            }
        }
    </style>
</head>
<body>

<header>
    <img src="images/logo1.png" alt="Logo" />
    <h1>Our Services</h1>
    <nav>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="services.php">Services</a></li>
            <li><a href="retail.php">Retail</a></li>
            <li><a href="contact.php">Contact</a></li>
        </ul>
    </nav>
</header>

<section>
    <h2>What We Offer</h2>
    <p>We provide a wide range of services including car repairs, maintenance, and diagnostics. Our skilled technicians are here to ensure your vehicle runs smoothly and efficiently.</p>
</section>

<!-- Card Section -->
<div class="card-container">
    <div class="card">
        <img src="images/team3.png" alt="John Reno Bedonia">
        <div class="card-info">
            <h4>John Reno Bedonia</h4>
            <span>Chief Operating Officer</span>
            <p>Mr. Bedonia manages day-to-day operations and ensures that the company runs smoothly. He oversees the execution of the company's business plans.</p>
        </div>
    </div>

    <div class="card">
        <img src="images/team1.png" alt="William Miguel Berbanzana">
        <div class="card-info">
            <h4>William Miguel Berbanzana</h4>
            <span>Chief Executive Officer</span>
            <p>Mr. Berbenzana is the highest-ranking executive in the company and is primarily responsible for overseeing the overall operations and performance of the organization.</p>
        </div>
    </div>

    <div class="card">
        <img src="images/team2.png" alt="Larry James Labayen">
        <div class="card-info">
            <h4>Larry James Labayen</h4>
            <span>Chief Financial Officer</span>
            <p>Mr. Labayen is responsible for managing the company’s finances, including financial planning and risk management.</p>
        </div>
    </div>

    <div class="card">
        <img src="images/team4.png" alt="Genki Trocio">
        <div class="card-info">
            <h4>Genki Trocio</h4>
            <span>Chief Technology Officer</span>
            <p>Mr. Trocio is responsible for the company’s technological direction and strategy, particularly if the company has a significant tech component.</p>
        </div>
    </div>

    <div class="card">
        <img src="images/team5.png" alt="Elijah Fernandez">
        <div class="card-info">
            <h4>Elijah Fernandez</h4>
            <span>Chief Marketing Officer</span>
            <p>Mr. Fernandez heads the marketing department and oversees marketing strategies, advertising, branding, and customer outreach.</p>
        </div>
    </div>
</div>


</body>
</html>
