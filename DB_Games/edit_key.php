<?php
session_start();
require_once ('logincheck.php');
check();
print "<html>";
print "<header>Бесполитов Д.А.</header>";
print "<head>";
print "<title> Редактирование данных о ключе </title>";
print "</head>";
print "<body>";
 error_reporting(E_ALL ^ E_DEPRECATED);
mysql_connect("localhost", "root") or die ("Невозможно
подключиться к серверу"); // установление соединения с сервером
mysql_query('SET NAMES cp1251'); // тип кодировки
// подключение к базе данных:
mysql_select_db("sql11458111") or die("Нет такой таблицы!");
$rows=mysql_query("SELECT * FROM Game_keys 
WHERE id_key=".$_GET['id']);
while ($st = mysql_fetch_array($rows)) {
    $id=$_GET['id'];
    $data_p = $st['Data_p'];
    $data_end = $st['Data_end'];
    $price = $st['Price'];
    $game_key = $st['Game_key'];

}

print "<form action='save_edit_key.php' metod='get'>";
print "Дата продажи: <input name='kdata_p'  type='date' max='".date('Y-m-d')."'
value='".$data_p."'required>";
print "<br>Дата окончания: <input name='kdata_end'  type='date' min='".date('Y-m-d')."'
value='".$data_end."'required>";
print "<br>Цена: <input name='key_price' size='11' type='number' min = '1'
value='".$price."'required>";
print "<br>Ключ: <input name='key' size='16' type='text'
value='".$game_key."'required>";
$result=mysql_query("SELECT id_game,name_game FROM Games");
echo " <br>Игра: <select name='selectgame'>";
while ($row=mysql_fetch_array($result)){// для каждой строки из запроса

    echo "<option value=".$row['id_game'] ." >". $row['name_game']."</option> ";

}
echo  "</select>";
$result=mysql_query("SELECT id_store,name FROM Stores");
echo " <br>Магазин: <select name='selectstore'>";
while ($row=mysql_fetch_array($result)){// для каждой строки из запроса

    echo "<option value=".$row['id_store'] ." >". $row['name']."</option> ";

}
print "<input type='hidden' name='id' value='".$id."'> <br>";
print "<input type='submit' name='' value='Сохранить'>";
print "</form>";
print "<p><a href=\"lab4.1.php\"> Вернуться к списку
игр </a>";
?>
</body>
</html>