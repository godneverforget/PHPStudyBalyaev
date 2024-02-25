<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>"Web-программирование" (Баляев Д.С.) - Работа 5</title>
</head>

<body>
    <?php
    echo "<p><a href='index.php'>К содержанию</a></p>";

    echo "<p>Количество секунд, прошедших с 13:12:59 15-го марта 2000 года до настоящего момента времени: ", (time() - mktime(13, 12, 59, 3, 15, 2000)), "<br>";

    function day_of_the_week($day)
    {
        $arr = ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'];
        switch ($day) {
            case '0':
                echo "$arr[0].<br>";
                break;
            case '1':
                echo "$arr[1].<br>";
                break;
            case '2':
                echo "$arr[2].<br>";
                break;
            case '3':
                echo "$arr[3].<br>";
                break;
            case '4':
                echo "$arr[4].<br>";
                break;
            case '5':
                echo "$arr[5].<br>";
                break;
            case '6':
                echo "$arr[6].<br>";
                break;
            default:
                echo "<p>Error!<br>";
                break;
        }
    }
    echo "<p>Today ", day_of_the_week(date('w'));

    $task2 = date('w', mktime(0, 0, 0, 06, 06, 2006));
    echo "<p>06.06.2006 was ", day_of_the_week($task2);

    $task2 = date('w', mktime(0, 0, 0, 05, 15, 2004));
    echo "<p>Day of the week on my birthday (15.05.2004) was ", day_of_the_week($task2);

    $task3 = (int)((strtotime('1 January 2024') - time()) / (60 * 60 * 24));
    echo "<p>Until the new year is left: $task3 day(s)<br>";
    ?>
</body>

</html>