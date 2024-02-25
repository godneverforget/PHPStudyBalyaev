<html>

<head>
    <title>"Web-программирование" (Баляев Д.С.) - Работа 15</title>
    <meta name='viewport' content='width=device-width, initial-scale=1.0' charset='utf-8'>
</head>

<body>
    <h1>Информация о студентах</h1>
    <h2>Просмотр информации о студентах</h2>
    <?php
    $id = $_REQUEST['id'];
    $group_number = $_REQUEST['group_number'];
    $full_name = $_REQUEST['full_name'];
    $date_of_birth = $_REQUEST['date_of_birth'];
    $gender = $_REQUEST['gender'];
    $credit_card_number = $_REQUEST['credit_card_number'];
    $passport_data = $_REQUEST['passport_data'];


    if ((!isset($group_number)) || (!isset($full_name)) || (!isset($date_of_birth)) || (!isset($gender)) || (!isset($credit_card_number)) || (!isset($passport_data))) {
        echo '<p>Вы не указали все данные. Повторите ввод заказа.';
        echo '<p><a href="index.php">Принятые заказы</a>';
        echo '</body></html>';
        exit;
    }

    $studentdate = date('Y-m-d H:i:s');

    $handle = new mysqli('localhost', 'root', '', 'students');
    $query = "UPDATE `studentinf` SET
    group_number = '$group_number',
    full_name = '$full_name',
    date_of_birth = '$date_of_birth',
    gender = '$gender',
    credit_card_number = '$credit_card_number',
    passport_data = '$passport_data',
    studentdate = '$studentdate'
    WHERE id = $id";

    $result = $handle->query($query);
    if ($result) echo "Данные сохранены";
    if (!$result) echo "Ошибка сохранения данных";
    echo "<p><a href='index.php'>Информация о студентах</a>";
    ?>
</body>

</html>