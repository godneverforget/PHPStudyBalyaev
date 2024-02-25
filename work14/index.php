<html>
<head>
    <title>"Web-программирование" (Баляев Д.С.) - Работа 14</title>
    <meta name='viewport' content='width=device-width, initial-scale=1.0' charset='utf-8'>
</head>
<body>
    <h1>Магазин "Автозапчасти" (база данных)</h1>
    <h2>Принятые заказы</h2>
    <?php
    $handle = new mysqli('localhost', 'root', '', 'spareparts');
    $query = "SELECT id, tirekol, oilkol, sparkkol, itog, adress, date_format(zakazdate,'%d.%m.%Y %H:%i') as zakazdate
         FROM zakaz
         ORDER BY zakazdate DESC";
    $result = $handle->query($query);
    $numresult = $result->num_rows;
    echo '<p>Количество записей - ' . $numresult;
    echo '<table border=1>';
    echo '<tr><th>№</th>';
    echo '<th>Дата и время заказа</th>';
    echo '<th>Покрышек (шт.)</th>';
    echo '<th>Масла (бут.)</th>';
    echo '<th>Свечей зажигания (шт.)</th>';
    echo '<th>Итого (руб.)</th>';
    echo '<th>Адрес доставки</th>';
    echo '<th></th>';
    echo '<th></th>';

    for ($i = 0; $i < $numresult; $i++) {
        $row = $result->fetch_assoc();
        echo '<tr><td>' . $row['id'];
        echo '</td><td>' . $row['zakazdate'];
        echo '</td><td>' . $row['tirekol'];
        echo '</td><td>' . $row['oilkol'];
        echo '</td><td>' . $row['sparkkol'];
        echo '</td><td>' . $row['itog'];
        echo '</td><td>' . $row['adress'];
        echo '</td><td>';
        echo '<form action="delorder.php" method="post">';
        echo '<input type="hidden" name="id" value="' . $row['id'] . '">';
        echo '<input type="submit" value="Удалить">';
        echo '</form>';
        echo '</td><td>';
        echo '<form action="orderformedit.php" method="post">';
        echo '<input type="hidden" name="id" value="' . $row['id'] . '">';
        echo '<input type="submit" value="Изменить">';
        echo '</form>';
    }
    echo '</table>'
    ?>
    <p><a href='orderformadd.php'>Оформить заказ</a>
    <p><a href='../index.php'>К содержанию</a>
</body>
</html>