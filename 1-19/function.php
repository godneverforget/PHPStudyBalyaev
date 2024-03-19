<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    function myFoo($arg1, $arg2)
    {
        $a = $arg1 + $arg2;
        //в таком случае функция будет возвращать значение $a
        return $a;
    }
    $sum = myFoo(10, 15);
    echo $sum;
    echo "<br>";
    //используем повторно
    $sum2 = myFoo(16, 25);
    echo $sum2;
    echo "<br>";
    //можно даже так
    $sum3 = myFoo(30, 12) + myFoo(33, 66);
    echo $sum3;
    echo "<br>";
    function test()
    {
        $a = 2 + 3;
        echo "ответ: {$a}"; //вот как еще можно выводить переменные
    }
    //вызываем функцию и код внутри нее выполнится
    test();
    ?>
</body>

</html>