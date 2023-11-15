<?php

require_once('phpmailer/PHPMailerAutoload.php');
$mail = new PHPMailer;
$mail->CharSet = 'utf-8';

$name = $_POST['Full_name'];
$phone = $_POST['Mobile_Number'];
$email = $_POST['Email_Address'];
$subject = $_POST['Email_Subject'];

$mail->isSMTP();
$mail->Host = 'smtp.mail.ru';
$mail->SMTPAuth = true;
$mail->Username = 'akimovs.portfolio@mail.ru';
$mail->Password = '!Vlad220506';
$mail->SMTPSecure = 'ssl';
$mail->Port = 465;

$mail->setFrom('akimovs.portfolio@mail.ru');
$mail->addAddress('vladlenprk220506@gmail.com');
$mail->isHTML(true);

$mail->Subject = 'Заявка с тестового сайта';
$mail->Body    = '' .$name . ' оставил заявку, его телефон ' .$phone. '<br>Почта этого пользователя: ' .$email. '<br>Тема письма: ' .subject;
$mail->AltBody = '';

if(!$mail->send()) {
    echo 'Error';
} else {
    header('location: thank-you.html');
}
?>