<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $data = json_decode(file_get_contents('php://input'), true);

    $name = $data['name'];
    $email = $data['email'];
    $phone = $data['phone'];

    $to = 'eyesavershcareinitiative@gmail.com';
    $subject = 'New Donation Request';
    $message = "Name: $name\nEmail: $email\nPhone: $phone";
    $headers = 'From: ' . $email;

    if (mail($to, $subject, $message, $headers)) {
        http_response_code(200);
    } else {
        http_response_code(500);
    }
}