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

        header {
            background-image: url('C:/xampp2/htdocs/newautomotive/newautomotive/car1.jpg');
            background-size: cover;
            background-position: center;
            color: yellow;
            padding: 40px 0;
            text-align: center;
            border-bottom: 4px solid #1e5b99;
        }

        header h1 {
            font-family: 'Poppins', sans-serif;
            font-size: 3rem;
            font-weight: 700;
            margin: 0;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.7);
        }

        nav ul {
            list-style-type: none;
            padding: 0;
            margin: 20px 0 0;
        }

        nav ul li {
            display: inline;
            margin-right: 20px;
        }

        nav ul li a {
            color: white;
            text-decoration: none;
            font-weight: 500;
            padding: 10px 15px;
            border-radius: 5px;
            background-color: #2980b9;
            transition: background-color 0.3s;
        }

        nav ul li a:hover {
            background-color: #fcfc0e;
        }

        section {
            margin: 20px auto;
            padding: 60px;
            max-width: 800px;
            background-color: #d6d8dc;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        section h2 {
            font-family: 'Poppins', sans-serif;
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


        footer {
            background-color: #1e5b99;
            color: white;
            text-align: center;
            padding: 10px 0;
            position: fixed;
            bottom: 0;
            width: 100%;
        }

        footer p {
            margin: 0;
            font-size: 0.9rem;
        }

        /* Additional Design Enhancements */
        body {
            background: linear-gradient(135deg, #1e5b99 30%, #3498db 70%);
            color: #333;
        }

        section {
            border-left: 6px solid #1e5b99;
            border-right: 6px solid #1e5b99;
        }

        nav ul li a {
            border: 2px solid #ffffff;
        }


        /* Flexbox styling for team section */
        .team {
            margin: 40px auto;
            max-width: 1200px;
            display: flex;
            flex-direction: column;
            align-items: center;
            color: #ffff;
        }

        .section-heading {
            text-align: center;
            margin-bottom: 20px;
        }

        .section-heading h2 {
            font-size: 2rem;
            margin-bottom: 10px;
        }

        .section-heading span {
            font-size: 1.1rem;
            color: #5c8fe7;
        }

        .team-items {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 20px;
        }

        .team-item {
            background-color: white;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            text-align: center;
            width: 30%;
            transition: transform 0.3s;
        }

        .team-item:hover {
            transform: translateY(-10px);
        }

        .team-item img {
            width: 100%;
            height: auto;
        }

        .down-content {
            padding: 20px;
        }

        .down-content h4 {
            font-family: 'Roboto', sans-serif;
            font-size: 1.5rem;
            color: #2c3e50;
            margin-bottom: 10px;
        }

        .down-content span {
            font-size: 1.1rem;
            color: #7f8c8d;
            display: block;
            margin-bottom: 10px;
        }

        .down-content p {
            font-size: 1rem;
            color: #95a5a6;
            line-height: 1.6;
        }

        @media (max-width: 768px) {
            .team-item {
                width: 100%;
            }
        }


        footer {
            background-color: #3498db;
            color: white;
            text-align: center;
            padding: 10px 0;
            position: fixed;
            bottom: 0;
            width: 100%;
        }

        footer p {
            margin: 0;
            font-size: 0.9rem;
        }
    </style>
</head>
<body>

<header>
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

<div class="team">
    <div class="section-heading">
        <h2>Our team members</h2>
    </div>
    <div class="team-items">
        <div class="team-item">
            <img src="images/team3.png" alt="">
            <div class="down-content">
                <h4>John Reno Bedonia</h4>
                <span>Chief Operating Officer</span>
                <p>Mr. Bedonia manages day-to-day operations and ensures that the company runs smoothly. He oversees the execution of the company's business plans.</p>
            </div>
        </div>
        <div class="team-item">
            <img src="images/team1.png" alt="">
            <div class="down-content">
                <h4>William Miguel Berbanzana</h4>
                <span>Chief Executive Officer</span>
                <p>Mr. Berbenzana is the highest-ranking executive in the company and is primarily responsible for overseeing the overall operations and performance of the organization. This involves a wide range of responsibilities, having the company’s retails and services.</p>
            </div>
        </div>
        <div class="team-item">
            <img src="images/team2.png" alt="">
            <div class="down-content">
                <h4>Larry James Labayen</h4>
                <span>Chief Financial Officer</span>
                <p>Mr. Labayen is responsible for managing the company’s finances, including financial planning, risk management, record-keeping, and financial reporting. He is often involved in strategic decision-making about resource allocation.</p>
            </div>
        </div>
        <div class="team-item">
            <img src="images/team4.png" alt="">
            <div class="down-content">
                <h4>Genki Trocio</h4>
                <span>Chief Technology Officer</span>
                <p>Mr. Trocio is responsible for the company’s technological direction and strategy, particularly if the company has a significant tech component. He often manages the development and implementation of technology initiatives.</p>
            </div>
        </div>
        <div class="team-item">
            <img src="images/team5.png" alt="">
            <div class="down-content">
                <h4>Elijah Fernandez</h4>
                <span>Chief Marketing Officer</span>
                <p>Mr. Fernandez heads the marketing department and oversees marketing strategies, advertising, branding, and customer outreach.</p>
            </div>
        </div>
    </div>
</div>

<footer>
    <p>&copy; 2024 Automotive Retail & Services. All rights reserved.</p>
</footer>

</body>
</html>
