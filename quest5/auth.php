<?php
if (isset($_POST['login'])) {
    session_start();
    $_SESSION['name'] = htmlentities($_POST['name']);

    if (isset($_COOKIE['lastPage'])) {
        header("Location: {$_COOKIE['lastPage']}");
    } else {
        header("Location: a.php");
    }
}

header("Content-type: text/html; charset=utf-8");
?>

<h3>Cтраница авторизации</h3>
<form method="post">
    Ваш логин*: <input type="text" name="name" required><br>
    <input type="submit" name="login" value="Войти"><br>
</form>
