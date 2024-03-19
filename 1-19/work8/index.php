<head>
    <title>"Web-программирование" - Работа 8</title>
    <meta name='viewport' content='width=device-width, initial-scale=1.0' charset='utf-8'>
</head>

<body>
    <h1>Магазин "Автозапчасти"</h1>
    <h2>Принятые заказы</h2>
    <?php
    @$fp = fopen('orders.txt', 'rb');
    if (!$fp) {
        echo "<p>Нет ожидающих заказов. Пожалуйста, попытайтесь позже.";
        echo "<p><a href='orderform.php'>Оформить заказ</a>";
        echo "<p><a href='../index.php'>К содержанию</a>";
        exit;
    }
    while (!feof($fp)) {
        $order = fgets($fp, 999);
        echo '<br>' . $order;
    }
    fclose($fp);
    ?>
    <p><a href='orderform.php'>Оформить заказ</a>
    <p><a href='../index.php'>К содержанию</a>
</body>

</html>