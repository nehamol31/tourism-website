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
    $card_number = $_POST['card_number'];
    $card_expiry = $_POST['card_expiry'];
    $card_cvv = $_POST['card_cvv'];
    $amount = $_POST['amount'];

    if (strlen($card_number) !== 16) {
        die("Error: Card number must be 16 digits.");
    }

    if (!preg_match("/^\d{2}\/\d{2}$/", $card_expiry)) {
        die("Error: Invalid card expiry format. Use MM/YY format.");
    }

   
    if (!preg_match("/^\d{3}$/", $card_cvv)) {
        die("Error: CVV must be a 3-digit number.");
    }

    
    if (!is_numeric($amount) || $amount <= 0) {
        die("Error: Amount must be a valid number greater than zero.");
    }

    
    $sql = "INSERT INTO payment_details (card_number, card_expiry, card_cvv, amount) VALUES ('$card_number', '$card_expiry', '$card_cvv', '$amount')";

   
    if ($conn->query($sql) === TRUE) {
        echo "<div style='display: flex; justify-content: center; align-items: center; height: 100vh; background-color: #f0f0f0;'>
                <p style='font-size: 24px; text-align: center;'>Payment processed successfully!</p>
              </div>";

        echo "<script>
                setTimeout(function() {
                    window.location.href = 'home.php';
                }, 2000); // Redirect after 2 seconds
              </script>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>

