<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>About Us</title>
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <style>
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
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
            background-size: cover;
            background-position: center;
            text-align: center;
            color: #fff;
            padding: 100px 0;
            margin-bottom: 40px;
            position: relative;
        }

        .heading h1 {
            font-size: 48px;
            margin-bottom: 20px;
        }

        
        .about {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-wrap: wrap;
            gap: 40px;
            padding: 20px;
        }

        .about-container {
            display: flex;
            gap: 40px;
            width: 100%;
            max-width: 1200px;
            margin: 0 auto;
        }

        .about-image {
            flex: 1;
            max-width: 400px;
        }

        .about-image img {
            width: 100%;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .about-content {
            flex: 1;
        }

        .why-choose-us {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            margin-bottom: 40px;
        }

        .why-choose-us h2 {
            font-size: 28px;
            margin: 10px 0;
            text-align: center;
        }

        .why-choose-us p {
            line-height: 1.6;
            color: #666;
            margin-bottom: 20px;
        }

        .why-choose-us ul {
            list-style: none;
            padding-left: 0;
        }

        .why-choose-us ul li {
            display: flex;
            align-items: center;
            margin-bottom: 10px;
        }

        .why-choose-us ul li i {
            color: #4caf50;
            margin-right: 10px;
        }

        .icons-container {
            display: flex;
            gap: 20px;
        }

        .icon {
            text-align: center;
            flex: 1;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .icon i {
            font-size: 36px;
            color: #4caf50;
            margin-bottom: 10px;
        }

        .icon span {
            display: block;
            font-size: 18px;
            font-weight: bold;
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

.reviews {
    margin-top: 40px;
}

.reviews h2 {
    
    text-align: center; 

}

.review {
    background-color: #fff;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    margin-bottom: 20px;
}

.reviewer {
    display: flex;
    align-items: center;
    margin-bottom: 10px;
}

.reviewer img {
    width: 50px;
    height: 50px;
    border-radius: 50%;
    margin-right: 10px;
}

.reviewer-info h3 {
    
    margin: 0;
    font-size: 18px;
}

.reviewer-info span {
    color: #4caf50;
}

.review p {
    line-height: 1.6;
    color: #666;
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

<div class="heading" style="background:url(image/heading_1.jpg) no-repeat; background-size: cover;">
    <h1>About Us</h1>
</div>



<section class="about">
    <div class="about-container">
        <div class="about-image">
            <img src="image/about2.jpg" alt="About Image">
        </div>

        <div class="about-content">
            <div class="why-choose-us">
                <h2>Why Choose Us?</h2>
                <p>At Travel., we are passionate about providing you with exceptional travel experiences that leave a lasting impression. Here’s why you should choose us for your next adventure:</p>

                <ul>
                    <li><i class="fas fa-check-circle"></i> Personalized Experiences: We believe in creating journeys that are as unique as you are. Our travel experts work closely with you to tailor every detail of your trip according to your preferences and interests.</li>

                    <li><i class="fas fa-check-circle"></i> Expert Guidance: With years of experience in the travel industry, our team offers expert guidance and advice to ensure your journey is seamless and stress-free. From choosing the right destination to planning activities, we’re here for you every step of the way.</li>

                    <li><i class="fas fa-check-circle"></i> Quality and Value: We are committed to offering you the highest quality travel experiences at competitive prices. We partner with trusted suppliers and accommodations to ensure your comfort and enjoyment throughout your trip.</li>

                    <li><i class="fas fa-check-circle"></i> Customer Satisfaction: Your satisfaction is our priority. We provide dedicated support before, during, and after your trip to ensure all your questions are answered and any issues are promptly resolved.</li>

                    <li><i class="fas fa-check-circle"></i> Local Expertise: Our extensive network of local partners and guides ensures you receive authentic experiences and insights into the culture and traditions of each destination.</li>

                    <li><i class="fas fa-check-circle"></i> Global Reach: Whether you’re looking to explore a remote village or a bustling city, we offer a wide range of destinations and packages to suit every traveler’s dream.</li>
                </ul>
            </div>

            <div class="icons-container">
                <div class="icon">
                    <i class="fas fa-map"></i>
                    <span>Top Destinations</span>
                </div>
                <div class="icon">
                    <i class="fas fa-hand-holding-usd"></i>
                    <span>Affordable Prices</span>
                </div>
                <div class="icon">
                    <i class="fas fa-headset"></i>
                    <span>24/7 Guide Services</span>
                </div>
            </div>

            <div class="reviews">
                <h2>Customer Reviews</h2>
                <div class="review">
                    <div class="reviewer">
                        <img src="image/reviewer1.jpg" alt="Reviewer">
                        <div class="reviewer-info">
                            <h3>Trisha jha</h3>
                            <span>★★★★★</span>
                        </div>
                    </div>
                    <p>"Travel. made our dream vacation a reality. Their attention to detail and customer service were impeccable. We can't wait to book our next trip with them!"</p>
                </div>

                <div class="review">
                    <div class="reviewer">
                        <img src="image/reviewer2.jpg" alt="Reviewer">
                        <div class="reviewer-info">
                            <h3>Shobit mehra</h3>
                            <span>★★★★☆</span>
                        </div>
                    </div>
                    <p>"We had an amazing experience with Travel. The itinerary was well-planned, and the local guides were very knowledgeable. The only improvement could be more flexibility in the booking process."</p>
                </div>
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

<script>
    function toggleMenu() {
        var navbar = document.querySelector('.navbar');
        navbar.classList.toggle('active');
    }
</script>

</body>
</html>
