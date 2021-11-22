<html>
<head>
</head>
<body>
<header>Бесполитов Д.А.</header>
<header>Задача 4</header>

<FORM method="post" action="<?php print $PHP_SELF ?>">

    Введите логин: <INPUT size = "text" type="text" name="login" size="3" required>
    <p> <p>

    <P> <INPUT type="submit" name="obr" value="Вход">
</FORM>
<?
if (isset($_POST["obr"])) {

    switch ($_POST["login"]) {
        case "Ivan_php":
            echo "Здраствуйте, Иван";
            break;
        case "Petr_php":
            echo "Здраствуйте, Петр";
            break;
        case "Alex_php":
            echo "Здраствуйте, Александр";
            break;
        case "Daniil_php":
            echo "Здраствуйте, Даниил";
            break;
        default: echo "Вы не зарегестрированные";
    }
}
?>
<p><a href= "index.php">Назад</a></p>
</body>
</html>