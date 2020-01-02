<?php 
    require 'phpmailer-master/PHPMailerAutoload.php';

    $mail = new PHPMailer;
    $mail->isSMTP();     #live server disabled
    $mail->Host = 'smtp.gmail.com';
    $mail->Port = 587;
    $mail->SMTPAuth = true;
    $mail->SMTPSecure = 'tls';

    $mail->Username = 'pilifmaximus@gmail.com';
    $mail->Password = 'istina99%';

    $mail->setFrom('pilifmaximus@gmail.com', 'Filipesku');
    $mail->addAddress('samopravo19@gmail.com');
    $mail->addReplyTo('pilifmaximus@gmail.com');

    $mail->isHTML(true);
    $mail->Subject = 'PHP Mailer Subject';
    $mail->Body = '<h2 alighn=center>Subscribe Channel</h2><br><h4 align=center>Like this Fecy! :)</h4>';

    if (!$mail->send()) {
        echo 'not send!';
    } else {
        echo 'Msg sent!';
    }





// $to = 'pilifmaximus@gmail.com';
// $subject = 'Djes Ba';
// $from = 'filipworkrate@gmail.com';
 
// // To send HTML mail, the Content-type header must be set
// $headers  = 'MIME-Version: 1.0' . "\r\n";
// $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
 
// // Create email headers
// $headers .= 'From: '.$from."\r\n".
//     'Reply-To: '.$from."\r\n" .
//     'X-Mailer: PHP/' . phpversion();
 
// // Compose a simple HTML email message
// $message = '<html><body>';
// $message .= '<h1 style="color:#f40;">Hi Jane!</h1>';
// $message .= '<p style="color:#080;font-size:18px;">Will you marry me?</p>';
// $message .= '</body></html>';
 
// // Sending email
// if(mail($to, $subject, $message, $headers)){
//     echo 'Your mail has been sent successfully.';
// } else{
//     echo 'Unable to send email. Please try again.';
// }
?>