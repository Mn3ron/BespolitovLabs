<html> <body>
<?php
mysql_connect("sql11.freesqldatabase.com", "sql11458111", "ur5ZSxfQ8B") or die ("Невозможно
подключиться к серверу"); // установление соединения с сервером
mysql_query('SET NAMES cp1251'); // тип кодировки
// подключение к базе данных:
mysql_select_db("sql11458111") or die("Нет такой таблицы!");
$zapros="UPDATE Games SET Name='" . $_GET['game_name']
    ."', Genre='".$_GET['game_genre']."', Developer='"
    .$_GET['game_developer']."', Publisher='".$_GET['game_publisher'].
    "', Sales='".$_GET['game_sales']."' WHERE id_game="
    .$_GET['id'];
mysql_query($zapros);
if (mysql_affected_rows()>0) {
    echo 'Все сохранено. <a href="lab4.1.php"> Вернуться к списку
игр </a>'; }
else { echo 'Ошибка сохранения. <a href="lab4.1.php">
Вернуться к списку игр</a> '; }
?>
</body> </html>
