<html>
<header>Бесполитов Д.А.</header>
<head
<title> Редактирование данных об игре </title>
</head>
<body>
<?php error_reporting(E_ALL ^ E_DEPRECATED);

mysql_connect("localhost", "root") or die ("Невозможно
подключиться к серверу"); // установление соединения с сервером
mysql_query('SET NAMES cp1251'); // тип кодировки
// подключение к базе данных:
mysql_select_db("sql11458111") or die("Нет такой таблицы!");
$rows=mysql_query("SELECT Name_game, Genre, Developer,Publisher,Sales FROM Games 
WHERE id_game=".$_GET['id']);
while ($st = mysql_fetch_array($rows)) {
    $id=$_GET['id'];
    $name = $st['Name_game'];
    $genre = $st['Genre'];
    $developer = $st['Developer'];
    $publisher= $st['Publisher'];
    $sales = $st['Sales'];
}

print "<form action='save_edit.php' metod='get'>";
print "Название: <input name='game_name' size='50' type='text'
value='".$name."'required>";
print "<br>Жанр: <input name='game_genre' size='50' type='text'
value='".$genre."'required>";
print "<br>Разработчик: <input name='game_developer' size='50' type='text'
value='".$developer."'required>";
print "<br>Издатель: <input name='game_publisher' size='50' type='text'
value='".$publisher."'required>";
print "<br>Объем продаж: <input name='game_sales' size='50' type='number' min = '1' step = '1'
value='".$sales."'required>";
print "<input type='hidden' name='id' value='".$id."'> <br>";
print "<input type='submit' name='' value='Сохранить'>";
print "</form>";
print "<p><a href=\"lab4.1.php\"> Вернуться к списку
игр </a>";
?>
</body>
</html>