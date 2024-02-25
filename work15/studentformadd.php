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
    <form action="addstudent.php" method=post>
        <table border=0>
            <tr bgcolor=#cccccc>
                <td width=250>Наименование информации
                <td width=150>Данные
            <tr>
                <td>Группа</td>
                <td align=left>
                    <select name="group_number">
                        <?php
                        $handle = new mysqli('localhost', 'root', '', 'students');
                        $query = "SELECT group_number FROM `groups`";
                        $result = $handle->query($query);

                        if ($result) {
                            while ($row = $result->fetch_assoc()) {
                                $groupNumber = $row['group_number'];
                                echo "<option value=\"$groupNumber\">$groupNumber</option>";
                            }
                        } else {
                            echo "Ошибка при получении данных из базы";
                        }
                        ?>
                    </select>

                </td>
            <tr>
                <td>Ф.И.О. студента
                <td align=left>
                    <input type="text" name="full_name" placeholder="Фамилия Имя Отчество" size=40 maxlength=50>
            <tr>
                <td>Дата рождения
                <td align=left>
                    <input type="date" name="date_of_birth" placeholder="дд.мм.гггг">
            <tr>
                <td>Пол студента
                <td align=left>
                    <select name="gender">
                        <option value="М">Мужской</option>
                        <option value="Ж">Женский</option>
                    </select>
            <tr>
                <td>№ зачётки
                <td align=left>
                    <input type="text" name="credit_card_number" size=5 maxlength=15>
            <tr>
                <td>Паспортные данные (серия и номер)
                <td align=left>
                    <input type="text" name="passport_data" placeholder="xxxxxxxxxx" maxlength=10 size=10>
            <tr>
                <td colspan=2 align=left>
                    <input type=submit value="Добавить информацию">
        </table>
    </form>
    <p><a href='index.php'>Просмотр информации о студентах</a>
</body>

</html>