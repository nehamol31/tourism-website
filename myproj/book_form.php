<?php
$host = 'localhost';
$user = 'root';
$pass = ''; 
$db = 'trip_db';

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $destination = $_POST['destination'];
    $members = $_POST['members'];
    $date = $_POST['date'];
    $message = $_POST['message'];

    
    $sql = "INSERT INTO book_form (name, email, phone, destination, members, date, message) 
            VALUES ('$name', '$email', '$phone', '$destination', '$members', '$date', '$message')";

   
    if ($conn->query($sql) === TRUE) {
        echo "<div style='display: flex; justify-content: center; align-items: center; height: 100vh; background-image: url(image/bookk.jpeg); background-size: cover; background-position: center;'>
                <p style='font-size: 50px; color: white; text-align: center;'>Booking submitted successfully!!</p>
                <p style='font-size: 25px; color: white; text-align: center;'>Continue with the payment..</p>
              </div>";

        echo "<script>
                setTimeout(function() {
                    window.location.href = 'pay.php';
                }, 3000); // Redirect after 3 seconds
              </script>";
    } else {
        echo "Error: " . $conn->error;
    }
}

$conn->close();
?>
