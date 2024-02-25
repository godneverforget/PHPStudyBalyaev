<head>
    <title>"Web-программирование" (Баляев Д.С.) - Работа 15</title>
    <meta name='viewport' content='width=device-width, initial-scale=1.0' charset='utf-8'>
</head>

<body>
    <h1>Информация о студентах</h1>
    <h2>Просмотр информации о студентах</h2>
    <?php
    $handle = new mysqli('localhost', 'root', '', 'students');

    $query = "SELECT id, group_number, full_name, date_of_birth, gender, credit_card_number, passport_data, date_format(studentdate,'%d.%m.%Y %H:%i') as studentdate
         FROM studentinf
         ORDER BY studentdate DESC";
    $result = $handle->query($query);
    $numresult = $result->num_rows;

    echo '<p>Количество записей - ' . $numresult;
    echo '<table border=1>';
    echo '<tr><th>№</th>';
    echo '<th>Дата и время заказа</th>';
    echo '<th>Группа</th>';
    echo '<th>Ф.И.О.</th>';
    echo '<th>Дата рождения</th>';
    echo '<th>Пол</th>';
    echo '<th>Номер зачётки</th>';
    echo '<th>Паспортные данные</th>';
    echo '<th></th>';
    echo '<th></th>';

    for ($i = 0; $i < $numresult; $i++) {
        $row = $result->fetch_assoc();
        echo '<tr><td>' . $row['id'];
        echo '</td><td>' . $row['studentdate'];
        echo '</td><td>' . $row['group_number'];
        echo '</td><td>' . $row['full_name'];
        echo '</td><td>' . $row['date_of_birth'];
        echo '</td><td>' . $row['gender'];
        echo '</td><td>' . $row['credit_card_number'];
        echo '</td><td>' . $row['passport_data'];
        echo '</td><td>';
        echo '<form action="deletestudent.php" method="post">';
        echo '<input type="hidden" name="id" value="' . $row['id'] . '">';
        echo '<input type="submit" value="Удалить">';
        echo '</form>';
        echo '</td><td>';
        echo '<form action="studentformedit.php" method="post">';
        echo '<input type="hidden" name="id" value="' . $row['id'] . '">';
        echo '<input type="submit" value="Изменить">';
        echo '</form>';
    }
    echo '</table>'
    ?>

    <p><a href='studentformadd.php'>Добавить информацию о студенте</a><br>
    <p><a href='formaddgroup.php'>Добавить новую группу</a>

    <h2>Список групп</h2>
    <?php
    $handle = new mysqli('localhost', 'root', '', 'students');

    $query = "SELECT group_number FROM `groups`";
    $result = $handle->query($query);
    $numresult = $result->num_rows;

    echo '<p>Количество записей - ' . $numresult;
    echo '<table border=1>';
    echo '<th>Группы</th>';

    for ($i = 0; $i < $numresult; $i++) {
        $row = $result->fetch_assoc();
        echo '</td><td>' . $row['group_number'];
    }
    echo '</table>';
    ?>

    <p><a href='../index.php'>К содержанию</a>
</body>

</html>