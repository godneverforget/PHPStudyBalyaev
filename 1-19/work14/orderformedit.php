<html>

<head>
    <title>"Web-программирование" (Баляев Д.С.) - Работа 14</title>
    <meta name='viewport' content='width=device-width, initial-scale=1.0' charset='utf-8'>
</head>

<body>
    <h1>Магазин "Автозапчасти" (база данных)</h1>
    <p><a href='index.php'>Принятые заказы</a>
    <h2>Изменение заказа</h2>
    <form action="processorderedit.php" method=post>
        <table border=0>
            <tr bgcolor=#cccccc>
                <td width=150>Товар
                <td width=15>Количество
                    <?php
                    $id = $_REQUEST['id'];
                    echo '<input type="hidden" name="id" value="' . $id . '">';
                    $handle = new mysqli('localhost', 'root', '', 'spareparts');
                    $query = "SELECT id, tirekol, oilkol, sparkkol, itog, adress, date_format(zakazdate,'%d.%m.%Y %H:%i') zakazdate
                        FROM zakaz
                        WHERE id=$id";
                    $result = $handle->query($query);
                    $row = $result->fetch_assoc();
                    echo '<tr><td>Автопокрышки<td align=left><input type="text"
name="tirekol" size=3 maxlength=3 value=' . $row['tirekol'] . '>';
                    echo '<tr><td>Машинное масло<td align=left><input type="text"
name="oilkol" size=3 maxlength=3 value=' . $row['oilkol'] . '>';
                    echo '<tr><td>Свечи зажигания<td align=left><input type="text"
name="sparkkol" size=3 maxlength=3 value=' . $row['sparkkol'] . '>';
                    echo '<tr><td>Адрес доставки<td align=center><input type="text"
name="adress" size=60 value="' . htmlspecialchars($row['adress']) . '">';
                    ?>
            <tr>
                <td colspan=2 align=center><input type=submit value="Изменить заказ"></td>
            </tr>
        </table>
    </form>
</body>

</html>