<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pay here</title>
    
    <link rel="stylesheet" type="text/css" href="css/style.css">
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

        .form-group {
            margin-bottom: 20px;
        }

        .form-group input,  
        .form-group textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        .form-group textarea {
            resize: vertical;
        }

        .form-group button {
            width: 100%;
            padding: 10px;
            background-color: #4caf50;
            border: none;
            color: #fff;
            font-size: 18px;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .form-group button:hover {
            background-color: #45a049;
        }
        
        .payment-form button:hover {
            background-color: #555;
        }
        .payment-container {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 300px; /* Adjusted width for better layout */
            text-align: center;
            margin: 100px auto; /* Center the box vertically and horizontally */
        }
        .payment-form input {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        .payment-form button {
            padding: 10px 20px;
            background-color: #333;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        .payment-form button:hover {
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
            
            .payment-container {
                margin-top: 20px;
                width: 100%;
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
        <a href="pay.php">pay</a>
    </nav>
</section>

<div class="heading" style="background:url(image/heading_3.jpg) no-repeat; background-size: cover;">
    <h1>Pay here</h1>
</div>

<section class="payment-form">
    <div class="payment-container">
        <form action="payment.php" method="post">
        <h2>Payment details</h2>
            <div class="form-group">
                <input type="text" name="card_number" placeholder="Card Number" required>
                <input type="text" name="card_expiry" placeholder="MM/YY" required>
                <input type="text" name="card_cvv" placeholder="CVV" required>
                <input type="number" name="amount" placeholder="Amount" required>
                <button type="submit">Pay Now</button>
            </div>
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
    function validatePaymentForm() {
        var cardNumber = document.getElementById("card_number").value;
        var cardExpiry = document.getElementById("card_expiry").value;
        var cardCVV = document.getElementById("card_cvv").value;
        var amount = document.getElementById("amount").value;

        // Simple validation
        if (cardNumber.length !== 16) {
            alert("Card number must be 16 digits.");
            return false;
        }

        if (!/^\d{2}\/\d{2}$/.test(cardExpiry)) {
            alert("Invalid card expiry format. Use MM/YY format.");
            return false;
        }

        if (!/^\d{3}$/.test(cardCVV)) {
            alert("CVV must be a 3-digit number.");
            return false;
        }

        if (isNaN(amount) || amount <= 0) {
            alert("Amount must be a valid number greater than 0.");
            return false;
        }

        return true;
    }
    function toggleMenu() {
        var navbar = document.querySelector('.navbar');
        navbar.classList.toggle('active');
    }
</script>

</body>
</html>
