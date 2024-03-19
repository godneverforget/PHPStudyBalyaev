<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>"Web-программирование" (Баляев Д.С.) - Работа 10</title>
</head>

<body>
    <?php
    echo "<p><a href='index.php'>К содержанию</a></p>";
    ?>
    <form method="GET">
        <input name="a">
        <input name="b">
        <input name="c">
        <input type="submit" name="send" value="Вычислить">
    </form>
    <?php
    if (isset($_GET['send'])) {
        if (isset($_GET['a']) && isset($_GET['b']) && isset($_GET['c'])) {
            $a = (int)$_GET['a'];
            $b = (int)$_GET['b'];
            $c = (int)$_GET['c'];
            if ($a !== 0 || $b !== 0 || $c !== 0) {
                $D = pow($b, 2) - 4 * $a * $c;
                if ($D > 0) {
                    $x1 = (-$b - sqrt($D)) / (2 * $a);
                    $x2 = (-$b + sqrt($D)) / (2 * $a);
                    echo "<p><a>Первый корень: x1 = $x1</a></p>";
                    echo "<p><a>Второй корень: x2 = $x2</a></p>";
                } else if ($D === 0) {
                    $x1 = $x2 = -$b / (2 * $a);
                    echo "<p><a>Корни равны: x1 = x2 = $x1</a></p>";
                } else {
                    echo "<p><a>Корней нет! (D < 0)</a></p>";
                }
            } else {
                echo "<p><a>Введите коэффициенты квадратного уравнения!</a></p>";
            }
        }
    }
    ?>
</body>

</html>