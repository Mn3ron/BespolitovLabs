<html>
<head>
</head>
<body>

<header>Задача 1</header>

<p> Вариант 2:
<p>
    <?php
    $a=rand(-20,20);
    $c=rand(-20,20);
    $d=rand(-20,20);


    if ($a != 3) {
        $result= (2*$c - ($d/23))/(1-($a/3));
        print ('2 * (' . $c . ') - (' .$d . ') /23' .  '<br>');
        print ('———————— = '. $result.  '<br>');
        print ('1 - (' . $a . ') / 3' .  '<br>');
    }
    else {
        print ('Выявлено деление на ноль' .  '<br>');
    }



    ?>
<p> Вариант 3:
<p>
    <?php
    $a=rand(-20,20);
    $c=rand(-20,20);
    $d=rand(-20,20);


    if ($d - $a != 1) {
        $result= (2*$c + (51*$d))/($d - $a - 1);

        print ('2 * (' . $c . ') + 51 * (' .$d . ')'.  '<br>');
        print ('———————— = '. $result.  '<br>');
        print ($d. ' - (' . $a . ') - 1'.  '<br>');
    }
    else {
        print ('Выявлено деление на ноль' .  '<br>');
    }



    ?>
</body>
</html>