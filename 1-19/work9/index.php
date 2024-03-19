<head>
    <title>"Web-программирование" (Баляев Д.С.) - Работа 9</title>
    <meta name='viewport' content='width=device-width, initial-scale=1.0' charset='utf-8'>
</head>

<body>
    <h1>Информация о студентах</h1>
    <h2>Просмотр информации о студентах</h2>
    <?php
    @$fp = fopen('students.txt', 'rb');
    if (!$fp) {
        echo "<p>Нет информации о студентах. Пожалуйста, попытайтесь позже.";
    } else {
        while (!feof($fp)) {
            $student = fgets($fp, 999);
            echo '<br>' . $student;
        }
        fclose($fp);
    }
    ?>
    <p><a href='studentform.php'>Добавить информацию о студенте</a>
    <h2>Список групп</h2>
    <?php
    @$fp = fopen('group_numbers.txt', 'rb');
    if (!$fp) {
        echo "<p>Нет групп!</p>";
    } else {
        while (!feof($fp)) {
            $group = fgets($fp, 999);
            echo $group . "<br>";
        }
    }
    fclose($fp);
    ?>
    <p><a href='groupform.php'>Добавить группу</a></p>
    <p><a href='../index.php'>К содержанию</a>
</body>

</html>