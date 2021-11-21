<html>
<head>
</head>
<body>
<header>Бесполитов Д.А.</header>
<header>Задача 4</header>

<p> Вариант 9:
<p>
    <?php
    $n=rand(3,20);
    print ("Массив A из ". $n . " элементов, заполненный случайными числами: ");
    For ($i = 1; $i<=$n;$i++){
        $A[$i] = rand(0,100);
        print ( $A[$i] ." ");
    }
    print ('<br>'. "Массив B из ". $n . " элементов, заполненный случайными числами: ");
    For ($i = 1; $i<=$n;$i++){
        $B[$i] = rand(0,100);
        print ( $B[$i] ." ");
    }
    print ('<br>'. "Отсортированный массив A: ");
    sort($A);
    For ($i = 0; $i<$n;$i++){
        print ( $A[$i] ." ");
    }
    print ('<br>'. "Отсортированный массив B: ");
    sort($B);
    For ($i = 0; $i<$n;$i++){
        print ( $B[$i] ." ");
    }
    /*function isEquals($A, $B, $n) {
        $i = $n;
           while ($i--){
               if ($A[$i] == $B[$i]) return true;
           }
          return false;

    }*/
    if (array_diff($A,$B) == null)
        print ('<br>'. "ДА");
    else
        print ('<br>'. "НЕТ");
    ?>
<p> Вариант 10:
<p>
    <?php
    $n=rand(3,20);
    print ("Массив A из ". $n . " элементов, заполненный случайными числами: ");
    For ($i = 1; $i<=$n;$i++){
        $A[$i] = rand(0,100);
        print ( $A[$i] ." ");
    }
    $K = rand(0,100);
    $counOf = 0;
    print ('<br>'."K =". $K);
    print ('<br>'."скорректированный массив A: ");
    For ($i = 1; $i<=$n;$i++){
        if ($A[$i] < $K){
            $counOf++;
            $A[$i] = 0;
        }
        print ( $A[$i] ." ");
    }
    print ('<br>'."Количество элементов < ". $K . ": " . $counOf);


    ?>
<p></p>
<input type="button" value="Обновить" onClick="window.location.reload( true );">
<p><a href= "index.php">Назад</a></p>
</body>
</html>