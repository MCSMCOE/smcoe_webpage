<?php
if($_POST) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    $to = "mediacell@stellamaryscoe.edu.in"; // Change this to your email address

    $body = "Name: $name\nEmail: $email\nSubject: $subject\nMessage:\n$message";

    // Send email
    if(mail($to, $subject, $body)) {
        echo "success";
    } else {
        echo "error";
    }
}
?>
