<html> <body>
<?php error_reporting(E_ALL ^ E_DEPRECATED);
mysql_connect("localhost", "root") or die ("Невозможно
подключиться к серверу"); // установление соединения с сервером
mysql_query('SET NAMES cp1251'); // тип кодировки
// подключение к базе данных:
mysql_select_db("sql11458111") or die("Нет такой таблицы!");
$zapros="UPDATE users SET username='" . $_GET['login']
    ."', password='".password_hash($_GET['pass'], PASSWORD_BCRYPT)."', type='".$_GET['selecttype']."' WHERE id_user="
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
