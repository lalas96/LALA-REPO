<?php
use PHPMailer\PHPMailer\PHPMailer;

require 'vendor/autoload.php';

var_dump($_FILES);

// Get all form fields you wish to add to your mail
$email   = $_POST[ 'email' ];
$name    = $_POST[ 'name' ];
$message = $_POST[ 'message' ];

// Get uploaded file temp and file name
$file_tmp  = $_FILES[ 'file' ][ 'tmp_name' ];
$file_name = $_FILES[ 'file' ][ 'name' ];

// Move uploaded file from temp to uploads folder
move_uploaded_file( $file_tmp, "uploads/" . $file_name ); // we can remove this if we don't want to keep files on server

$mail = new PHPMailer;

$mail->isSMTP();
$mail->SMTPAuth = true;

$mail->Host       = 'ledikdent.si';
$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
$mail->port       = 465;
$mail->Username   = 'formtest@ledikdent.si';
$mail->Password   = 'formaforma';

$mail->setFrom( $email, $name );
$mail->addAddress('upisisvojmail@zatestira.nje', 'Lala'); // Change this to email address you wish to receive sent mails
$mail->AddAttachment( $file_tmp, $file_name );

$mail->Subject = 'Upit sa stranice lepi-zub.si';
$mail->Body    = $message;

$mail->send();

echo 'Sent (possible redirect)';

// Redirect example
header( 'Location: ' . 'https://google.com' );
die();
