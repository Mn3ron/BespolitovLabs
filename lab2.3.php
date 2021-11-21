<html>
<head>
</head>
<body>
<header>Бесполитов Д.А.</header>
<header>Задача 3</header>

<p> <p>
    <?php
    $cust = array("cnum" => "2001",
        "cname" => "Hoffman",
        "city" => "London",
        "snum" => "1001");
    print ("Массив с ключами: " . '<br>');
    foreach($cust as $key => $value)
    {
        echo "$key = $value <br />";
    }
    /*$cust[rating] =100;
    print ("Дополненый массив с ключами: " . '<br>');
    foreach($cust as $key => $value)
    {
        echo "$key = $value <br />";
    }*/
    print ("Сортировка по ключам: ". '<br>');
    ksort($cust);
    foreach($cust as $key => $value)
    {
        echo "$key = $value <br />";
    }
    print ("Сортировка функцией sort(). Ключи заменились на индексы: ". '<br>');
    sort($cust);
    foreach($cust as $key => $value)
    {
        echo "$key = $value <br />";
    }
    ?>
<p><a href= "index.php">Назад</a></p>
</body>
</html>