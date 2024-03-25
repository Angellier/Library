<?php

$Date = filter_var(trim($_POST['Date']), FILTER_SANITIZE_STRING);
$Password = filter_var(trim($_POST['Password']), FILTER_SANITIZE_STRING);
$Name = filter_var(trim($_POST['Name']), FILTER_SANITIZE_STRING);
$Email = filter_var(trim($_POST['Email']), FILTER_SANITIZE_STRING);

$Pass = md5($Password);

$mysql = new mysqli('localhost','root','','library');

$mysql->query("INSERT INTO `books` (`Date`, `Password`, `Name`, `Email`) VALUES('$Date', '$Pass', '$Name', '$Email')");

$mysql->close();

header('Location: ../src/login.php');

?>

