<?php
session_start();
$name = $_POST["name"];
$age = $_POST["age"];
$salary = $_POST["salary"];

$photo = "directory/" . basename($_FILES["photo"]["name"]);
move_uploaded_file($_FILES["photo"]["tmp_name"], $photo);

$_SESSION["user_data"] = array(
    "Ваше имя" => $name,
    "Ваш возраст" => $age,
    "Ваша заработная плата" => $salary,
    "Ваше фото" => $photo
);

if (isset($_SESSION['user_data'])) {
    $data = $_SESSION['user_data'];
    $filePath = 'directory/test.txt';
    $file = fopen($filePath, 'w');

    if ($file) {
        foreach ($data as $key => $value) {
            $line = $key . ': ' . $value . "\n";
            fwrite($file, $line);
        }
        fclose($file);
        session_unset();
        session_destroy();
        echo '<p>Данные успешно записаны.</p><br>';
        echo '<a href="page3.php"><button>Перейти на следующую страницу.</button></a>';
    } else {
        echo "Пользовательские данные не найдены.";
    }
}
