<?php
$result = require __DIR__ . '\calc.php';
?>
<head>
    <title>Калькулятор</title>
</head>
<body>
<b>Результат вычислений:</b>
<br>
<?= $result ?>
</body>
