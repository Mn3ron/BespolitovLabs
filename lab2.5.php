<html>
<head>
</head>
<body>
<header>Бесполитов Д.А.</header>
<header>Задача 5</header>

<p> Вариант 1:
<p>
    <?php
    $a = rand(0,100);
    $b = rand(0,100);

    $z = func ($a-$b,$b*$b-$a) + func($a*$a*$b,$b*$b);
    print ("Значение числа a = ". $a .'<br>');
    print ("Значение числа b = ". $b .'<br>');
    print ("Значение переменной z = ". $z .'<br>');
    function func($u, $t) {
        if ($u > 0 and $t > 0) {
            return $u*$u + $t;
        } elseif ($u <= 0 and $t <= 0){
            return $t*$t + $u;
        } else return $u+$t;

    }
    ?>
<p> Вариант 2:
<p>
    <?php
    $a = rand(0,100);
    $b = rand(0,100);

    $z = func2 ($a,$b*$b-$a) + func($a,$b*$b);
    print ("Значение числа a = ". $a .'<br>');
    print ("Значение числа b = ". $b .'<br>');
    print ("Значение переменной z = ". $z .'<br>');
    function func2($u, $t) {
        if ($u >= 0) {
            return $u + 2*$t;
        } elseif ($u <=-1){
            return $u*$u-2*$t;
        } else return $t + $u;

    }
    ?>
<p></p>
<input type="button" value="Обновить" onClick="window.location.reload( true );">
<p><a href= "index.php">Назад</a></p>
</body>
</html>