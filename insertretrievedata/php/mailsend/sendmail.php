<?php
$to = "recipient@example.com";  // Receiver's Email
$subject = "Test Email from PHP";
$message = "Hello! This is a test email from PHP.";
$headers = "From: sender@example.com"; // Sender's Email

// Send email
if(mail($to, $subject, $message, $headers)) {
    echo "Email sent successfully!";
} else {
    echo "Failed to send email.";
}
?>
