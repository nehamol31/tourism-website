<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Book Now</title>
    
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

        .booking-form {
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px;
        }

        .booking-form form {
            background-color: #fff;
            padding: 40px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 600px;
        }
        .booking-form h2 {
            margin-bottom: 20px;
            font-size: 28px;
            text-align: center;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            margin-bottom: 5px;
        }

        .form-group input, 
        .form-group select, 
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
            .booking-container {
                flex-direction: column;
                align-items: center;
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
    <h1>Book Now</h1>
</div>


<section class="booking-form">
    <form action="book_form.php" method="post">
        <h2>Book Your Trip</h2>
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>
        </div>
        <div class="form-group">
    <label for="email">Email:</label>
    <input type="email" id="email" name="email" pattern="[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$" required>
</div>

<div class="form-group">
    <label for="phone">Phone:</label>
    <input type="tel" id="phone" name="phone" pattern="[7-9]{1}[0-9]{9}" required>
    <small>Phone number must start with 7, 8, or 9 and be 10 digits long.</small>
</div>

        <div class="form-group">
            <label for="destination">Destination:</label>
            <select id="destination" name="destination" required>
                <option value="paris">Paris</option>
                <option value="new-york">New York</option>
                <option value="tokyo">Tokyo</option>
                <option value="london">London</option>
                <option value="capetown">Capetown</option>
                <option value="hong kong">Hong Kong</option>
                <option value="shimla">Shimla</option>
                <option value="kerala">Kerala</option>
            </select>
        </div>
        <div class="form-group">
    <label for="members">Members:</label>
    <select id="members" name="members" required>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
        <option value="6">6</option>
        <option value="7">7</option>
        <option value="8">8</option>
        <option value="9">9</option>
        <option value="10">10</option>
    </select>
</div>

        <div class="form-group">
            <label for="date">Date:</label>
            <input type="date" id="date" name="date" required>
        </div>
        <div class="form-group">
            <label for="message">Message:</label>
            <textarea id="message" name="message" rows="4"></textarea>
        </div>
        <div class="form-group">
            <button type="submit">Submit</button>
        </div>
    </form>

   
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
   
   
    document.addEventListener('DOMContentLoaded', function () {
        
        var phoneInput = document.getElementById('phone');
        phoneInput.addEventListener('input', function () {
            var phoneNumber = phoneInput.value;
            var phonePattern = /^[7-9]{1}[0-9]{9}$/;
            if (phonePattern.test(phoneNumber)) {
                phoneInput.setCustomValidity('');
            } else {
                phoneInput.setCustomValidity('Please enter a valid phone number starting with 7, 8, or 9 and 10 digits long.');
            }
        });

        
        var membersInput = document.getElementById('members');
        membersInput.addEventListener('change', function () {
            if (membersInput.value === '') {
                membersInput.setCustomValidity('Please select the number of members.');
            } else {
                membersInput.setCustomValidity('');
            }
        });
    });

function toggleMenu() {
        var navbar = document.querySelector('.navbar');
        navbar.classList.toggle('active');
    }

</script>



</body>
</html>