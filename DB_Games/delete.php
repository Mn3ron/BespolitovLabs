<?php
session_start();
require_once ('logincheck.php');
check();
error_reporting(E_ALL ^ E_DEPRECATED);
mysql_connect("localhost", "root") or die ("Невозможно
подключиться к серверу"); // установление соединения с сервером
mysql_query('SET NAMES cp1251'); // тип кодировки
// подключение к базе данных:
mysql_select_db("sql11458111") or die("Нет такой таблицы!");

$zapros="DELETE FROM ".$_GET['table']." WHERE ".$_GET['colID']." = " . $_GET['id'];
mysql_query($zapros);
header("Location: lab4.1.php");
exit;
?>