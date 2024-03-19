<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>"Web-программирование" (Баляев Д.С.) - Работа 4</title>
</head>

<body>
    <?php
    echo "<p><a href='index.php'>К содержанию</a></p>";

    $num = 17;

    if ($num >= 10 and $num <= 20) {
        echo "<p>Число лежит на отрезке: 10 <= $num <= 20";
    } else {
        echo "<p>Число выходит за границы отрезка: 10 <= $num <= 20";
    }
    echo "<br>";

    $test = true;

    if (!$test) {
        echo "<p>Ответ: +++";
    } else {
        echo "<p>Ответ: ---";
    }
    echo "<br>";

    $day = 32;

    if ($day < 11 and $day > 0) {
        echo "<p>Число '$day' попадает в первую декаду месяца<br>";
    } else if ($day > 10 and $day < 21) {
        echo "<p>Число '$day' попадает во вторую декаду месяца<br>";
    } else if ($day > 20 and $day < 32) {
        echo "<p>Число '$day' попадает в третью декаду месяца<br>";
    } else {
        echo "<p>Значение '$day' не является числом месяца!<br>";
    }

    $lang = 'de';

    switch ($lang) {
        case 'ru':
            echo "<p>Введенный язык: 'рус'<br>";
            break;
        case 'en':
            echo "<p>Введенный язык: 'анг'<br>";
            break;
        case 'de':
            echo "<p>Введенный язык: 'нем'<br>";
            break;
        default:
            echo "<p>Введенный язык не известен!<br>";
            break;
    }

    $num1 = -12;

    echo "<p>Число $num1 ( если 'true', то число положительное, иначе отрицательное): ";
    var_dump($check = $num1 >= 0 ? true : false);
    ?>
</body>

</html>