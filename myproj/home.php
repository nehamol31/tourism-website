<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
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

    .footer .box a {
        display: flex;
        align-items: center;
        justify-content: center;
        position: relative;
    }

    .footer .box a:hover {
        color: #bbb;
    }

    .footer .box a span.icon {
        margin-right: 8px;
    }

    .footer .box a .description {
        display: none;
        position: absolute;
        top: 110%;
        left: 50%;
        transform: translateX(-50%);
        width: 200px;
        padding: 10px;
        background-color: rgba(0, 0, 0, 0.8);
        border-radius: 5px;
        font-size: 12px;
        z-index: 10;
    }

    .footer .box a:hover .description {
        display: block;
    }

    .offer-section {
        background: url('image/offer-bg.jpg') no-repeat center center/cover;
        padding: 40px 0;
        text-align: center;
        color: #fff;
        background-size: cover;
        position: relative;
    }

    .offer-section::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background-color: rgba(0, 0, 0, 0.5);
        z-index: 0;
    }

    .offer-section .content {
        position: relative;
        z-index: 1;
    }

    .offer-section h2 {
        font-size: 36px;
        margin-bottom: 20px;
    }

    .offer-section p {
        font-size: 18px;
        margin-bottom: 20px;
    }

    .offer-section .btn {
        display: inline-block;
        padding: 10px 20px;
        background-color: #333;
        color: #fff;
        text-decoration: none;
        border-radius: 5px;
        transition: background-color 0.3s;
    }

    .offer-section .btn:hover {
        background-color: #555;
    }

    .home-packages .box-container {
        display: flex;
        justify-content: center;
        flex-wrap: wrap;
        gap: 20px;
    }

    .home-packages .box {
        background-color: #fff;
        border-radius: 10px;
        overflow: hidden;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        max-width: 300px;
        margin: 20px;
        text-align: center;
    }

    .home-packages .box .image {
        width: 100%;
        height: 200px;
        overflow: hidden;
    }

    .home-packages .box .image img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .home-packages .box .content {
        padding: 20px;
    }

    .home-packages .box .content h3 {
        font-size: 18px;
        margin-bottom: 10px;
    }

    .home-packages .box .content p {
        font-size: 14px;
        margin-bottom: 15px;
        color: #555;
    }

    .home-packages .box .btn {
        display: inline-block;
        padding: 10px 20px;
        background-color: #333;
        color: #fff;
        text-decoration: none;
        border-radius: 5px;
        transition: background-color 0.3s;
    }

    .home-packages .box .btn:hover {
        background-color: #555;
    }

    .load-more {
        text-align: center;
        margin-top: 20px;
    }
    .home-packages {
    text-align: center;
}

.home-packages .heading {
    font-size: 36px;
    margin-bottom: 20px;
}
.home-about {
    padding: 40px;
    display: flex;
    justify-content: center;
    align-items: center;
}

.home-about .box-container {
    background-color: #fff;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    display: flex;
    max-width: 800px;
    width: 100%;
    overflow: hidden;
}

.home-about .image {
    flex: 1;
}

.home-about .image img {
    width: 100%;
    height: auto;
}

.home-about .content {
    flex: 1;
    padding: 20px;
}

.home-about .content h3 {
    font-size: 24px;
    margin-bottom: 20px;
}

.home-about .content p {
    font-size: 16px;
    line-height: 1.6;
    margin-bottom: 20px;
}
.services {
    text-align: center; 
    padding: 40px;
}

.services .heading-title {
    font-size: 36px;
    margin-bottom: 20px;
}

.services .box-container {
    display: flex;
    justify-content: center; 
    flex-wrap: wrap;
    gap: 20px; 
}

.services .box {
    width: 150px;
    margin: 20px; 
    text-align: center; 
}


.services .box img {
    width: 160px;
    height: 160px;
}
</style>
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
    <section class="home">
        <div class="home-slider">
            <div class="slide active" style="background:url(image/home1.jpg) no-repeat center center/cover;">
                <div class="content">
                    <span>explore, discover, travel</span>
                    <h3>Travel around the world</h3>
                    <a href="package.php" class="btn">discover more</a>
                </div>
            </div>
            <div class="slide" style="background:url(image/home2.jpg) no-repeat center center/cover;">
                <div class="content">
                    <span>explore, discover, travel</span>
                    <h3>Travel around the world</h3>
                    <a href="package.php" class="btn">discover more</a>
                </div>
            </div>
            <div class="slide" style="background:url(image/home3.jpg) no-repeat center center/cover;">
                <div class="content">
                    <span>explore, discover, travel</span>
                    <h3>Travel around the world</h3>
                    <a href="package.php" class="btn">discover more</a>
                </div>
            </div>
            <div class="slide" style="background:url(image/home4.jpg) no-repeat center center/cover;">
                <div class="content">
                    <span>explore, discover, travel</span>
                    <h3>Travel around the world</h3>
                    <a href="package.php" class="btn">discover more</a>
                </div>
            </div>
            <div class="slide" style="background:url(image/home5.jpg) no-repeat">
                <div class="content">
                    <span>explore, discover, travel</span>
                    <h3>Travel around the world</h3>
                    <a href="package.php" class="btn">discover more</a>
                </div>
            </div>
        </div>
    </section>

    <section class="home-about">
        <div class="image">
            <img src="image/about1.jpg" alt="">
        </div>

        <div class="content">
            <h3>about us</h3>
            <p>Welcome to Travel., your ultimate guide to exploring the world's most captivating destinations. At Travel., we believe that every journey should be an unforgettable adventure. Whether you're seeking thrilling escapades, cultural immersion, or simply relaxation, we've got you covered.

            Our team of passionate travelers handcrafts unique travel experiences that cater to your every desire. From adventurous treks through lush forests to serene beach getaways and everything in between, our goal is to make your travel dreams a reality.

            Join us on a journey of discovery and let us guide you through the wonders of the world. Explore, discover, and travel with Travel. today.</p>
            <a href="about.php" class="btn">read more</a>
        </div>
    </section>


    <section class="home-packages">
        <h1 class="heading">our packages</h1>

        <div class="box-container">
            <div class="box">
                <div class="image">
                    <img src="image/img1.jpg" alt="">
                </div>
                <div class="content">
                    <h3>adventure & tour</h3>
                    <p>Discover new places and cultures with our curated tour packages. Unforgettable experiences await!</p>
                    <a href="book.php" class="btn">book now</a>
                </div>   
            </div> 

            <div class="box">
                <div class="image">
                    <img src="image/img2.jpg" alt="">
                </div>
                <div class="content">
                    <h3>adventure & tour</h3>
                    <p>Discover new places and cultures with our curated tour packages. Unforgettable experiences await!</p>
                    <a href="book.php" class="btn">book now</a>
                </div>   
            </div> 

            <div class="box">
                <div class="image">
                    <img src="image/img3.jpg" alt="">
                </div>
                <div class="content">
                    <h3>adventure & tour</h3>
                    <p>Discover new places and cultures with our curated tour packages. Unforgettable experiences await!</p>
                    <a href="book.php" class="btn">book now</a>
                </div>   
            </div> 
        </div>  

        <div class="load-more"> 
            <a href="package.php" class="btn">load more</a> 
        </div>
    </section>

    <section class="services">
        <h1 class="heading-title"> our services </h1>

        <div class="box-container">
            <div class="box">
                <a href="#">
                    <img src="image/icon1.png" alt="">
                    <h3>adventure</h3>
                </a>
            </div>
            <div class="box">
                <a href="#">
                    <img src="image/icon2.png" alt="">
                    <h3>tour guide</h3>
                </a>
            </div>
            <div class="box">
                <a href="#">
                    <img src="image/icon3.png" alt="">
                    <h3>trekking</h3>
                </a>
            </div>
            <div class="box">
                <a href="#">
                    <img src="image/icon4.png" alt="">
                    <h3>camp fire</h3>
                </a>
            </div>
            <div class="box">
                <a href="#">
                    <img src="image/icon5.png" alt="">
                    <h3>off road</h3>
                </a>
            </div>
            <div class="box">
                <a href="#">
                    <img src="image/icon6.png" alt="">
                    <h3>camping</h3>
                </a>
            </div>
        </div>
    </section>

    <section class="offer-section">
        <div class="content">
            <h2>Special Offer: 45% Off!</h2>
            <p>Book your dream vacation now and get an amazing 45% discount on all packages. Don't miss out on this limited-time offer!</p>
            <a href="book.php" class="btn">Book Now</a>
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
                <a href="#" class="extra-link">
                    <span class="icon">›</span> ask questions
                    <span class="description">Have questions? Get in touch with us!</span>
                </a>
                <a href="#" class="extra-link">
                    <span class="icon">›</span> about us
                    <span class="description">Learn more about Travel. and our journey.</span>
                </a>
                <a href="#" class="extra-link">
                    <span class="icon">›</span> privacy policy
                    <span class="description">Read our privacy policy to learn how we handle your information.</span>
                </a>
                <a href="#" class="extra-link">
                    <span class="icon">›</span> terms of use
                    <span class="description">Read our terms and conditions.</span>
                </a>
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
</body>
</html>
