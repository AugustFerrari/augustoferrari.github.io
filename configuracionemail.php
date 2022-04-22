<?php 
    use PHPMailer\PHPMailer\PHPMailer;

    require_once('librerias/phpmailer/Exception.php');
    require_once('librerias/phpmailer/PHPMailer.php');
    require_once('librerias/phpmailer/SMTP.php');

    $mail = new PHPMailer(true);

    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'aguferrari100@gmail.com'; 
    $mail->Password = 'tinito10'; 
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port = '587';

?>