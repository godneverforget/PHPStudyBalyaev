<html>

<head>
    <title>"Web-программирование" (Баляев Д.С.) - Работа 14</title>
    <meta name='viewport' content='width=device-width, initial-scale=1.0' charset='utf-8'>
</head>

<body>
    <h1>Магазин "Автозапчасти" (база данных)</h1>
    <h2>Удаление заказа</h2>
    <?php
    $id = $_REQUEST['id'];
    $handle = new mysqli('localhost', 'root', '', 'spareparts');
    $query = "DELETE FROM zakaz WHERE id=$id";
    $result = $handle->query($query);
    if ($result) echo "Данные удалены";
    if (!$result) echo "Ошибка удаления данных";
    echo "<p><a href='index.php'>Принятые заказы</a>";
    ?>
</body>

</html>