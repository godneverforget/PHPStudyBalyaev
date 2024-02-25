<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>"Web-программирование" (Баляев Д.С.) - Работа 3</title>
</head>

<body>
    <?php
    echo "<p><a href='index.php'>К содержанию</a></p>";

    $arr1 = ['a' => 2, 'b' => 5, 'c' => 3, 'd' => 9];
    $res = $arr1['a'] * $arr1['b'] + $arr1['c'] * $arr1['d'];
    echo "<p>Результат, полученный в результате умножения соответствующих элементов массива и их сложения в массиве '1': " . $res;

    $arr2 = ['a' => 1, 'b' => 2, 'c' => 3, 'd' => 4];
    echo "<p>Количество элементов в массиве '2': " . count($arr2);

    $arr3 = ['a' => 1, 'b' => 2, 'c' => 3];
    $arr3['a'] = 'H';
    $arr3['b'] = 'i';
    $arr3['c'] = '!';
    echo "<p>Массив '3' с измененными элементами: ";
    var_dump($arr3);
    echo "<br>";
    print_r($arr3);

    $arr4 = ['a' => 1, 'b' => 2, 'c' => 3];
    $arr4['a'] += 3;
    $arr4['b'] += 3;
    $arr4['c'] += 3;
    echo "<p>Массив '4' к каждому элементу которого было прибавлено 3: ";
    var_dump($arr4);
    echo "<br>";
    print_r($arr4);

    $arr5 = [];
    $arr5['year'] = 2023;
    $arr5['month'] = 'October';
    $arr5['day'] = 26;
    echo "<p>Массив '5', в котором текущие год, месяц, день: ";
    var_dump($arr5);
    echo "<br>";
    print_r($arr5);
    ?>

</body>

</html>