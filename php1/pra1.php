<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

$mail = new PHPMailer(true);

try {
    
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      
    $mail->isSMTP();                                             
    $mail->Host       = 'smtp.gmail.com';                    
    $mail->SMTPAuth   = true;                                  
    $mail->Username   = 'ap0525854@gmail.com';                      
    $mail->Password   = 'aSHa@8335&pandey';                                
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            
    $mail->Port       = 465;                                     
    $mail->setFrom('ap0525854@gmail.com', 'Dakit');
    $mail->addAddress('aship4429@gmail.com', 'Gaming');    
    $mail->addAddress('aship4429@gmail.com');               
    $mail->addReplyTo('no-reply@gmail.com', 'no-reply');
    $mail->addCC('ap0525854@gmail.com');
    $mail->addBCC('ap0525854@gmail.com');


    //$mail->addAttachment('/var/tmp/file.tar.gz');          
    //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    

    $mail->isHTML(true);                                   
    $mail->Subject = 'Welcome Message';
    $mail->Body    = 'This is the HTML message body <b>in bold!</b>';
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}