<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Retail | Automotive Retail & Services</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&family=Roboto:wght@400&display=swap" rel="stylesheet">
    <style>

.main-header {
  background-color: #3498db;
  color: #fff;
  padding: 20px 0;
  text-align: center;
  border-bottom: 4px solid #2980b9;
}

.main-header h1 {
  font-family: 'Poppins', sans-serif;
  font-size: 2.5rem;
  font-weight: 700;
  margin: 0;
}

.nav-list {
  list-style: none;
  padding: 0;
  margin: 10px 0 0;
}

.nav-list li {
  display: inline;
  margin: 0 15px;
}

.nav-list a {
  font-family: 'Roboto', sans-serif;
  font-size: 1.2rem;
  color: #fff;
  text-decoration: none;
  font-weight: 500;
  transition: color 0.3s;
}

.nav-list a:hover {
  color: #f1c40f;
}

        body {
            font-family: 'Roboto', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f8f9fa;
        }

        header {
            background-color: #333;
            color: white;
            padding: 10px 0;
            text-align: center;
        }

        h4 {
      font-family: 'Poppins', sans-serif;
      font-size: 1.5rem;
      font-weight: 600;
      margin-bottom: 10px;
    }

    .service-item {
      background-color: #fff;
      border-radius: 8px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      overflow: hidden;
      margin-bottom: 30px;
      transition: transform 0.3s;
    }

    .service-item:hover {
      transform: translateY(-10px);
    }

    .service-item img {
      width: 100%;
      height: auto;
      display: block;
    }

    .down-content {
      padding: 20px;
      text-align: center;
    }

    .down-content span {
      font-family: 'Roboto', sans-serif;
      font-size: 1.2rem;
      color: #2c3e50;
      font-weight: 500;
    }

    .down-content p {
      font-size: 1rem;
      line-height: 1.6;
      color: #7f8c8d;
      margin-top: 10px;
    }

    .filled-button {
      background-color: #3498db;
      color: white;
      padding: 10px 20px;
      border-radius: 50px;
      font-size: 1rem;
      text-transform: uppercase;
      font-family: 'Poppins', sans-serif;
      text-decoration: none;
      display: inline-block;
      margin-top: 15px;
    }

    .filled-button:hover {
      background-color: #2980b9;
      color: #fff;
    }

    .services {
      padding: 50px 0;
    }

    .container {
      max-width: 1140px;
      margin: 0 auto;
      padding: 0 15px;
    }

    .row {
      display: flex;
      flex-wrap: wrap;
      justify-content: space-between;
    }

    .col-md-4 {
      width: 31%;
      margin-bottom: 30px;
    }

        nav ul {
            list-style-type: none;
            padding: 0;
        }
        nav ul li {
            display: inline;
            margin-right: 20px;
        }

        nav ul li a {
            color: white;
            text-decoration: none;
            font-weight: bold;
        }

        nav ul li a:hover {
            text-decoration: underline;
        }

        section {
            margin: 20px;
            padding: 20px;
            background-color: white;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
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


.products-section {
  background-color: #f5f5f5;
  padding: 50px 20px;
  text-align: center;
  border-radius: 8px;
  margin: 20px auto;
  max-width: 800px;
}

.products-section h2 {
  font-family: 'Poppins', sans-serif;
  font-size: 2rem;
  font-weight: 700;
  color: #2c3e50;
  margin-bottom: 20px;
}

.products-section p {
  font-family: 'Roboto', sans-serif;
  font-size: 1.2rem;
  color: #7f8c8d;
  line-height: 1.6;
  margin: 0;
}

    </style>
</head>
<body>

<header class="main-header">
    <h1>Retail Products</h1>
    <nav>
        <ul class="nav-list">
            <li><a href="index.php">Home</a></li>
            <li><a href="services.php">Services</a></li>
            <li><a href="retail.php">Retail</a></li>
            <li><a href="contact.php">Contact</a></li>
        </ul>
    </nav>
</header>


<section class="products-section">
    <h2>Our Products</h2>
    <p>Explore our wide range of automotive parts and accessories available for purchase.</p>
</section>


<div class="services">
  <div class="container">
    <div class="row">
      <div class="col-md-4">
        <div class="service-item">
          <img src="images/offer-1-720x480.jpg" alt="">
          <div class="down-content">
            <h4>2011 Ferrari California</h4>
            <div style="margin-bottom:10px;">
              <span>from <sup>₱</sup>20.5 Million</span>
            </div>
            <p>The Ferrari California is billed as the Ferrari you can use every day.</p>
            <a href="#" data-toggle="modal" data-target="#exampleModal" class="filled-button">Buy Now</a>
          </div>
        </div>
        <br>
      </div>

      <div class="col-md-4">
        <div class="service-item">
          <img src="images/offer-2-720x480.jpg" alt="">
          <div class="down-content">
            <h4>Honda Vezel Modulo 2014</h4>
            <div style="margin-bottom:10px;">
              <span>from <sup>₱</sup>1.6 Million</span>
            </div>
            <p>The Honda Vezel Modulo is a stylish compact SUV, known for its fuel efficiency and reliability, perfect for urban driving and weekend getaways.</p>
            <a href="#" data-toggle="modal" data-target="#exampleModal" class="filled-button">Buy Now</a>
          </div>
        </div>
        <br>
      </div>

      <div class="col-md-4">
        <div class="service-item">
          <img src="images/offer-3-720x480.jpg" alt="">
          <div class="down-content">
            <h4>Ford 2015 Edge Naranja Coches</h4>
            <div style="margin-bottom:10px;">
              <span>from <sup>₱</sup>2 Million</span>
            </div>
            <p>The Ford Edge is a midsize SUV offering comfort, space, and advanced technology for family road trips or long drives.</p>
            <a href="#" data-toggle="modal" data-target="#exampleModal" class="filled-button">Buy Now</a>
          </div>
        </div>
        <br>
      </div>

      <div class="col-md-4">
        <div class="service-item">
          <img src="images/offer-4-720x480.jpg" alt="">
          <div class="down-content">
            <h4>Volkswagen Jetta</h4>
            <div style="margin-bottom:10px;">
              <span>from <sup>₱</sup>1.5 Million</span>
            </div>
            <p>The Volkswagen Jetta is a sleek, fuel-efficient sedan known for its smooth handling and comfortable ride, perfect for daily commutes.</p>
            <a href="#" data-toggle="modal" data-target="#exampleModal" class="filled-button">Buy Now</a>
          </div>
        </div>
        <br>
      </div>

      <div class="col-md-4">
        <div class="service-item">
          <img src="images/offer-5-720x480.jpg" alt="">
          <div class="down-content">
            <h4>Volkswagen Golf Mk7</h4>
            <div style="margin-bottom:10px;">
              <span>from <sup>₱</sup>1.7 Million</span>
            </div>
            <p>The Volkswagen Golf Mk7 is a versatile hatchback, known for its agility and advanced technology, making it a great option for city driving.</p>
            <a href="#" data-toggle="modal" data-target="#exampleModal" class="filled-button">Buy Now</a>
          </div>
        </div>
        <br>
      </div>

      <div class="col-md-4">
        <div class="service-item">
          <img src="images/offer-6-720x480.jpg" alt="">
          <div class="down-content">
            <h4>2020 Ford Mustang GT Convertible</h4>
            <div style="margin-bottom:10px;">
              <span>from <sup>₱</sup>3.5 Million</span>
            </div>
            <p>The 2020 Ford Mustang GT Convertible delivers thrilling performance with a powerful V8 engine, perfect for open-air driving enthusiasts.</p>
            <a href="#" data-toggle="modal" data-target="#exampleModal" class="filled-button">Buy Now</a>
          </div>
        </div>
        <br>
      </div>
    </div>
  </div>
</div>


<footer>
    <p>&copy; 2024 Automotive Retail & Services. All rights reserved.</p>
</footer>

</body>
</html>
