<html>
<head>
</head>
<body>
<header>Бесполитов Д.А.</header>
<header>Задача 2</header>

<p> <p>
    <?php
    $n=rand(3,20);
    print ("Массив из ". $n . " элементов, заполненный случайными числами: ");
    For ($i = 1; $i<=$n;$i++){
        $rand[$i] = rand(0,100);
        print ( $rand[$i] ." ");
    }
    print ('<br>'. "Сортировка: ");
    sort($rand);
    For ($i = 0; $i<$n;$i++){
        print ( $rand[$i] ." ");
    }
    print ('<br>'. "Обратный порядок: ");
    $reversed = array_reverse($rand);
    For ($i = 0; $i<$n;$i++){
        print ( $reversed[$i] ." ");
    }
    print ('<br>'. "Удален последний элемент: ");
    array_pop($rand);
    For ($i = 0; $i<$n;$i++){
        print ( $rand[$i] ." ");
    }
    print ('<br>'. "Количество элементов в массиве: " . count($rand). " Сумма элементов массива: ". array_sum($rand));
    print ('<br>'. "Среднее арифметическое элементов массива: ". array_sum($rand)/count($rand));
    if (in_array(50, $rand))
        print ('<br>'. "Число 50 есть в массиве");
    else
        print ('<br>'. "Числа 50 нет в массиве");
    print ('<br>'. "Удалены повторяющиеся элементы: ");
    $rand1 = array_unique($rand);
    For ($i = 0; $i<$n;$i++){
        print ( $rand1[$i] ." ");
    }






    ?>
<p><a href= "index.php">Назад</a></p>
</body>
</html>