<html>

<head>
    <title>"Web-программирование" (Баляев Д.С.) - Работа 15
    </title>
    <meta name='viewport' content='width=device-width, initial-scale=1.0' charset='utf-8'>
</head>

<body>
    <h1>Информация о студентах</h1>
    <h2>Форма заполнения информации о студенте</h2>
    <p><a href='index.php'>Информация о студентах</a>
    <form action="addgroup.php" method=post>
        <table border=0>
            <tr bgcolor=#cccccc>
                <td width=250>Наименование информации
                <td width=150>Данные
            <tr>
                <td>Группа</td>
                <td align=left>
                    <input type="text" name="group_number" size=10>
            <tr>
                <td colspan=2 align=left>
                    <input type=submit value="Добавить информацию">
        </table>
    </form>
    <p><a href='index.php'>Просмотр информации о студентах</a>
</body>

</html>