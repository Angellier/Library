<?php 
 
session_start(); 
 
if (!isset($_POST['Email']) || !isset($_POST['Password'])) { 
    exit("Отсутствуют обязательные параметры"); 
} 
 
$Email = filter_var(trim($_POST['Email']), FILTER_SANITIZE_STRING); 
$Password = filter_var(trim($_POST['Password']), FILTER_SANITIZE_STRING); 
$Pass = md5($Password); 
$mysql = new mysqli('localhost','root','','library'); 
 
if ($mysql -> connect_errno) { 
  echo "Failed to connect to MySQL: " . $mysql -> connect_error; 
  exit(); 
} 
 
$stmt = $mysql->prepare("SELECT * FROM books WHERE Email=?"); 
$stmt->bind_param("s", $Email); 
$stmt->execute(); 
 
$result = $stmt->get_result(); 
$user = $result->fetch_assoc(); 
 
if(!$user) { 
    echo "Пользователь не найден"; 
    exit(); 
} 
 
if (!($Pass == $user['password'])) { 
    echo 'Неверный пароль'; 
    exit(); 
} 
 
if ($Pass == $user['password']) { 
    $authed = true; 
    $_SESSION["Email"] = $Email; 
    header('Location: ../src/index.php'); 
    exit(); 
} 
 
$stmt->close(); 
$mysql->close(); 
?>
