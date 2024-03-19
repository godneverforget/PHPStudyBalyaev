<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>"Web-программирование" (Баляев Д.С.) - Работа 13</title>
</head>

<body>
    <form action="page2.php" method="post" enctype="multipart/form-data">
        <label for="name">Введите ваше имя:</label>
        <input type="text" name="name" required><br>

        <label for="age">Введить ваш возраст:</label>
        <input type="text" name="age" required style="margin-top: 20px;"><br>

        <label for="salary">Введите вашу заработную плату:</label>
        <input type="text" name="salary" required style="margin-top: 20px;"><br>

        <label for="photo">Загрузите ваше фото:</label>
        <input type="file" name="photo" accept="image/*" required style="margin-top: 20px;"><br>

        <input type="submit" value="Отправить" style="margin-top: 20px;">
    </form>
    <p><a href='../index.php'>К содержанию</a></p>
</body>

</html>