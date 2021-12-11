<?php
mysql_connect("sql11.freesqldatabase.com", "sql11458111", "ur5ZSxfQ8B") or die ("Невозможно
подключиться к серверу"); // установление соединения с сервером
mysql_query('SET NAMES cp1251'); // тип кодировки
// подключение к базе данных:
mysql_select_db("sql11458111") or die("Нет такой таблицы!");
$zapros="DELETE FROM Games WHERE id_game=" . $_GET['id'];
mysql_query($zapros);
header("Location: lab4.1.php");
exit;
?>