<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>"Web-программирование" (Баляев Д.С.) - Работа 6</title>
</head>

<body>
    <?php
    echo "<p><a href='index.php'>К содержанию</a></p>";

    function sum_of_the_digits($num)
    {
        $arr1 = str_split($num, 1);
        $sum = 0;
        for ($i = 0; $i < count($arr1); $i++) {
            $sum += $arr1[$i];
        }
        echo "<p>Сумма цифр числа $num равна: $sum<br>";
    }
    $number = '6789876542345678';
    sum_of_the_digits($number);
    echo "<p>Сумма цифр числа $number равна: ", array_sum(str_split($number, 1)), "<br>";



    function transformation($Y_m_d)
    {
        $arr = str_split($Y_m_d, 4);
        $month = abs((int)$arr[1]);
        $date = date_create($Y_m_d);

        switch ($month) {
            case '1':
                $month = ' января ';
                break;
            case '2':
                $month = ' февраля ';
                break;
            case '3':
                $month = ' марта ';
                break;
            case '4':
                $month = ' апреля ';
                break;
            case '5':
                $month = ' мая ';
                break;
            case '6':
                $month = ' июня ';
                break;
            case '7':
                $month = ' июля ';
                break;
            case '8':
                $month = ' августа ';
                break;
            case '9':
                $month = ' сентября ';
                break;
            case '10':
                $month = ' октября ';
                break;
            case '11':
                $month = ' ноября ';
                break;
            case '12':
                $month = ' декабря ';
                break;
            default:
                echo "<p>Error!<br>";
                break;
        }
        echo "<p>", date_format($date, 'd'), $month, date_format($date, 'Y'), "<br>";
    }
    $str = '2001-01-24';
    transformation($str);

    function common_divisors($n1, $n2)
    {
        $min = ($n1 < $n2) ? $n1 : $n2;
        $divisors = [];
        for ($i = 1; $i < $min / 2; $i++) {
            if (($n1 % $i == 0) and ($n2 % $i == 0)) {
                array_push($divisors, $i);
            }
        }
        echo "<p>Общие делители чисел $n1 и $n2: ";
        for ($i = 0; $i < count($divisors) - 1; $i++) {
            echo $divisors[$i], ", ";
        }
        echo $divisors[count($divisors) - 1], ".";
    }
    $number1 = 12600;
    $number2 = 34000;
    common_divisors($number1, $number2);
    ?>
</body>

</html>