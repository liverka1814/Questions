<?php
session_start();

setcookie('lastPage', $_SERVER['REQUEST_URI'], time()+60*60*24*30); //1 месяц время жизни куки

if (isset($_POST['logout'])) {
    $_SESSION = [];
}

$message = '';
if (isset($_SESSION['name'])) {
    $message = "Добро пожаловать, {$_SESSION['name']}. Вы авторизованы. <br>";
    include_once ("logout.php");
}

header("Content-type: text/html; charset=utf-8");
?>
<h3>Страница A.php</h3>
Перейти на страницу index.php <a href="index.php"><input type="submit" value="index.php"></a><br><br>
Перейти на страницу b.php <a href="b.php"><input type="submit" value="b.php"></a><br><br>
Вернутся в начало <a href="../index.php"><input type="submit" value="В начало"></a><br><br>

