<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $to = "mediacell@stellamaryscoe.edu.in"; // Your email address
    $headers = "From: $name <$email>";
    $body = "Subject: $subject\n\n$message";

    if (mail($to, $subject, $body, $headers)) {
        echo "success";
    } else {
        echo "Error sending email";
    }
}
?>
