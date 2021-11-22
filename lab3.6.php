<html>
<head>
</head>
<body>
<header>Бесполитов Д.А.</header>
<header>Задача 6</header>

<p> <p>
    <?php
    $var5 = $_GET ["var5"];
    $varPred = $_GET ["varPred"];
    $varWord = $_GET ["varWord"];
    $var9 = $_GET ["var9"];

    $var5Array = explode(" ",$var5);
    $varPred = explode(" ",$varPred);
    $var9Array = str_split($var9);
    $countPred = 0;
    $indOfWord = null;
    for ($i = 0; $i <= count($varPred);$i++) {
        if ($varPred[$i] == $varWord) $indOfWord = $i;
    }
    unset($varPred[$indOfWord]);
    for ($i = 0; $i <= strlen($var9);$i++){
        if ($var9Array[$i] == ".") $countPred++;
        if ($var9Array[$i] == "!") $countPred++;
        if ($var9Array[$i] == "?") $countPred++;
        if ($var9Array[$i] == "…") $countPred++;
    }
    if ($countPred == 0) $countPred++;
    print ("Вариант 1. Результат: ". '<br>');
    for ($i = 0; $i <= count($varPred);$i++) {
        print ($varPred[$i] . " ");
    }
    echo '<br>';
    print ("Вариант 5. Слова: ". '<br>');
    for ($i = 0; $i <= count($var5Array);$i++) {
        print ($var5Array[$i] . '<br>');
    }
    echo '<br>';
    print ("Вариант 9. Количество предложений: ". $countPred . '<br>');
    ?>
<p><a href= "lab3.6.html">Назад</a></p>
</body>
</html>