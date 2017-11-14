<?php
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
//Load composer's autoloader
require __DIR__.'/../vendor/autoload.php';

function sendEmail($to, $subject, $htmlContent, $textContent='') {
    global $config ;
    $mail = new PHPMailer(true);                              // Passing `true` enables exceptions
    try {
        //Server settings
        $mail->SMTPDebug = 2;                                 // Enable verbose debug output
        $mail->isSMTP();                                      // Set mailer to use SMTP
        $mail->Host = $config['MAIL_HOST'];                       // Specify main and backup SMTP servers
        $mail->SMTPAuth = true;                               // Enable SMTP authentication
        $mail->Username = $config['MAIL_USERNAME'];                 // SMTP username
        $mail->Password = $config['MAIL_PASSWORD'];                           // SMTP password
        $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
        $mail->Port = 587;                                    // TCP port to connect to

        $mail->SMTPOptions = array(
            'ssl' => array(
                'verify_peer' => false,
                'verify_peer_name' => false,
                'allow_self_signed' => true
            )
        ) ;

        //Recipients
        $mail->setFrom('noreply@resume.com', 'Alexandre CLAUDON');
        $mail->addAddress($to, 'User');     // Add a recipient
        //$mail->addAddress('ellen@example.com');               // Name is optional
        //$mail->addReplyTo('info@example.com', 'Information');
        //$mail->addCC('cc@example.com');
        //$mail->addBCC('bcc@example.com');

        //Attachments
        //$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
        //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

        //Content
        $mail->isHTML(true);                                  // Set email format to HTML
        $mail->Subject = $subject;
        $mail->Body    = $htmlContent;
        $mail->AltBody = $textContent;

        $mail->send();
        echo "<script>alert('Message has been sent')</script>";
    } catch (Exception $e) {
        "<script>alert('Message could not be sent {$mail->ErrorInfo}')</script>";
    }
} ; // fin fonction sendEmail
