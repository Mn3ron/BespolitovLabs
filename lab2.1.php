<html>
<head>
</head>
<body>
<header>Бесполитов Д.А.</header>
<header>Задача 1</header>

<p> <p>
    <?php
    print ("Треугольный массив: ");
    For ($i = 1; $i<=10;$i++){
        $treug[$i] = ($i*($i+1))/2;
        print ( $treug[$i] ." ");
    }
    print ('<br>'. "Массив квадратов: ");
    For ($i = 1; $i<=10;$i++){
        $kvd[$i] = $i*$i;
        print ( $kvd[$i] ." ");
    }
    $rez = array_merge($treug, $kvd);
    print ('<br>'. "Результат: ");
    For ($i = 0; $i<20;$i++){
        print ( $rez[$i] ." ");
    }
    print ('<br>'. "Сортировка: ");
    sort($rez);
    For ($i = 0; $i<20;$i++){
        print ( $rez[$i] ." ");
    }
    print ('<br>'. "Удален первый элемент: ");
    unset($rez[0]);
    For ($i = 0; $i<20;$i++){
        print ( $rez[$i] ." ");
    }
    print ('<br>'. "Удалены повторяющиеся элементы: ");
    $rez1 = array_unique($rez);
    For ($i = 0; $i<20;$i++){
        print ( $rez1[$i] ." ");
    }






    ?>
<p><a href= "index.php">Назад</a></p>
</body>
</html>