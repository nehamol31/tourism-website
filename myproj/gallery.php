<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gallery</title>
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

        .gallery {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 10px;
            padding: 20px;
        }
        .gallery-item {
            position: relative;
            overflow: hidden;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            cursor: pointer;
        }
        .gallery-item img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.3s ease;
        }
        .gallery-item:hover img {
            transform: scale(1.1);
        }
        .overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            color: #fff;
            display: flex;
            justify-content: center;
            align-items: center;
            opacity: 0;
            transition: opacity 0.3s ease;
        }
        .gallery-item:hover .overlay {
            opacity: 1;
        }
        .overlay-content {
            text-align: center;
            padding: 10px;
        }
        .overlay-content h3 {
            margin: 0;
            font-size: 1.5rem;
        }
        .overlay-content p {
            margin: 5px 0 0;
            font-size: 0.9rem;
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
    <h1>Gallery</h1>
</div>
<div class="gallery">
    <div class="gallery-item" onclick="openImage('image/pack5.jpg', 'Kedarnath', 'Beautiful view of mountains.')">
        <img src="image/pack5.jpg" alt="Mountains">
        <div class="overlay">
            <div class="overlay-content">
                <h3>Kedarnath</h3>
                <p>Beautiful view of mountains.</p>
            </div>
        </div>
    </div>
    <div class="gallery-item" onclick="openImage('image/image2.jpg', 'Goa', 'Sandy beach with clear blue water.')">
        <img src="image/image2.jpg" alt="Beach">
        <div class="overlay">
            <div class="overlay-content">
                <h3>Goa</h3>
                <p>Sandy beach with clear blue water.</p>
            </div>
        </div>
    </div>
    <div class="gallery-item" onclick="openImage('image/image3.jpg', 'West Bengal', 'Lush green forest landscape.')">
        <img src="image/image3.jpg" alt="Forest">
        <div class="overlay">
            <div class="overlay-content">
                <h3>sunderban</h3>
                <p>Lush green forest landscape.</p>
            </div>
        </div>
    </div>
    <div class="gallery-item" onclick="openImage('image/image4.jpeg', 'Rajasthan', 'Explore the beauty of deserts around the world.')">
        <img src="image/image4.jpeg" alt="Desert">
        <div class="overlay">
            <div class="overlay-content">
                <h3>Rajasthan</h3>
                <p>Explore the beauty of deserts around the world.</p>
            </div>
        </div>
    </div>
    <div class="gallery-item" onclick="openImage('image/image5.jpg', 'Kerala', 'Enjoy the majestic view of waterfalls in different regions.')">
        <img src="image/image5.jpg" alt="Waterfalls">
        <div class="overlay">
            <div class="overlay-content">
                <h3>Kerala</h3>
                <p>Enjoy the majestic view of waterfalls in different regions.</p>
            </div>
        </div>
    </div>
    <div class="gallery-item" onclick="openImage('image/image6.jpeg', 'Kashmir', 'Beautiful view of land covered with snow.')">
        <img src="image/image6.jpeg" alt="Snow">
        <div class="overlay">
            <div class="overlay-content">
                <h3>Kashmir</h3>
                <p>Beautiful view of land covered with snow.</p>
            </div>
        </div>
    </div>
    <div class="gallery-item" onclick="openImage('image/pack5.jpg', 'Kedarnath', 'Beautiful view of mountains.')">
        <img src="image/pack5.jpg" alt="Mountains">
        <div class="overlay">
            <div class="overlay-content">
                <h3>Kedarnath</h3>
                <p>Beautiful view of mountains.</p>
            </div>
        </div>
    </div>
    
    <div class="gallery-item" onclick="openImage('image/image2.jpg', 'Goa', 'Sandy beach with clear blue water.')">
        <img src="image/image2.jpg" alt="Beach">
        <div class="overlay">
            <div class="overlay-content">
                <h3>Goa</h3>
                <p>Sandy beach with clear blue water.</p>
            </div>
        </div>
    </div>
    <div class="gallery-item" onclick="openImage('image/image3.jpg', 'West Bengal', 'Lush green forest landscape.')">
        <img src="image/image3.jpg" alt="Forest">
        <div class="overlay">
            <div class="overlay-content">
                <h3>Sunderban</h3>
                <p>Lush green forest landscape.</p>
            </div>
        </div>
    </div>
    <div class="gallery-item" onclick="openImage('image/image4.jpeg', 'Rajasthan', 'Explore the beauty of deserts around the world.')">
        <img src="image/image4.jpeg" alt="Desert">
        <div class="overlay">
            <div class="overlay-content">
                <h3>Rajasthan</h3>
                <p>Explore the beauty of deserts around the world.</p>
            </div>
        </div>
    </div>
    <div class="gallery-item" onclick="openImage('image/image5.jpg', 'Kerala', 'Enjoy the majestic view of waterfalls in different regions.')">
        <img src="image/image5.jpg" alt="Waterfalls">
        <div class="overlay">
            <div class="overlay-content">
                <h3>Kerala</h3>
                <p>Enjoy the majestic view of waterfalls in different regions.</p>
            </div>
        </div>
    </div>
    <div class="gallery-item" onclick="openImage('image/image6.jpeg', 'Kashmir', 'Beautiful view of land covered with snow.')">
        <img src="image/image6.jpeg" alt="Snow">
        <div class="overlay">
            <div class="overlay-content">
                <h3>Kashmir</h3>
                <p>Beautiful view of land covered with snow.</p>
            </div>
        </div>
    </div>
    <div class="gallery-item" onclick="openImage('image/pack5.jpg', 'Kedarnath', 'Beautiful view of mountains.')">
        <img src="image/pack5.jpg" alt="Mountains">
        <div class="overlay">
            <div class="overlay-content">
                <h3>Kedarnath</h3>
                <p>Beautiful view of mountains.</p>
            </div>
        </div>
    </div>
    
</div>

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
    function openImage(imageSrc, title, description) {
        alert(`Clicked on ${title}: ${description}`);
        // Replace alert with your own logic to open a modal or a detailed view
    }
    function toggleMenu() {
        var navbar = document.querySelector('.navbar');
        navbar.classList.toggle('active');
    }
</script>

</body>
</html>
