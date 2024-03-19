<html>

<head>
    <title>"Web-программирование" (Баляев Д.С.) - Работа 15
    </title>
    <meta name='viewport' content='width=device-width, initial-scale=1.0' charset='utf-8'>
</head>

<body>
    <h1>Информация о студентах</h1>
    <h2>Новый студент добавлен: </h2>

    <?php
    $group = $_POST['group_number'];
    $full_name = $_POST['full_name'];
    $date_of_birth = $_POST['date_of_birth'];
    $gender = $_POST['gender'];
    $credit_card_number = $_POST['credit_card_number'];
    $passport_data = $_POST['passport_data'];

    if (!$full_name || !$date_of_birth || !$gender || !$group || !$passport_data) {
        echo "<p>Вы заполнили не все поля!</p><br>" .
            "<p><a href = 'studentformadd.php'>Добавить информацию о студенте</a></p>";
        exit;
    } else {
        echo "<strong>Группа: </strong>" . $group . "<br>";
        echo "<strong>Ф.И.О.: </strong>" . $full_name . "<br>";
        echo "<strong>День рождения: </strong>" . $date_of_birth . "<br>";
        echo "<strong>Пол: </strong>" . $gender . "<br>";
        echo "<strong>Номер зачетки: </strong>" . $credit_card_number . "<br>";
        echo "<strong>Паспортные данные (серия и номер): </strong>" . $passport_data . "<br>";
    }

    $studentdate = date('Y-m-d H:i:s');
    $handle = new mysqli('localhost', 'root', '', 'students');
    $query = "INSERT INTO studentinf (group_number, full_name, date_of_birth, gender, credit_card_number, passport_data, studentdate) 
    VALUES ('$group', '$full_name', '$date_of_birth', '$gender', '$credit_card_number', $passport_data, '$studentdate')";


    $result = $handle->query($query);
    if ($result) echo "Данные сохранены";
    if (!$result) echo "Ошибка сохранения данных";

    echo '<h2>Информация о студенте записана.</h2>';
    ?>
    <p><a href='index.php'>Просмотр информации о студентах</a>

</body>

</html>