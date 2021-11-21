<html>
<head>
</head>
<body>

<header>Задача 3</header>

<p> Вариант 1:
<p>
    <?php
    $n=rand(0,100);
    print('N = '. $n.  '<br>');
    print('Делители числа '. $n. ': ');
    for ($i = 1; $i <= $n; $i++)

        if ($n % $i == 0)

            print ( $i ." ");

    ?>
<p> Вариант 2:
<p>
    <?php
    $n=rand(0,100);
    $m=rand(0,100);
    $dn = 0;
    $dm = 0;
    print('N = '. $n.  '<br>');
    print('M = '. $m.  '<br>');

    for ($i = 1; $i <= $n; $i++){
        if ($n % $i == 0)
            $dn = $dn + $i;
    }for ($i = 1; $i <= $m; $i++){
        if ($m % $i == 0)
            $dm = $dm + $i;
    }
    print('Сумма делителей '. $n. ': '. $dn .'<br>');
    print('Сумма делителей '. $m. ': '. $dm.'<br>');
    if ($dn == $dm)
        print ('Числа N и M дружественные '. '<br>');
    else
        print ('Числа N и M недружественные '. '<br>');



    ?>
<p></p>
<input type="button" value="Обновить" onClick="window.location.reload( true );">
<p><a href= "index.php">Назад</a></p>
</body>
</html>