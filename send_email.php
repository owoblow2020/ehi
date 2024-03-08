<?php
// Retrieve form data
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];

// Set the recipient email address
$to = 'owolabi.upload@gmail.com';

// Set the subject of the email
$subject = 'New Donation Form Submission';

// Construct the message body
$message = "Name: $name\n";
$message .= "Email: $email\n";
$message .= "Phone: $phone\n";

// Set additional headers
$headers = "From: $email\r\n";
$headers .= "Reply-To: $email\r\n";

// Send the email
$mailSent = mail($to, $subject, $message, $headers);

// Check if the email was sent successfully
if ($mailSent) {
    echo "Thank you for your donation. We will get back to you soon!";
} else {
    echo "Sorry, there was an error sending your donation form. Please try again later.";
}
?>
