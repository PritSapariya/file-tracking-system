<?php

$name = $_POST['Name'];
$email = $_POST['Email'];
$message = $_POST['Message'];

include("dao.php");

$sql = "insert into feedback_tbl (name,email,message) values ('$name','$email','$message')";

mysqli_query($connection,$sql);

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
// Load Composer's autoloader
require ('Mail\vendor\autoload.php');


$mail = new PHPMailer(true);

try {
    $mail->SMTPDebug = 0 ;
    $mail->isSMTP();                                            // Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'hackathon2728@gmail.com';                     // SMTP username
    $mail->Password   = 'akidpqwuipiovqos';                               // SMTP password
    $mail->SMTPSecure = 'ssl';         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` also accepted
    $mail->Port       = 465;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom('hackathon2728@gmail.com');
    $mail->addAddress($email);     // Add a recipient

    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'File Tracking System';
    $mail->Body = 'Your Feedback is successfully submitted';

    $mail->send();
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}

header("location:home.php#contact");

?>