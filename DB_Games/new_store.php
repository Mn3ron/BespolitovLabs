<html>
<head> <title> Добавление нового магазина </title> </head>
<body>
<header>Бесполитов Д.А.</header>
<H2>Добавление магазина:</H2>
<form action="save_new_store.php" metod="get">
    Название: <input name="store_name" size="50" type="text" required>
    <br>URL: <input name="store_url" size="50" type="text" required>

</input>
    <p><input name="add" type="submit" value="Добавить">
        <input name="b2" type="reset" value="Очистить"></p>
</form>
<p>
    <a href="lab4.1.php"> Вернуться к списку игр </a>
</body>
</html>