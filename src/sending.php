<meta http-equiv='refresh' content='10; url=http://thecode.local/'>
<meta charset="UTF-8" />
<?php
// Получаем значения переменных из пришедших данных
$name = $_POST['name'];
$email = $_POST['email'];
$email2 = "apanovich.daniel2004.11@gmail.com";
$header = $_POST['header'];
$message = $_POST['message'];
$number = $_POST['number'];
// Формируем сообщение для отправки, в нём мы соберём всё, что ввели в форме
$mes = "Имя: $name \nE-mail: $email \nТема: $header \nНомер: $number\nТекст: $message";
$mes2 = "Имя: $name \nE-mail: $email2 \nТема: $header \nНомер: $number\nТекст: $message";
// Пытаемся отправить письмо по заданному адресу
$send = mail($email, $header, $mes, "Content-type:text/plain; charset = UTF-8\r\nFrom:$email");
$send2 = mail($email2, $header, $mes2, "Content-type:text/plain; charset = UTF-8\r\nFrom:$email");
// Если отправка прошла успешно
if ($send == 'true') {echo "Message sent";}
// Если письмо не ушло
else {echo "Something go wrong";}
?>