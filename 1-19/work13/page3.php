<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>"Web-программирование" (Баляев Д.С.) - Работа 13</title>
</head>

<body>
    <?php
    $filePath = 'directory/test.txt';

    if (file_exists($filePath)) {
        $file = fopen($filePath, 'r');

        echo '<ul>';
        while ($line = fgets($file)) {
            list($key, $value) = explode(':', $line, 2);

            if (isset($key, $value)) {
                echo "<li>" . $key . ": " . $value . "</li>";
                if ($key === 'Ваше фото') {
                    echo '<img src="' . $value . '" style="max-width: 1000px; max-height: 1000px;">';
                }
            }
        }
        echo '</ul>';

        fclose($file);
        echo '<a href="index.php"><button>Перейти в начало.</button></a>';
    } else {
        echo "Файл не найден.";
    }

    ?>
</body>

</html>