<?php
include_once("{$_SERVER['DOCUMENT_ROOT']}/inc/common.php");

$mail_getter    = $_POST['getter'];
$mail_type      = $_POST['mail_type'];
$mail_title     = $_POST['mail_title'];
$mail_content   = $_POST['mail_content'];

$mail_host      = "smtp.gmail.com";
$mail_user_name = "info@aidus.io";
$mail_password  = "infoaidus";

$mail_from      = $mail_user_name;
$email_body     = "";



$mail_content = '<!DOCTYPE html>
<html lang="en">
<head>
    <title>MailForm</title>
    <meta charset="utf-8">
    <meta http-equiv="Content-Script-Type" content="text/javascript" />
    <meta http-equiv="Content-Style-Type" content="text/css" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scaleable=no">
    <meta property="og:type" content="website">
</head>
<body>'
    . $email_body .
'</body>
</html>';


$mail = new PHPMailer(true);

try {
    //$mail->IsSMTP();
    $mail->SMTPDebug = 2;
    $mail->Host = $mail_host;
    $mail->SMTPAuth = true;
    $mail->Username = $mail_user_name;
    $mail->Password = $mail_password;
    $mail->SMTPSecure = 'tls';
    $mail->Port = 587;

    $mail->setFrom($mail_from);
    $mail->addAddress('bebop840123@gmail.com', 'bebop');
    $mail->addReplyTo('info@aidus.io');

    //$mail->addAttachment('/var/tmp/file.tar.gz');
    //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');

    $mail->isHTML(true);
    $mail->Subject = 'Welcome to aidus';
    $mail->Body    = $mail_content;
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
}
?>