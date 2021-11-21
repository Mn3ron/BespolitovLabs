<html>
<head>
</head>
<body>
<header>Бесполитов Д.А.</header>
<header>Задача 6</header>

<p> <p>
    <?php
    include ('myLib.php');
    tasktext(9);
    $n = rand(2,20);
    $m = rand(2,20);
    $arr = randmass ($n,$m);
    if (task($arr,$n,$m) == -21) print ("Нет отрицательных". '<br>');
    else
        print ("Max = " . task($arr,$n,$m). '<br>');
    tasktext(3);
    printmass($arr,$n,$m);
    print  '<br>';
    $arr2 = task2($arr,$n,$m);
    printmass($arr2,$n,$m);
    ?>
<p><a href= "index.php">Назад</a></p>
</body>
</html>