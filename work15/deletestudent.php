<html>

<head>
    <title>"Web-программирование" (Баляев Д.С.) - Работа 15</title>
    <meta name='viewport' content='width=device-width, initial-scale=1.0' charset='utf-8'>
</head>

<body>
<h1>Информация о студентах</h1>
    <h2>Просмотр информации о студентах</h2>
    <?php
    $id = $_REQUEST['id'];
    $handle = new mysqli('localhost', 'root', '', 'students');
    $query = "DELETE FROM studentinf WHERE id=$id";
    $result = $handle->query($query);
    if ($result) echo "Данные удалены";
    if (!$result) echo "Ошибка удаления данных";
    echo "<p><a href='index.php'>Информация о студентах</a>";
    ?>
</body>

</html>