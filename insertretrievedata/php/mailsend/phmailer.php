<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

$mail = new PHPMailer();
$mail->isSMTP();
$mail->Host = 'smtp.example.com'; // Replace with your SMTP server
$mail->SMTPAuth = true;
$mail->Username = 'your_email@example.com';
$mail->Password = 'your_password';
$mail->SMTPSecure = 'tls';
$mail->Port = 587;

$mail->setFrom('your_email@example.com', 'Your Name');
$mail->addAddress('recipient@example.com');

$mail->Subject = 'Test Email';
$mail->Body = 'Hello, this is a test email sent using PHPMailer.';

if ($mail->send()) {
    echo "Email sent successfully!";
} else {
    echo "Failed to send email: " . $mail->ErrorInfo;
}
?>
