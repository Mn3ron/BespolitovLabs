<html>
<header>Бесполитов Д.А.</header>
<head
<title> Редактирование данных о магазине </title>
</head>
<body>
<?php
mysql_connect("localhost", "root") or die ("Невозможно
подключиться к серверу"); // установление соединения с сервером
mysql_query('SET NAMES cp1251'); // тип кодировки
// подключение к базе данных:
mysql_select_db("sql11458111") or die("Нет такой таблицы!");
$rows=mysql_query("SELECT * FROM Stores
WHERE id_store=".$_GET['id']);
while ($st = mysql_fetch_array($rows)) {
    $id=$_GET['id'];
    $name = $st['Name'];
    $URL = $st['URL'];

}

print "<form action='save_edit_store.php' metod='get'>";
print "Название: <input name='name_store' size='50' type='text'
value='".$name."'>";
print "<br>URL: <input name='URL_store' size='50' type='text'
value='".$URL."'>";

print "<input type='hidden' name='id' value='".$id."'> <br>";
print "<input type='submit' name='' value='Сохранить'>";
print "</form>";
print "<p><a href=\"lab4.1.php\"> Вернуться к списку
игр </a>";
?>
</body>
</html>