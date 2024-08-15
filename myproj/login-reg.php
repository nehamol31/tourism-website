<?php
        session_start();
        if (isset($_SESSION['user_id'])) {
            echo '<a href="logout.php">Logout</a>';
        } else {
            echo '<a href="login-reg.php">Login</a>';
        }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login/Register</title>
    
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

        
        .auth {
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px;
        }

        .form-container {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 300px;
            text-align: center;
        }

        .auth-form input {
            width: 90%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .auth-form button {
            width: 100%;
            padding: 10px;
            background-color: #333;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .auth-form button:hover {
            background-color: #555;
        }

        .auth-form p {
            margin: 10px 0 0;
        }

        .auth-form a {
            color: #333;
            text-decoration: none;
        }

        .auth-form a:hover {
            text-decoration: underline;
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
        
    </nav>
</section>

<div class="heading">
    <div class="overlay"></div>
    <h1>Login/Register</h1>
</div>

<section class="auth">
    <div class="form-container">
        
        <form id="login-form" class="auth-form" action="auth.php" method="POST">
            <h2>Login</h2>
            <input type="email" name="email" id="login-email" placeholder="Email" required>
            <input type="password" name="password" id="login-password" placeholder="Password" required>
            <button type="submit" name="login">Login</button>
            <p>Don't have an account? <a href="#" onclick="showRegister()">Register here</a></p>
        </form>
        

        
        <form id="register-form" class="auth-form" action="auth.php" method="POST" style="display:none;">
            <h2>Register</h2>
            <input type="text" name="name" id="register-name" placeholder="Full Name" required>
            <input type="email" name="email" id="register-email" placeholder="Email" required>
            <input type="password" name="password" id="register-password" placeholder="Password" required>
            <button type="submit" name="register">Register</button>
            <p>Already have an account? <a href="#" onclick="showLogin()">Login here</a></p>
        </form>
        
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
    function showRegister() {
        document.getElementById('login-form').style.display = 'none';
        document.getElementById('register-form').style.display = 'block';
    }

    function showLogin() {
        document.getElementById('login-form').style.display = 'block';
        document.getElementById('register-form').style.display = 'none';
    }

    
    function toggleMenu() {
        var navbar = document.querySelector('.navbar');
        navbar.classList.toggle('active');
    }
    if (<?php echo json_encode(isset($_POST['register'])); ?>) {
        showRegister();
    } else if (<?php echo json_encode(isset($_POST['login'])); ?>) {
        showLogin();
    }
</script>


</body>
</html>
