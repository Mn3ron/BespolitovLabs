<?php
session_start();
require_once ('logincheck.php');
check();
?>
<html>
<head> <title> Добавление нового пользователя </title> </head>
<body>
<header>Бесполитов Д.А.</header>
<H2>Добавление нового пользователя:</H2>
<form action="save_new_user.php" metod="get">
    Логин: <input name="login" size="50" type="text" required>
    <br>Пароль: <input name="pass" size="50" type="text"required>
    <br>Тип пользователя: <select name="typeselect">
        <option value="1">Оператор</option>
        <option value="2">Администратор</option>
    </select>
    <p><input name="add" type="submit" value="Добавить">
        <input name="b2" type="reset" value="Очистить"></p>
</form>
<p>
    <a href="lab4.1.php"> Вернуться к списку игр </a>
</body>
</html>