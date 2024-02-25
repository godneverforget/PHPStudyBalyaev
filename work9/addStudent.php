<html>

<head>
    <title>"Web-программирование" (Баляев Д.С.) - Работа 9
    </title>
    <meta name='viewport' content='width=device-width, initial-scale=1.0' charset='utf-8'>
</head>

<body>
    <h1>Информация о студентах</h1>
    <h2>Новый студент добавлен: </h2>
    <?php
    $group = $_POST['group_number'];
    $full_name = $_POST['full_name'];
    $date_of_birth = $_POST['date_of_birth'];
    $gender = $_POST['gender'];
    $credit_card_number = $_POST['credit_card_number'];
    $passport_data = $_POST['passport_data'];

    if (!$full_name || !$date_of_birth || !$gender || !$group || !$passport_data) {
        echo "<p>Вы заполнили не все поля!</p><br>" .
            "<p><a href = 'studentform.php'>Добавить информацию о студенте</a></p>";
        exit;
    } else {
        echo "<strong>Группа: </strong>" . $group . "<br>";
        echo "<strong>Ф.И.О.: </strong>" . $full_name . "<br>";
        echo "<strong>День рождения: </strong>" . $date_of_birth . "<br>";
        echo "<strong>Номер зачетки: </strong>" . $credit_card_number . "<br>";
        echo "<strong>Паспортные данные (серия и номер): </strong>" . $passport_data . "<br>";
    }

    $outputstring =
        "<strong>Группа: </strong>" . $group .
        "\t<strong>Ф.И.О.: </strong>" . $full_name .
        "\t<strong>День рождения: </strong>" . $date_of_birth .
        "\t<strong>Номер зачетки: </strong>" . $credit_card_number .
        "\t<strong>Паспортные данные (серия и номер): </strong>" . $passport_data . "\n";
    @$fp = fopen('students.txt', 'ab');
    if (!$fp) {
        echo "<p><strong>В настоящий момент ваш запрос не
может быть обработан. "
            . "Пожалуйста, попытайтесь позже.</strong></p>" .
            "<p><a href='index.php'>Просмотр информации о студентах</a></body></html>";
        exit;
    }
    fwrite($fp, $outputstring, strlen($outputstring));
    fclose($fp);
    echo '<h2>Информация о студенте записана.</h2>';
    ?>
    <p><a href='index.php'>Просмотр информации о студентах</a>
</body>

</html>