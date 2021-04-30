<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../vendor/autoload.php';

$sender = 'jonathansuryadiputra@myself.com';
$senderName = 'My Website';

$recipient = 'jsuryadiputra@gmail.com';

$usernameSmtp = 'AKIA3D7AYHWMYVDLDJH4';
$passwordSmtp = 'BL95Kah7qK2zCFs+0vtmwK4uh4cGGnN4pmUdmy7NUFJF';

$host = 'email-smtp.eu-west-1.amazonaws.com';
$port = 587;

$subject = 'Message From Someone, Subject: ' .$_POST['subject'];
$message =  "Hey!

You got a new message on your website! Read it!
				
From: " .$_POST['name']. "
Email Address: " .$_POST['emailaddress']. "
Message:
" .$_POST['message'];

$mail = new PHPMailer(true);

try {
    // Specify the SMTP settings.
    $mail->isSMTP();
    $mail->setFrom($sender, $senderName);
    $mail->Username   = $usernameSmtp;
    $mail->Password   = $passwordSmtp;
    $mail->Host       = $host;
    $mail->Port       = $port;
    $mail->SMTPAuth   = true;
    $mail->SMTPSecure = 'tls';

    $mail->addAddress($recipient);

    $mail->Subject    = $subject;
    $mail->Body       = $message;
    $mail->Send();
}
catch (phpmailerException $e) {
    echo "An error occurred. {$e->errorMessage()}"; //Catch errors from PHPMailer.
}
catch (Exception $e) {
    echo "An error occurred. {$mail->ErrorInfo}"; //Catch errors from Amazon SES.
}

header( "Location: ./" );
exit;
?>