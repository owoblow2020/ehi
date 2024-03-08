<?php
if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['phone'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    
    // Change the recipient email address as per your requirement
    $to = 'owolabi.upload@gmail.com';
    $subject = 'New Donation Request';
    $message = "Name: $name\n";
    $message .= "Email: $email\n";
    $message .= "Phone: $phone\n";
    
    // Additional headers
    $headers = "From: $name <$email>";
    
    // Send email
    if(mail($to, $subject, $message, $headers)) {
        echo 'Email sent successfully.';
    } else {
        echo 'Error: Unable to send email.';
    }
} else {
    echo 'Error: Invalid request.';
}
?>
