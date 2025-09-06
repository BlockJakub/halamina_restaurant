<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require __DIR__ . '/../vendor/autoload.php';

// Mail configuration for PHPMailer
$mailConfig = [
    'host' => 'smtp.gmail.com', // gmail
    'username' => 'jjcodenet@gmail.com', // SMTP username
    'password' => 'rchs hzuu jcjy iayj', // <-- Replace with your Google App Password
    'port' => 587, // SMTP port (587 for TLS, 465 for SSL)
    'encryption' => 'tls', // Encryption: 'tls' or 'ssl'
    'from_email' => 'jjcodenet@gmail.com', // Default sender and recipient email
    'from_name' => 'admin', // Default sender name
];

$mail = new PHPMailer(true);

try {
    // Server settings
    $mail->SMTPDebug = 2; // or 3 for more detail
    $mail->Debugoutput = 'html';
    $mail->isSMTP();
    $mail->Host = $mailConfig['host'];
    $mail->SMTPAuth = true;
    $mail->Username = $mailConfig['username'];
    $mail->Password = $mailConfig['password'];
    $mail->SMTPSecure = $mailConfig['encryption'];
    $mail->Port = $mailConfig['port'];

    // Recipients
    $mail->setFrom($mailConfig['from_email'], $mailConfig['from_name']);
    $mail->addAddress('jjcodenet@gmail.com', 'admin'); // Change as needed

    // Content
    $mail->isHTML(true);
    $mail->Subject = 'Your Subject';
    $mail->Body    = 'Your HTML message body';
    $mail->AltBody = 'Plain text version of the message';

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
}
