<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>"Web-программирование" (Баляев Д.С.) - Работа 2</title>
</head>

<body>
    <?php
    echo "<p><a href='index.php'>К содержанию</a></p>";
    $a = 4;
    $b = 16;
    $c = $a + $b;
    echo "<p>a = " . $a;
    echo "<p>b = " . $b;
    echo "<p>a + b = " . $c;
    echo "<p>$a + $b = $c";
    echo '<p>$a + $b = $c';
    echo "<p>$a + $b = " . ($a + $b);
    echo "<p>$a - $b = " . ($a - $b);
    echo "<p>$a * $b = " . ($a * $b);
    echo "<p>$a / $b = " . ($a / $b);
    echo "<p>$a mod $b = " . ($a % $b);
    echo "<p>$b mod $a = " . ($b % $a);
    echo "<p>sqrt($a) = " . (sqrt($a));
    echo "<p>sqrt($b) = " . (sqrt($b));
    echo "<p>$a ^ $b = " . (pow($a, $b));
    echo "<p>$b ^ $a = " . (pow($b, $a));
    echo "<p>exp($a) = " . (exp($a));
    echo "<p>exp($b) = " . (exp($b));
    ?>
</body>

</html>