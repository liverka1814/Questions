<?php
//Циклы и массивы
/*данные задания выполнял руководствуюсь теме раздела. Некоторые задания
можно выполнить гораздо эффективнее не используя циклы.*/
echo '<br>Задание 1<br>';
$index = 0;
while ($index <= 100){
    if ($index % 3 === 0){
        echo $index;
        echo "<br>";
    }
    $index++;
}

echo '<br>Задание 2<br>';
$i = 0;
do{
    if ($i === 0){
        echo $i . '-это ноль';
        echo "<br>";
    } elseif ($i % 2 === 0){
        echo $i . '-четное число';
        echo "<br>";

    } else {
        echo $i . '-нечетное число';
        echo "<br>";
    }
    $i++;
} while ($i <= 10);

echo '<br>Задание 3<br>';
for($i = 0; $i < 10; print_r($i++)){}
echo "<br>";

echo '<br>Задание 4<br>';
$array = [
    "Амурская область" => array(
        "Белогорск",
        "Благовещенск",
        "Зея",
        "Райчихинск",
        "Свободный",
        "Тында",
        "Шимановск"
    ),
    "Архангельская область" => array(
        "Архангельск",
        "Коряжма",
        "Котлас",
        "Новодвинск",
        "Онега",
        "Северодвинск"
    ),
    "Кировская область" => array(
        "Киров",
        "Вятские Поляны",
        "Кирово-Чепецк",
        "Котельнич",
        "Слободской"
    ),
];

foreach ($array as $key1 => $value1){
    echo $key1 . ":<br>";
    foreach ($value1 as $value2){
        echo "{$value2}, ";
    }
    echo "<br>";
}

echo "<br>Задание 5<br>";
foreach ($array as $key1 => $value1){
    echo $key1 . ":<br>";
    foreach ($value1 as $value2){
        if (mb_substr($value2, 0, 1) === "К"){
            echo "{$value2}, ";
        }
    }
    echo "<br>";
}

echo "<br>Задание 6<br>";
function transliter($str)
{
    $result = '';
    $converter = array(
        'а' => 'a', 'б' => 'b', 'в' => 'v', 'г' => 'g', 'д' => 'd',
        'е' => 'e', 'ж' => 'zh', 'з' => 'z', 'и' => 'i', 'й' => 'j',
        'к' => 'k', 'л' => 'l', 'м' => 'm', 'н' => 'n', 'о' => 'o',
        'п' => 'p', 'р' => 'r', 'с' => 's', 'т' => 't', 'у' => 'u',
        'ф' => 'f', 'х' => 'h', 'ц' => 'tc', 'ч' => 'ch', 'ш' => 'sh',
        'щ' => 'shch', 'ъ' => '\'', 'ы' => 'y', 'ь' => '\'', 'э' => 'e',
        'ю' => 'yu', 'я' => 'ya'
    );

    $lengh = mb_strlen($str);

    for ($i = 0; $i < $lengh; $i++){

        $simv = mb_substr($str, $i, 1);

        switch ($simv){
            case " ":
                $result = $result . " ";
                break;
            case "-":
                $result = $result . '-';
                break;
            case "_":
                $result = $result . "_";
                break;
            default:
                foreach ($converter as $key1 => $value1){
                    if (mb_substr($str, $i, 1) === $key1){
                        $result = $result . $value1;
                    }
                }
                break;
        }
    }
    return $result;
}

print_r(transliter("что-то на русском"));

echo '<br>задание 7<br>';
function replacmentSpase($str)
{
    $result = '';
    $i = 0;
    $lengh = mb_strlen($str);

    while($i < $lengh){
        if (mb_substr($str, $i, 1) === " "){
            $result = $result . "_";
        } else {
            $result = $result . mb_substr($str, $i, 1);
        }
        $i++;
    }
    return $result;
}

print_r(replacmentSpase("Какой-то текст без пробелов"));

echo '<br>Задание 8<br>';
function convertURL($str)
{
    $result = '';
    $converter = array(
        'а' => 'a', 'б' => 'b', 'в' => 'v', 'г' => 'g', 'д' => 'd',
        'е' => 'e', 'ж' => 'zh', 'з' => 'z', 'и' => 'i', 'й' => 'j',
        'к' => 'k', 'л' => 'l', 'м' => 'm', 'н' => 'n', 'о' => 'o',
        'п' => 'p', 'р' => 'r', 'с' => 's', 'т' => 't', 'у' => 'u',
        'ф' => 'f', 'х' => 'h', 'ц' => 'tc', 'ч' => 'ch', 'ш' => 'sh',
        'щ' => 'shch', 'ъ' => '\'', 'ы' => 'y', 'ь' => '\'', 'э' => 'e',
        'ю' => 'yu', 'я' => 'ya'
    );

    $lengh = mb_strlen($str);

    for ($i = 0; $i < $lengh; $i++){

        $simv = mb_substr($str, $i, 1);

        switch ($simv){
            case " ":
                $result = $result . "_";
                break;
            case "-":
                $result = $result . '-';
                break;
            case "_":
                $result = $result . "_";
                break;
            default:
                foreach ($converter as $key1 => $value1){
                    if (mb_substr($str, $i, 1) === $key1){
                        $result = $result . $value1;
                    }
                }
                break;
        }
    }
    return $result;
}
print_r(convertURL('какой то адрес'));
