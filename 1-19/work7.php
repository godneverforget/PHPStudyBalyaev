<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>"Web-программирование" (Баляев Д.С.) - Работа 7</title>
</head>

<body>
    <?php
    echo "<p><a href='index.php'>К содержанию</a></p>";

    //task 1
    $arr = [1, 2, 3, 4, 5, 6, 7, 8, 9];
    $result = 0;
    foreach ($arr as $value) {
        $result += $value;
    }
    echo "<p>Arithmetic mean: ", $result / count($arr), "</p>";

    //task 2
    $arr1 = ["Воскресенье" => 0, "Понедельник" => 1, "Вторник" => 2, "Среда" => 3, "Четверг" => 4, "Пятница" => 5, "Суббота" => 6];
    $day = date('w');
    foreach ($arr1 as $key => $value) {
        if ($value == $day) {
            echo "<i>$key </i>";
        } else {
            echo "$key ";
        }
    }
    echo "<br>";
    echo "<br>";

    //task 3
    for ($i = 1; $i < 10; $i++) {
        for ($j = 1; $j < 4; $j++) {
            echo "$i";
        }
    }
    echo "<br>";

    //task 4
    $arr2 = [];
    for ($k = 1; $k < 100; $k += 2){
        $arr2[] = $k; 
    }
    echo "<p>Массив заполненный нечетными числами в пределах от 1 до 99: ";
    foreach ($arr2 as $value) {
        echo $value, ", ";
    }
    ?>
</body>

</html>