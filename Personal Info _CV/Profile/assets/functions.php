<?php
// Function to send email
function sendEmail($to, $title, $body)
{
    $header = "From: support@dhiaa_Alhmiri.com\nCC: dhiaa1221@gmail.com";
    return mail($to, $title, $body, $header);
}

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fullname = htmlspecialchars($_POST['fullname']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    $to = 'dhiaa1221@gmail.com';
    $subject = 'New Contact Form Submission';
    $body = "Name: $fullname\nEmail: $email\nMessage:\n$message";

    if (sendEmail($to, $subject, $body)) {
        $success_message = "Email sent successfully!";
    } else {
        $error_message = "Failed to send email.";
    }
}
?>
