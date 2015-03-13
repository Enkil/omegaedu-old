<?php

echo
    htmlspecialchars($_POST['name']) . "\r\n" .
    htmlspecialchars($_POST['phone']) . "\r\n" .
    htmlspecialchars($_POST['email']);

$to      = $managerEmail;
$subject = 'OmegaEDU | Новая заявка на франшизу';
$message =
    htmlspecialchars($_POST['name']) . "\r\n" .
    htmlspecialchars($_POST['phone']) . "\r\n" .
    htmlspecialchars($_POST['email']);
$message = wordwrap($message, 70, "\r\n");
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type: text/html; charset=UTF-8" . "\r\n";
$headers =
    'From:' . $adminEmail . "\r\n" .
    'Reply-To:' . $replyEmail . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

if  (mail($to, $subject, $message, $headers)) {
    echo '<br/>' . 'Send';
} else {
    echo 'Sending error';
};

$siteName = 'OmegaEDU';
$adminEmail = 'no-reply@omegaedu.ru';
$replyEmail = 'timohin.i@gmail.com';
$managerEmail = 'timohin.i@gmail.com';

require 'PHPMailer/PHPMailerAutoload.php';

//Create a new PHPMailer instance
$mail = new PHPMailer;
//Set who the message is to be sent from
$mail->setFrom($adminEmail, 'First Last');
//Set an alternative reply-to address
$mail->addReplyTo($replyEmail, 'First Last');
//Set who the message is to be sent to
$mail->addAddress($managerEmail, 'OmegaEDU Franchize Manager');
//Set the subject line
$mail->Subject = 'PHPMailer mail() test';
//Read an HTML message body from an external file, convert referenced images to embedded,
//convert HTML into a basic plain-text alternative body
$mail->msgHTML(file_get_contents('contents.html'), dirname(__FILE__));
//Replace the plain text body with one created manually
$mail->AltBody = 'This is a plain-text message body';
//Attach an image file
$mail->addAttachment('images/phpmailer_mini.png');

//send the message, check for errors
if (!$mail->send()) {
    echo "Mailer Error: " . $mail->ErrorInfo;
} else {
    echo "Message sent!";
}

header("Location: ".$_SERVER['HTTP_REFERER']);

