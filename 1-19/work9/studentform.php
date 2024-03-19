<html>

<head>
    <title>"Web-программирование" (Баляев Д.С.) - Работа 9
    </title>
    <meta name='viewport' content='width=device-width, initial-scale=1.0' charset='utf-8'>
</head>

<body>
    <h1>Информация о студентах</h1>
    <h2>Форма заполнения информации о студенте</h2>
    <?php
    function gr_num()
    {
        @$f = fopen('group_numbers.txt', 'rb');
        while (!feof($f)) {
            $group_num = fgets($f, 3);
            return $group_num;
        }
    }

    ?>
    <form action="addStudent.php" method=post>
        <table border=0>
            <tr bgcolor=#cccccc>
                <td width=250>Наименование информации
                <td width=150>Данные
            <tr>
                <td>Учебная группа
                <td align=left>
                    <select name="group_number">
                        <?php
                        @$fp = fopen('group_numbers.txt', 'rb');
                        while (!feof($fp)) {
                            $group = fgets($fp);
                            echo "<option>$group</option>";
                        }
                        ?>
                    </select>
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
                    <input type="text" name="credit_card_number" size=5 maxlength=8>
            <tr>
                <td>Паспортные данные (серия и номер)
                <td align=left>
                    <input type="text" name="passport_data" placeholder="xxxx xxxxxx" size=10 maxlength=11>
            <tr>
                <td colspan=2 align=left>
                    <input type=submit value="Добавить информацию">
        </table>
    </form>
    <p><a href='index.php'>Просмотр информации о студентах</a>
</body>

</html>