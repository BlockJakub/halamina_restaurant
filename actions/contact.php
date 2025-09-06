<?php
// Handle contact form submission and send email using PHPMailer
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require __DIR__ . '/../vendor/autoload.php';
$mailConfig = require __DIR__ . '/../config/mail.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = trim($_POST['contact_name'] ?? '');
    $email = trim($_POST['contact_email'] ?? '');
    $subject = trim($_POST['contact_subject'] ?? '');
    $message = trim($_POST['contact_message'] ?? '');

    // Basic validation
    if ($name && $email && $subject && $message) {
        $mail = new PHPMailer(true);
        try {
            $mail->isSMTP();
            $mail->Host = $mailConfig['host'];
            $mail->SMTPAuth = true;
            $mail->Username = $mailConfig['username'];
            $mail->Password = $mailConfig['password'];
            $mail->SMTPSecure = $mailConfig['encryption'];
            $mail->Port = $mailConfig['port'];

            $mail->setFrom($mailConfig['from_email'], $mailConfig['from_name']);
            $mail->addAddress($mailConfig['from_email'], 'Halamina Admin'); // Send to yourself
            $mail->addReplyTo($email, $name); // So you can reply to the sender

            $mail->isHTML(true);
            $mail->Subject = 'Contact Form: ' . $subject;
            $mail->Body    = '<strong>Name:</strong> ' . htmlspecialchars($name) . '<br>' .
                '<strong>Email:</strong> ' . htmlspecialchars($email) . '<br>' .
                '<strong>Message:</strong><br>' . nl2br(htmlspecialchars($message));
            $mail->AltBody = "Name: $name\nEmail: $email\nMessage:\n$message";

            $mail->send();
            header('Location: ../contact.php?sent=1');
            exit();
        } catch (Exception $e) {
            header('Location: ../contact.php?sent=0');
            exit();
        }
    } else {
        header('Location: ../contact.php?sent=0');
        exit();
    }
}
