<?php
include 'functions.php';
$dir = 'img/small/';
$bdir = 'img/big/';
$images = get_images($dir);
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Галерея</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<form action="upload.php">
    <input type="submit" value="Загрузить фотографию">
</form>
<div class="wrapper">

    <div class="gallery">
        <?php if ($images):?>
        <?php foreach ($images as $image): ?>
            <div class="item">
            <div>
                <a href="<?=$bdir . $image?>">
                    <img class="front" src="<?=$dir . $image?>" alt="">
                </a>
            </div>
        </div>
        <?php endforeach; ?>
        <?php else: ?>
        <p>В данной галерее нет картинок</p>
        <?php endif;?>

    </div>
</div>
</body>
</html>