<html>
<head>
</head>
<body>
<header>Бесполитов Д.А.</header>
<header>Задача 2</header>

<p> <p>
    <?php



    echo '<table border="1">';

    for ($i=0; $i<=9; $i++){

        echo '<tr>';
        for ($j=1; $j<=10; $j++){

            echo '<td style="color:'.($j%2?'black':'red').'">'.($i*10+$j).'</td>';
        }
        echo '</tr>';
    }

    echo '</table>';



    ?>
<p><a href= "index.php">Назад</a></p>
</body>
</html>