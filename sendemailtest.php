
<?php
$name    = htmlspecialchars( $_POST['name'] );
$email   = $_POST['email'];
$message = $_POST['name'];

require 'vendor/autoload.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

$mail = new PHPMailer( true );

$mail->isSMTP();
$mail->SMTPAuth = true;

$mail->Host       = 'ledikdent.si';
$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
$mail->port       = 465;
$mail->Username   = 'formtest@ledikdent.si';
$mail->Password   = 'formaforma';

$mail->setFrom( $email, $name );
$mail->addAddress('lalasac1@gmail.com', 'Mirza');

$mail->Subject = 'Upit sa stranice lepi-zub.si';
$mail->Body    = $message;

$mail->send();

echo 'Poslano';


?>






