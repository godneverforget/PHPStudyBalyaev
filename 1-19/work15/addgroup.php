<html>

<head>
    <title>"Web-программирование" (Баляев Д.С.) - Работа 15
    </title>
    <meta name='viewport' content='width=device-width, initial-scale=1.0' charset='utf-8'>
</head>

<body>
    <h1>Информация о студентах</h1>
    <h2>Новая группа добавлена: </h2>

    <?php
    $group = $_POST['group_number'];

    if (!$group) {
        echo "<p>Вы заполнили не все поля!</p><br>" .
            "<p><a href = 'formaddgroup.php'>Добавить новую группу</a></p>";
        exit;
    } else {
        echo "<strong>Группа: </strong>" . $group . "<br>";
    }

    $handle = new mysqli('localhost', 'root', '', 'students');
    $query = "INSERT INTO `groups` (group_number)  VALUES ('$group')";

    $result = $handle->query($query);
    if ($result) echo "Данные сохранены";
    if (!$result) echo "Ошибка сохранения данных";

    echo '<h2>Новая группа записана.</h2>';
    ?>
    <p><a href='index.php'>Просмотр информации о студентах</a>

</body>

</html>