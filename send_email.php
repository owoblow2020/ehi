<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];

    // Email information
    $to = "owo@gmail.com";
    $subject = "New Contact Message";
    $body = "Name: $name\nEmail: $email\nPhone: $phone\n\nMessage:\n$message";

    // Send email
    if (mail($to, $subject, $body)) {
        echo "<script>alert('Your message has been sent successfully.');</script>";
    } else {
        echo "<script>alert('Sorry, there was an error sending your message. Please try again later.');</script>";
    }
}
?>
