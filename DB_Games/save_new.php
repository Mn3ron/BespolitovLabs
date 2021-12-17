<?php
session_start();
require_once ('logincheck.php');
check();
error_reporting(E_ALL ^ E_DEPRECATED);
// Подключение к базе данных:

mysql_connect("localhost", "root") or die ("Невозможно
подключиться к серверу"); // установление соединения с сервером
mysql_query('SET NAMES cp1251'); // тип кодировки
// подключение к базе данных:
mysql_select_db("sql11458111") or die("Нет такой таблицы!");
// Строка запроса на добавление записи в таблицу:
$sql_add = "INSERT INTO Games SET Name_game='" . $_GET['game_name']
    ."', Genre='".$_GET['game_genre']."', Developer='"
    .$_GET['game_developer']."', Publisher='".$_GET['game_publisher'].
    "', Sales='".$_GET['game_sales']. "'";
mysql_query($sql_add); // Выполнение запроса
if (mysql_affected_rows()>0) // если нет ошибок при выполнении запроса
{ print "<p>Спасибо, вы добавили игру.";
    print "<p><a href=\"lab4.1.php\"> Вернуться к списку
игр </a>"; }
else { print "Ошибка сохранения. <a href=\"lab4.1.php\">
Вернуться к списку игр </a>"; }
?>