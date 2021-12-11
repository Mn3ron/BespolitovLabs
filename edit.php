<html>
<header>Бесполитов Д.А.</header>
<head
<title> Редактирование данных об игре </title>
</head>
<body>
<?php
mysql_connect("sql11.freesqldatabase.com", "sql11458111", "ur5ZSxfQ8B") or die ("Невозможно
подключиться к серверу"); // установление соединения с сервером
mysql_query('SET NAMES cp1251'); // тип кодировки
// подключение к базе данных:
mysql_select_db("sql11458111") or die("Нет такой таблицы!");
$rows=mysql_query("SELECT Name, Genre, Developer,Publisher,Sales FROM Games 
WHERE id_game=".$_GET['id']);
while ($st = mysql_fetch_array($rows)) {
    $id=$_GET['id'];
    $name = $st['Name'];
    $genre = $st['Genre'];
    $developer = $st['Developer'];
    $publisher= $st['Publisher'];
    $sales = $st['Sales'];
}

print "<form action='save_edit.php' metod='get'>";
print "Название: <input name='game_name' size='50' type='text'
value='".$name."'>";
print "<br>Жанр: <input name='game_genre' size='50' type='text'
value='".$genre."'>";
print "<br>Разработчик: <input name='game_developer' size='50' type='text'
value='".$developer."'>";
print "<br>Издатель: <input name='game_publisher' size='50' type='text'
value='".$publisher."'>";
print "<br>Объем продаж: <input name='game_sales' size='50' type='number' min = '1' step = '1'
value='".$sales."'>";
print "<input type='hidden' name='id' value='".$id."'> <br>";
print "<input type='submit' name='' value='Сохранить'>";
print "</form>";
print "<p><a href=\"lab4.1.php\"> Вернуться к списку
игр </a>";
?>
</body>
</html>