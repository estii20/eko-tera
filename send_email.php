<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    
    $to = "estellespecht@hotmail.co.uk";
    $subject = "New Contact Form Submission";
    $email_body = "Name: $name\nEmail: $email\nMessage: $message";
    
    $headers = "From: $email";
    
    if (mail($to, $subject, $email_body, $headers)) {
        echo "Email sent successfully!";
    } else {
        echo "Error sending email.";
    }
}
?>