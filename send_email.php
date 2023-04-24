<?php
// Get the form data
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

// Send the email
$to = 'gsenecaut1503@gmail.com';
$subject = 'New message from Portfolio Projects website';
$body = "Name: $name\nEmail: $email\nMessage: $message";
$headers = 'From: webmaster@example.com' . "\r\n" .
    'Reply-To: ' . $email . "\r\n";

if (mail($to, $subject, $body, $headers)) {
    echo 'Message sent successfully';
} else {
    echo 'Error sending message';
}
?>