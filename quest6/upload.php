<?php
include 'functions.php';
// Пути загрузки файлов
$path = 'F:\MyProdjects\jun\quest6\img\big/';
$smallPath = 'F:\MyProdjects\jun\quest6\img\small/';
$tmp_path = 'tmp/';
// Массив допустимых значений типа файла
$types = array('image/gif', 'image/png', 'image/jpeg');

// Обработка запроса
if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
    // Проверяем тип файла
    if (!in_array($_FILES['picture']['type'], $types))
        die('Запрещённый тип файла. <a href="?">Попробовать другой файл?</a>');

    // Загрузка файла и вывод сообщения
    if (!@copy($_FILES['picture']['tmp_name'], $path . $_FILES['picture']['name']))
        echo 'Что-то пошло не так';
    else
        image_resize(
                $_FILES['picture']['tmp_name'],
                $smallPath . $_FILES['picture']['name'],
                200
        );
        echo 'Загрузка удачна <a href="' . $path . $_FILES['picture']['name'] . '">Посмотреть</a> ' ;
}

?>
<!DOCTYPE HTML PUBLIC  "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
    <title>Загрузка изображения с изменением размеров</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>
<body>
<h1>Загрузка изображения с изменением размеров</h1>
<form method="post" enctype="multipart/form-data">
    <input type="file" name="picture">
    <input type="submit" value="Загрузить">
</form>
</body>
</html>