<?php

error_reporting(E_ALL);
ini_set("display_errors", 1);
ini_set("display_startup_errors", 1);

//echo
//    htmlspecialchars($_POST['name']) . "\r\n" .
//    htmlspecialchars($_POST['phone']) . "\r\n" .
//    htmlspecialchars($_POST['email']);
//
//$to      = $managerEmail;
//$subject = 'OmegaEDU | Новая заявка на франшизу';
//$message =
//    htmlspecialchars($_POST['name']) . "\r\n" .
//    htmlspecialchars($_POST['phone']) . "\r\n" .
//    htmlspecialchars($_POST['email']);
//$message = wordwrap($message, 70, "\r\n");
//$headers = "MIME-Version: 1.0" . "\r\n";
//$headers .= "Content-type: text/html; charset=UTF-8" . "\r\n";
//$headers =
//    'From:' . $adminEmail . "\r\n" .
//    'Reply-To:' . $replyEmail . "\r\n" .
//    'X-Mailer: PHP/' . phpversion();
//
//if  (mail($to, $subject, $message, $headers)) {
//    echo '<br/>' . 'Send';
//} else {
//    echo 'Sending error';
//};

$siteName = 'OmegaEDU';
$adminEmail = 'no-reply@omegaedu.ru';
$replyEmail = 'timohin.i@gmail.com';
$managerEmail = 'timohin.i@gmail.com';

require 'PHPMailer/PHPMailerAutoload.php';

$mail = new PHPMailer;

//$mail->SMTPDebug = 3;                               // Enable verbose debug output

//$mail->isSMTP();                                      // Set mailer to use SMTP
//$mail->Host = 'smtp1.example.com;smtp2.example.com';  // Specify main and backup SMTP servers
//$mail->SMTPAuth = true;                               // Enable SMTP authentication
//$mail->Username = 'user@example.com';                 // SMTP username
//$mail->Password = 'secret';                           // SMTP password
//$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
//$mail->Port = 587;                                    // TCP port to connect to

$mail->From = $adminEmail;
$mail->FromName = 'OmegaEDU Franch';
$mail->addAddress($managerEmail, 'OmegaEDU Franch Manager');     // Add a recipient, Name is optional
$mail->addReplyTo($replyEmail, 'No-Reply');
//$mail->addCC('cc@example.com');
//$mail->addBCC('bcc@example.com');

//$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
//$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'OmegaEDU | Новая заявка на франшизу';
//$mail->Body    = 'This is the HTML message body <b>in bold!</b>';
$mail->Body =
    htmlspecialchars($_POST['name']) . "\r\n" .
    htmlspecialchars($_POST['phone']) . "\r\n" .
    htmlspecialchars($_POST['email']);
//$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Message has been sent';
}

header("Location: ".$_SERVER['HTTP_REFERER']);

