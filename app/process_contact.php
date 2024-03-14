<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];
    
    echo "<h2>Thank you, $name!</h2>";
    echo "<p>Your message has been received:</p>";
    echo "<p><strong>Email:</strong> $email</p>";
    echo "<p><strong>Message:</strong> $message</p>";
} else {
    echo "<p>Sorry, something went wrong.</p>";
}
?>
