<html>

<head>
    <title>"Web-программирование" (Баляев Д.С.) - Работа 9
    </title>
    <meta name='viewport' content='width=device-width, initial-scale=1.0' charset='utf-8'>
</head>

<body>
    <h1>Добавить группу</h1>
    <form action="addGroup.php" method="post">
        <table border="0">
            <tr bgcolor=#CCCCCCC>
                <td>Наименование информации</td>
                <td>Данные</td>
            <tr>
                <td>Номер группы</td>
                <td align="left">
                    <input type="number" name="number_of_group" size="3" maxlength="3">
            <tr>
                <td colspan="2" align="center">
                    <input type="submit" value="Добавить группу">
                </td>
        </table>
    </form>
    <p><a href="index.php">Просмотр информации о студентах</a></p>
</body>

</html>