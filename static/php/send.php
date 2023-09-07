$FullName = $_POST['FullName'];
$email = $_POST['email'];
$number = $_POST['number'];
$emailSubject = $_POST['emailSubject'];
$message = $_POST['message'];


$FullName = htmlspecialchars($FullName);
$email = htmlspecialchars($email);
$number = htmlspecialchars($number);
$emailSubject = htmlspecialchars($emailSubject);
$message = htmlspecialchars($message);


$FullName = urldecode($FullName);
$email = urldecode($email);
$number = urldecode($number);
$emailSubject = urldecode($emailSubject);
$message = urldecode($message);


$FullName = trim($FullName);
$email = trim($email);
$number = trim($number);


if (mail("vladlenprk220506@gmail.com", "Заказ с сайта", "ФИО:".$FullName.". E-mail: ".$email ,"From: .$email \r\n"))
 {
    echo "сообщение успешно отправлено";
} else {
    echo "при отправке сообщения возникли ошибки";
}