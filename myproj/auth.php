<?php
$host = 'localhost';
$user = 'root';
$pass = ''; 
$db = 'trip_db';

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$error = '';
$message = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['register'])) {
        
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        
        $sql = "SELECT id FROM users WHERE email='$email'";
        $result = $conn->query($sql);
        if ($result) {
            if ($result->num_rows > 0) {
                $error = "Email already registered!";
            } else {
                
                $hashed_password = password_hash($password, PASSWORD_DEFAULT);

                
                $sql = "INSERT INTO users (name, email, password) VALUES ('$name', '$email', '$hashed_password')";
                $result = $conn->query($sql);
                if ($result) {
                    $message = "Registration successful!";
                } else {
                    $error = "Error: " . $conn->error;
                }
            }
        } else {
            $error = "Error: " . $conn->error;
        }
    } elseif (isset($_POST['login'])) {
       
        $email = $_POST['email'];
        $password = $_POST['password'];

        
        $sql = "SELECT id, password FROM users WHERE email='$email'";
        $result = $conn->query($sql);
        if ($result) {
            if ($result->num_rows > 0) {
                $row = $result->fetch_assoc();
                $hashed_password = $row['password'];
                
                if (password_verify($password, $hashed_password)) {
                    $message = "Login successful!";
                    
                    header("Location: home.php");
                    exit;
                } else {
                    $error = "Invalid email or password!";
                }
            } else {
                $error = "Invalid email or password!";
            }
        } else {
            $error = "Error: " . $conn->error;
        }
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Authentication</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .auth-form {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 300px;
            text-align: center;
        }
        .auth-form input {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        .auth-form button {
            padding: 10px 20px;
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
            margin: 10px 0;
        }
        .error {
            color: red;
        }
        .success {
            color: green;
        }
    </style>
</head>
<body>

<div class="auth-form">
    <?php if ($message): ?>
        <p class="success"><?php echo $message; ?></p>
        <script>
            setTimeout(function() {
                window.location.href = 'home.php';
            }, 2000);
        </script>
    <?php else: ?>
        <h2>Login</h2>
        <form action="auth.php" method="POST">
            <input type="email" name="email" placeholder="Email" required>
            <input type="password" name="password" placeholder="Password" required>
            <button type="submit" name="login">Login</button>
            <p>Don't have an account? <a href="#" onclick="showRegister()">Register here</a></p>
            <?php if ($error && isset($_POST['login'])) echo "<p class='error'>$error</p>"; ?>
        </form>
        
        <div id="register-form" style="display: none;">
            <h2>Register</h2>
            <form action="auth.php" method="POST">
                <input type="text" name="name" placeholder="Full Name" required>
                <input type="email" name="email" placeholder="Email" required>
                <input type="password" name="password" placeholder="Password" required>
                <button type="submit" name="register">Register</button>
                <p>Already have an account? <a href="#" onclick="showLogin()">Login here</a></p>
                <?php if ($error && isset($_POST['register'])) echo "<p class='error'>$error</p>"; ?>
            </form>
        </div>
    <?php endif; ?>
</div>

<script>
    function showRegister() {
        document.getElementById('register-form').style.display = 'block';
    }

    function showLogin() {
        document.getElementById('register-form').style.display = 'none';
    }
</script>

</body>
</html>
