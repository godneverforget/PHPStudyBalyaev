<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>"Web-программирование" (Баляев Д.С.) - Работа 11</title>
</head>

<body>
    <?php
    echo "<p><a href='index.php'>К содержанию</a></p>";
    ?>
    <form method="post">
        <textarea name="text"><?= $_POST['text'] ?? '' ?></textarea>
        <input type="submit" name="send" value="Вычислить">
    </form>

    <?php
    if (isset($_POST['send'])) {
        $text = $_POST['text'];
        $len = mb_strlen($text);
        $count = str_word_count($text);
        if ($len === 0) {
            echo "Введите текст!<br>";
        } else {
            echo "Количество слов в тексте: ", $count, "<br>";
            echo "Количество символов в тексте: ", $len, "<br>";
        }
    }
    ?>

</body>

</html>