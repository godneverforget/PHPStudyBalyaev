<html>

<head>
    <title>"Web-программирование" (Баляев Д.С.) - Работа 15</title>
    <meta name='viewport' content='width=device-width, initial-scale=1.0' charset='utf-8'>
</head>

<body>
    <h1>Информация о студентах</h1>
    <p><a href='index.php'>Информация о студентах</a></p>
    <h2>Изменение информации</h2>

    <?php
    $id = $_REQUEST['id'];
    echo '<form action="editstudent.php" method="post">';
    echo '<input type="hidden" name="id" value="' . $id . '">';

    $handle = new mysqli('localhost', 'root', '', 'students');
    $query = "SELECT id, group_number, full_name, date_of_birth, gender, credit_card_number, passport_data, date_format(studentdate,'%d.%m.%Y %H:%i') as studentdate
                FROM studentinf
                WHERE id=$id";
    $result = $handle->query($query);
    $row = $result->fetch_assoc();
    ?>
    <form action="editstudent.php" method="post">
        <table border=0>
            <tr bgcolor=#cccccc>
                <td width=250>Наименование информации</td>
                <td width=150>Данные</td>
            </tr>
            <tr>
                <td>Ф.И.О.</td>
                <td align=left><input type="text" name="full_name" size=40 maxlength=50 value='
                <?php
                echo $row['full_name'];
                ?>'></td>
            </tr>
            <tr>
                <td>Дата рождения</td>
                <td align=left><input type="date" name="date_of_birth" value='
                <?php
                echo $row['date_of_birth'];
                ?>'></td>
            </tr>
            <tr>
                <td>Группа</td>
                <td align="left">
                    <select name="group_number">
                        <?php
                        $query = "SELECT group_number FROM `groups`";
                        $result = $handle->query($query);
                        while ($group_row = $result->fetch_assoc()) {
                            $groupNumber = $group_row['group_number'];
                            echo "<option value=\"$groupNumber\" " . ($row['group_number'] == $groupNumber ? 'selected' : '') . ">$groupNumber</option>";
                        }
                        ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Пол</td>
                <td align="left">
                    <select name="gender">
                        <option value="М" <?php
                                            echo ($row['gender'] == 'М' ? 'selected' : '');
                                            ?>>Мужской</option>
                        <option value="Ж" <?php echo ($row['gender'] == 'Ж' ? 'selected' : '');
                                            ?>>Женский</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>№ зачётки</td>
                <td align=left><input type="text" name="credit_card_number" size=5 maxlength=15 value='
                <?php
                echo $row['credit_card_number'];
                ?>'></td>
            </tr>
            <tr>
                <td>Паспортные данные (серия и номер)</td>
                <td align=left><input type="text" name="passport_data" size=10 maxlength=10 value='
                <?php
                echo $row['passport_data'];
                ?>'></td>
            </tr>
            <tr>
                <td colspan=2 align=center><input type="submit" value="Изменить информацию"></td>
            </tr>
        </table>
    </form>
</body>

</html>