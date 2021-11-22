<html>
<head>
</head>
<body>
<header>Бесполитов Д.А.</header>
<header>Задача 1</header>

<p> <p>
    <?php

    $a = $_GET ["a"];
    $b = $_GET ["b"];

    echo ("a = " . $a);
    echo ("<br>");
    echo ("b = " . $b);
    echo ("<br>");
    if ($a == $b)
        echo ("Числа a и b равны");
    elseif ($a > $b)
        echo ("Число a > b");
    else
        echo ("Число b > a");
    echo ("<hr>");





    ?>
<p><a href= "lab3.1.html">Назад</a></p>
</body>
</html>