<html>
<head>
</head>
<body>
<header>Бесполитов Д.А.</header>
<header>Задача 2</header>

<FORM method="post" action="<?php print $PHP_SELF ?>">

    а: <INPUT type="number" name="a" size="3" required>
    b: <INPUT type="number" name="b" size="3" required>
    <p> <p>
        Действие: <SELECT NAME="z" SIZE="1">
            <OPTION VALUE="1" SELECTED> сложить
            <OPTION VALUE="2"> вычесть
            <OPTION VALUE="3"> умножить
            <OPTION VALUE="4"> разделить
        </SELECT>
    <P> <INPUT type="submit" name="obr" value="Проверить">
</FORM>
<?
if (isset($_POST["obr"])) {
    $a = $_POST ["a"];
    $b = $_POST ["b"];
    echo ("Результат: ");
    switch ($_POST["z"]) {
        case 1:
            echo ($a + $b);
            break;
        case 2:
            echo ($a - $b);
            break;
        case 3:
            echo ($a * $b);
            break;
        case 4:
            if ($b == 0)
                echo ("На ноль делить нельзя");
            else
                echo ($a / $b);
            break;
    }

}
?>
<p><a href= "index.php">Назад</a></p>
</body>
</html>