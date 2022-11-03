<?php

     $file = $_POST['file'];

     $email = $_POST['email'];

    require $_SERVER["DOCUMENT_ROOT"] . '/PHPMailer/PHPMailerAutoload.php';

        $mail = new PHPMailer;

        $mail->isSMTP();
        $mail->SMTPDebug  = 0;
        $mail->Debugoutput = 'html';
        $mail->Host = 'ledikdent.si';
        $mail->SMTPAuth = true;
        $mail->Username = 'formtest@ledikdent.si';
        $mail->Password = 'formaforma';
        $mail->From = $email;
        $mail->SMTPSecure = 'tls';
        $mail->Port = '465';

        $mail->setFrom('formtest@ledikdent.si');

        $mail->addAddress('lalasac1@gmail.com', 'Mirza');

        $mail->Subject = utf8_decode("Thank you for signing up");


        move_uploaded_file($_FILES["file"]["tmp_name"],"./uploads" . $_FILES["file"]["name"]);
        $filename = "./uploads" . $_FILES["file"]["name"];
        $mail->AddAttachment($filename);


        $mail->Body = ($file);

        //$mail->AltBody = utf8_decode($file);

        if (!$mail->Send()) {
            echo "error. <p>";
            echo "Mailer Error: " . $mail->ErrorInfo;
            exit;
        }

        echo "mail sent";

?>
