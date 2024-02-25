<html>

<head>
    <title>"Web-программирование" (Баляев Д.С.) - Работа 9
    </title>
    <meta name='viewport' content='width=device-width, initial-scale=1.0' charset='utf-8'>
</head>

<body>
    <?php
    $group = $_POST['number_of_group'];
    if (!$group) {
        echo "<p>Вы заполнили не все поля!</p><br>" .
            "<p><a href = 'studentform.php'>Добавить информацию о студенте</a></p>";
        exit;
    } else {
        echo "Добавлена новая группа: <br>";
        echo "Группа: " . $group . "<br>";
    }
    @$fp = fopen('group_numbers.txt', 'ab');
    if (!$fp) {
        echo "<p><strong>В настоящий момент ваш запрос не
может быть обработан. "
            . "Пожалуйста, попытайтесь позже.</strong></p>" .
            "<p><a href='index.php'>Просмотр информации о студентах</a></body></html>";
        exit;
    }
    $outputstring = "$group\n";
    fwrite($fp, $outputstring, strlen($outputstring));
    fclose($fp);
    echo '<p>Новая группа добавлена.</p>';
    ?>
    <p><a href='index.php'>Просмотр информации о студентах</a>
</body>