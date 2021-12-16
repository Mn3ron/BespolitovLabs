<html> <body>
<?php error_reporting(E_ALL ^ E_DEPRECATED);
mysql_connect("localhost", "root") or die ("Невозможно
подключиться к серверу"); // установление соединения с сервером
mysql_query('SET NAMES cp1251'); // тип кодировки
// подключение к базе данных:
mysql_select_db("sql11458111") or die("Нет такой таблицы!");
$zapros="UPDATE Game_keys SET Data_p='" . $_GET['kdata_p']
    ."', Data_end='".$_GET['kdata_end']."', Price='"
    .$_GET['key_price']."', Game_key='".$_GET['key'].
    "', id_game='".$_GET['selectgame']."',id_store='".$_GET['selectstore']."' WHERE id_key="
    .$_GET['id'];
mysql_query($zapros);
if (mysql_affected_rows()>0) {
    echo 'Все сохранено. <a href="lab4.1.php"> Вернуться к списку
игр </a>'; }
else { echo 'Ошибка сохранения. <a href="lab4.1.php">
Вернуться к списку игр</a> ';


}
?>
</body> </html>
