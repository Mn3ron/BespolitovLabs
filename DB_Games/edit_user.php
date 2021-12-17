<?php
session_start();
require_once ('logincheck.php');
check();
print "<html>";
print "<header>Бесполитов Д.А.</header>";
print "<head>";
print "<title> Редактирование данных о пользователе </title>";
print "</head>";
print "<body>";
 error_reporting(E_ALL ^ E_DEPRECATED);

mysql_connect("localhost", "root") or die ("Невозможно
подключиться к серверу"); // установление соединения с сервером
mysql_query('SET NAMES cp1251'); // тип кодировки
// подключение к базе данных:
mysql_select_db("sql11458111") or die("Нет такой таблицы!");
$rows=mysql_query("SELECT * FROM users 
WHERE id_user=".$_GET['id']);
while ($st = mysql_fetch_array($rows)) {
    $id=$_GET['id'];
    $login = $st['username'];
    $pass = $st['password'];
    $type = $st['type'];

}

print "<form action='save_edit_user.php' metod='get'>";
print "Логин: <input name='login' size='50' type='text'
value='".$login."'required>";
print "<br>Пароль: <input name='pass' size='50' type='text'
required>";
echo " <br>Тип пользователя(1-Оператор, 2-Админ): <select name='selecttype'>";
$result=mysql_query("SELECT type FROM users");
while ($row=mysql_fetch_array($result)){// для каждой строки из запроса

    echo "<option value=".$row['type'] ." >".$row['type']."</option> ";

}



print "<input type='hidden' name='id' value='".$id."'> <br>";
print "<input type='submit' name='' value='Сохранить'>";
print "</form>";
print "<p><a href=\"lab4.1.php\"> Вернуться к списку
игр </a>";
?>
</body>
</html>