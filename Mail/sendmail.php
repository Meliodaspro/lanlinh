<?php
include"Mail/PHPMailer-master/src/PHPMailer.php";
include"Mail/PHPMailer-master/src/Exception.php";
include"Mail/PHPMailer-master/src/OAuth.php";
include"Mail/PHPMailer-master/src/POP3.php";
include"Mail/PHPMailer-master/src/SMTP.php";
 
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

$mail = new PHPMailer(true);                              // Passing `true` enables exceptions
try {
    //Server settings
    $mail->SMTPDebug = 0;                                 // Enable verbose debug output
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'smtp.mail.com;';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'tuanga15031996@gmail.com';                 // SMTP username
    $mail->Password = 'mjdgcevrmwqwccuj';                           // SMTP password
    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587;                                    // TCP port to connect to
 
    // //Recipients
    // $mail->setFrom('son1998tn@gmail.com', 'Mailer');
    // $mail->addAddress('joe@example.net', 'Joe User');     // Add a recipient
    // $mail->addAddress('ellen@example.com');               // Name is optional
    // $mail->addReplyTo('info@example.com', 'Information');
    $mail->addCC('tuanga15031996@gmail.com');
    // $mail->addBCC('bcc@example.com');
 
    // //Attachments
    // $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
    // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
 
    // //Content
    // $mail->isHTML(true);                                  // Set email format to HTML
    // $mail->Subject = 'Here is the subject';
    // $mail->Body    = 'This is the HTML message body in bold!';
    // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
 
    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
}
?>