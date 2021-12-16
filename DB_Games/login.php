<html>
<head> <title> Авторизация </title> </head>
<body>
<header>Бесполитов Д.А.</header>

<FORM method="post" action="<?php print $PHP_SELF ?>">
Логин: <input name='login' size='20' type='text' required>
<br>Пароль: <input name='pass' size='20' type='text' required>
    <P> <INPUT type="submit" name="obr" value="Вход">
</form>
<?php
if (isset($_POST["obr"])) {
    error_reporting(E_ALL ^ E_DEPRECATED);
    mysql_connect("localhost", "root") or die ("Невозможно
подключиться к серверу"); // установление соединения с сервером
    mysql_query('SET NAMES cp1251'); // тип кодировки
// подключение к базе данных:
    mysql_select_db("sql11458111") or die("Нет такой таблицы!");
    $rows=mysql_query("SELECT * FROM users 
WHERE username= '".$_POST['login']."'");
    $st = mysql_fetch_array($rows);
    $login = $st['username'];
    $pass = $st['password'];
    $type = $st['type'];
    If (password_verify($_POST['pass'],$pass)) {
        echo '<meta http-equiv="refresh" content="0.1;URL=lab4.1.php">';
         }
    else echo 'Неверный  логин или пароль';
}
?>
<p><a href= "../index.php">Назад</a></p>
</body>
</html>
