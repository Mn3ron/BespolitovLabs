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
$sql_add = "INSERT INTO stores SET Name='" . $_GET['store_name']
    ."', URL='".$_GET['store_url']. "'";
mysql_query($sql_add); // Выполнение запроса
if (mysql_affected_rows()>0) // если нет ошибок при выполнении запроса
{ print "<p>Спасибо, вы добавили магазин.";
    print "<p><a href=\"lab4.1.php\"> Вернуться к списку
игр </a>"; }
else { print "Ошибка сохранения. <a href=\"lab4.1.php\">
Вернуться к списку игр </a>"; }
?>