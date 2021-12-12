<html>
<head>
</head>
<body>
<header>Бесполитов Д.А.</header>
<header>Задача 3</header>

<FORM method="post" action="<?php print $PHP_SELF ?>">

    Введите N: <INPUT type="number" name="n" size="3" required>
    <p> <p>
        Действие: <SELECT NAME="z" SIZE="1">
            <OPTION VALUE="1" SELECTED> четные
            <OPTION VALUE="2"> нечетные
            <OPTION VALUE="3"> простые
            <OPTION VALUE="4"> составные
        </SELECT>
    <P> <INPUT type="submit" name="obr" value="Вперед">
</FORM>
<?
if (isset($_POST["obr"])) {
    $n = $_POST ["n"];

    echo ("Результат: ");
    switch ($_POST["z"]) {
        case 1:
            For ($i = 1; $i<=$n;$i++){
                $mass[$i] = $i;
                if (($mass[$i] % 2) == 0)
                print ( $mass[$i] ." ");
            }
            break;
        case 2:
            For ($i = 1; $i<=$n;$i++){
                $mass[$i] = $i;
                if (($mass[$i] % 2) != 0)
                    print ( $mass[$i] ." ");
            }
            break;
        case 3:
            if ($n < 2){print "Введите число больше 1 ";}
            For ($i = 2; $i<=$n;$i++){
                $flag = true;
                $mass[$i] = $i;
                for ($j = 2; $j < $mass[$i]; $j++){
                    if (($mass[$i] % $j) == 0){
                        $flag = false;
                        break;
                    }
                }
                if ($flag == true) print ( $mass[$i] ." ");
                }
        break;


        case 4:
            if ($n < 2){print "Введите число больше 1 ";}
            For ($i = 2; $i<=$n;$i++){
                $flag = false;
                $mass[$i] = $i;
                for ($j = 2; $j < $mass[$i]; $j++){
                    if (($mass[$i] % $j) == 0){
                        $flag = true;
                        break;
                    }
                }
                if ($flag == true) print ( $mass[$i] ." ");
            }
            break;
    }
}
?>
<p><a href= "index.php">Назад</a></p>
</body>
</html>