<?php 
require_once('phpmailer/PHPMailerAutoload.php');
$mail = new PHPMailer;
$mail->CharSet = 'utf-8';

$name = $_POST['user_name'];
$surname = $_POST['user_surname'];
$phone = $_POST['user_phone'];
//$email = $_POST['user_email'];
//$message = $_POST['user_message'];

//$mail->SMTPDebug = 3;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';  																							// Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'acc.for.requests@gmail.com'; // Ваш логин от почты с которой будут отправляться письма
$mail->Password = 'accMsProff6320'; // Ваш пароль от почты с которой будут отправляться письма
$mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 465; // TCP port to connect to / этот порт может отличаться у других провайдеров

$mail->setFrom('info@ms-proff.ru'); // От кого будет уходить письмо?
//$mail->addAddress('info@ms-proff.ru');     // Кому будет уходить письмо 
$mail->addAddress('info@ms-proff.ru'); 

$mail->addReplyTo('info@ms-proff.ru', 'Information');
//$mail->addCC('cc@example.com');
//$mail->addBCC('bcc@example.com');
//$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'Заявка';
$mail->Body = '' .$name . ' ' . $surname . ' оставил(a) заявку, телефон : ' .$phone;
$mail->AltBody = '';

if(!$mail->send()) {
    echo 'Error';
    print_r($_POST);
} else {
    function goback() {
        header("Location: {$_SERVER['HTTP_REFERER']}");
        exit;
    }
    goback();
    //header('location: index.html');
}
?>