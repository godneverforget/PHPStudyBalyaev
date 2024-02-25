<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>"Web-программирование" (Баляев Д.С.) - Работа 12</title>
</head>

<body>
    <?php
    echo "<p><a href='index.php'>К содержанию</a></p>";
    $month = [1 => 'Январь', 'Февраль', 'Март', 'Апрель', 'Май', 'Июнь', 'Июль', 'Август', 'Сентябрь', 'Октябрь', 'Ноябрь', 'Декабрь'];
    $week = ['Воскресенье', 'Понедельник', 'Вторник', 'Среда', 'Четверг', 'Пятница', 'Суббота'];
    ?>

    <form method="get">
        <label for="day">День</label>
        <select name="day" id="">
            <?php
            for ($i = 1; $i < 32; $i++) {
                if ($i == date('d')) {
                    echo "<option selected>$i</option>";
                } else {
                    echo "<option>$i</option>";
                }
            }
            ?>
        </select>

        <label for="month">Месяц</label>
        <select name="month" id="">
            <?php
            foreach ($month as $item) {
                if ($item == $month[date('m')]) {
                    echo "<option selected>$item</option>";
                } else {
                    echo "<option>$item</option>";
                }
            }
            ?>
        </select>

        <label for="year">Год</label>
        <select name="year" id="">
            <?php
            for ($i = 1990; $i < 2026; $i++) {
                if ($i == date('Y')) {
                    echo "<option selected>$i</option>";
                } else {
                    echo "<option>$i</option>";
                }
            }
            ?>
        </select>

        <input type="submit" name="send" value="Узнать">
    </form>

    <?php
    if (isset($_GET['send'])) {
        $day = $_GET['day'];
        $mon = array_search($_GET['month'], $month);
        $year = $_GET['year'];

        if ($mon === 2 && $day > 29) {
            echo "<br>В феврале не может быть больше 29 дней!";
        } else if ($mon === 2 && $day <= 29 && $year % 4 === 0) {
            echo "<br>День недели, соответствующий выбранной дате: ", "<strong>", $week[date('w', mktime(0, 0, 0, $mon, $day, $year))], "</strong>";
        } else if ($mon === 2 && $day > 28 && $year % 4 !== 0) {
            echo "<br>В невисокосном году в феврале не может быть больше 29 дней !";
        } else {
            echo "<br>День недели, соответствующий выбранной дате: ", "<strong>", $week[date('w', mktime(0, 0, 0, $mon, $day, $year))], "</strong>";
        }
    }
    ?>

</body>

</html>