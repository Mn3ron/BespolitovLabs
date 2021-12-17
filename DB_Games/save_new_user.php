<?php
session_start();
require_once ('logincheck.php');
check();
// Подключение к базе данных:
error_reporting(E_ALL ^ E_DEPRECATED);
mysql_connect("localhost", "root") or die ("Невозможно
подключиться к серверу"); // установление соединения с сервером
mysql_query('SET NAMES cp1251'); // тип кодировки
// подключение к базе данных:
mysql_select_db("sql11458111") or die("Нет такой таблицы!");
// Строка запроса на добавление записи в таблицу:
$sql_add = "INSERT INTO users SET username='" . $_GET['login']
    ."', password='".password_hash($_GET['pass'], PASSWORD_BCRYPT)."', type='"
    .$_GET['typeselect']. "'";
mysql_query($sql_add); // Выполнение запроса
if (mysql_affected_rows()>0) // если нет ошибок при выполнении запроса
{ print "<p>Спасибо, вы добавили пользователя.";
    print "<p><a href=\"lab4.1.php\"> Вернуться к списку
игр </a>"; }
else { print "Ошибка сохранения (Возможно такой логин уже существует). <a href=\"lab4.1.php\">
Вернуться к списку игр </a>"; }
?>