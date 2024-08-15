<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Package</title>
    
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        .header {
            background-color: #333;
            color: #fff;
            padding: 10px 10px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            position: fixed;
            width: 100%;
            top: 0;
            left: 0;
            z-index: 1000;
            transition: background-color 0.3s;
        }

        .header .logo {
            font-size: 20px;
            font-weight: bold;
            text-decoration: none;
            color: #fff;
        }

        .navbar {
            display: flex;
            gap: 15px;
        }

        .navbar a {
            color: #fff;
            text-decoration: none;
            padding: 10px 15px;
            transition: background-color 0.3s;
        }

        .navbar a:hover {
            background-color: #575757;
            border-radius: 5px;
        }

        .menu-btn {
            display: none;
            font-size: 24px;
            color: #fff;
            background: none;
            border: none;
            cursor: pointer;
        }

        @media (max-width: 768px) {
            .navbar {
                display: none;
                flex-direction: column;
                width: 100%;
                background-color: #333;
                position: absolute;
                top: 60px;
                left: 0;
                text-align: center;
            }

            .navbar.active {
                display: flex;
            }

            .navbar a {
                color: #fff;
                text-decoration: none;
                padding: 10px 15px;
                transition: background-color 0.3s;
            }

            .navbar a:hover {
                background-color: #575757;
                border-radius: 5px;
            }

            .menu-btn {
                display: block;
            }
        }

        .heading {
            background: url('image/heading_2.jpg') no-repeat;
            background-size: cover;
            background-position: center;
            text-align: center;
            color: #fff;
            padding: 100px 0;
            margin-bottom: 40px;
            position: relative;
        }

        .heading::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: rgba(0, 0, 0, 0.5);
            z-index: 0;
        }

        .heading h1 {
            font-size: 48px;
            margin-bottom: 20px;
            z-index: 1;
            position: relative;
        }

        .packages {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-wrap: wrap;
            gap: 20px;
            padding: 20px;
            z-index: 1;
            position: relative;
        }

        .box {
            width: 300px;
            text-align: center;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s;
        }

        .box:hover {
            transform: translateY(-5px);
        }

        .box .image {
            overflow: hidden;
            border-radius: 8px;
            margin-bottom: 20px;
        }

        .box .image img {
            width: 100%;
            height: 200px;
            object-fit: cover;
            border-radius: 8px;
        }

        .box .content {
            color: #333;
        }

        .box h3 {
            font-size: 24px;
            margin-bottom: 10px;
        }

        .box p {
            font-size: 16px;
            line-height: 1.6;
            color: #666;
            margin-bottom: 20px;
        }

        .box .btn {
            display: inline-block;
            padding: 10px 20px;
            background-color: #333;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s, color 0.3s;
        }

        .box .btn:hover {
            background-color: #555;
        }

        .footer {
            background: url('image/footer-bg.jpg') no-repeat center center/cover;
            color: #fff;
            padding: 20px 0;
            text-align: center;
            position: relative;
            font-size: 14px;
            background-size: cover;
        }

        .footer::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: rgba(0, 0, 0, 0.7);
            z-index: 0;
        }

        .footer .box-container {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            position: relative;
            z-index: 1;
        }

        .footer .box {
            margin: 10px;
            flex: 1;
            min-width: 200px;
            background-color: transparent; 
        }

        .footer .box h3 {
            margin-bottom: 15px;
        }

        .footer .box a {
            color: #fff;
            text-decoration: none;
            display: block;
            margin: 5px 0;
            transition: color 0.3s;
        }

        .footer .box a:hover {
            color: #bbb;
        }

        .footer .box a .icon {
    margin-right: 8px;
}


        @media (max-width: 768px) {
            .navbar {
                display: none;
                flex-direction: column;
            }

            .menu-btn {
                display: block;
            }
        }
        
    </style>
</head>

<body>

<section class="header">
    <a href="home.php" class="logo">Travel.</a>
    <button class="menu-btn" onclick="toggleMenu()">☰</button>
    <nav class="navbar">
    <a href="home.php">home</a>
        <a href="about.php">about</a>
        <a href="package.php">package</a>
        <a href="book.php">book</a>
        <a href="gallery.php">gallery</a>
        <a href="login-reg.php">login</a>
        <a href="logout.php">logout</a>
    </nav>
</section>

<div class="heading">
    <div class="overlay"></div>
    <h1>Packages</h1>
</div>


<section class="packages">
    
    <div class="box">
        <div class="image">
            <img src="image/package_1.jpg" alt="Package 1">
        </div>
        <div class="content">
            <h3>Package 1</h3>
            <p>Travel makes one modest. You see what a tiny place you occupy in the world.</p>
            <p class="price">&#8377;6000</p>
            <a href="#" class="btn" onclick="showDetails('Package 1: Explore the natural beauty and tranquility of our exclusive package, including a visit to serene landscapes, luxurious accommodation, and guided tours.')">View Details</a>
        </div>
    </div>

    
    <div class="box">
        <div class="image">
            <img src="image/package_2.jpg" alt="Package 2">
        </div>
        <div class="content">
            <h3>Package 2</h3>
            <p>Travel makes one modest. You see what a tiny place you occupy in the world.</p>
            <p class="price">&#8377;6500</p>
            <a href="#" class="btn" onclick="showDetails('Package 2: Adventure awaits in this thrilling package, featuring hiking, zip-lining, and other exciting activities amidst stunning scenery.')">View Details</a>
        </div>
    </div>

    
    <div class="box">
        <div class="image">
            <img src="image/package_3.jpeg" alt="Package 3">
        </div>
        <div class="content">
            <h3>Package 3</h3>
            <p>Travel makes one modest. You see what a tiny place you occupy in the world.</p>
            <p class="price">&#8377;5000</p>
            <a href="#" class="btn" onclick="showDetails('Package 3: Immerse yourself in local culture with this package, which includes city tours, cultural performances, and traditional cuisine.')">View Details</a>
        </div>
    </div>

    
    <div class="box">
        <div class="image">
            <img src="image/img4.jpg" alt="Package 4">
        </div>
        <div class="content">
            <h3>Package 4</h3>
            <p>Travel makes one modest. You see what a tiny place you occupy in the world.</p>
            <p class="price">&#8377;6000</p>
            <a href="#" class="btn" onclick="showDetails('Package 4: Relax and rejuvenate with our wellness package, offering spa treatments, yoga sessions, and serene surroundings.')">View Details</a>
        </div>
    </div>

    
    <div class="box">
        <div class="image">
            <img src="image/img5.jpg" alt="Package 5">
        </div>
        <div class="content">
            <h3>Package 5</h3>
            <p>Travel makes one modest. You see what a tiny place you occupy in the world.</p>
            <p class="price">&#8377;4500</p>
            <a href="#" class="btn" onclick="showDetails('Package 5: Discover historical landmarks and ancient sites with this package, offering guided tours and educational experiences.')">View Details</a>
        </div>
    </div>

    
    <div class="box">
        <div class="image">
            <img src="image/img6.jpg" alt="Package 6">
        </div>
        <div class="content">
            <h3>Package 6</h3>
            <p>Travel makes one modest. You see what a tiny place you occupy in the world.</p>
            <p class="price">&#8377;6000</p>
            <a href="#" class="btn" onclick="showDetails('Package 6: Enjoy a family-friendly vacation with activities and entertainment suitable for all ages, ensuring fun and relaxation for everyone.')">View Details</a>
        </div>
    </div>
</section>


<section class="footer">
    <div class="box-container">
        <div class="box">
            <h3>quick links</h3>
            <a href="home.php"><span class="icon">›</span> home</a>
            <a href="about.php"><span class="icon">›</span> about</a>
            <a href="package.php"><span class="icon">›</span> package</a>
            <a href="gallery.php"><span class="icon">›</span> gallery</a>
            <a href="book.php"><span class="icon">›</span> book</a>
            
        </div>
        <div class="box">
            <h3>extra links</h3>
            <a href="#"><span class="icon">›</span> ask questions</a>
            <a href="#"><span class="icon">›</span> about us</a>
            <a href="#"><span class="icon">›</span> privacy policy</a>
            <a href="#"><span class="icon">›</span> terms of use</a>
        </div>
        <div class="box">
            <h3>contact info</h3>
            <a href="#"><span class="icon">📞</span> +91-978-245-9821</a>
            <a href="#"><span class="icon">📞</span> +91-786-994-2879</a>
            <a href="#"><span class="icon">✉️</span> nehamolsajeev@gmail.com</a>
            <a href="#"><span class="icon">📍</span> New Delhi, India 110034</a>
        </div>
    </div>
</section>

<script src="js/script.js"></script>
<script>

function showDetails(description) {
        alert(description);
    }
    </script>
</body>
</html>