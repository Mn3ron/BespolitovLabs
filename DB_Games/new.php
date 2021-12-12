<html>
<head> <title> Добавление новой игры </title> </head>
<body>
<header>Бесполитов Д.А.</header>
<H2>Добавление игры:</H2>
<form action="save_new.php" metod="get">
    Название: <input name="game_name" size="50" type="text" required>
    <br>Жанр: <input name="game_genre" size="50" type="text">
    <br>Разработчик: <input name="game_developer" size="50" type="text">
    <br>Издатель: <input name="game_publisher" size="50" type="text">
    <br>Объем продаж: <input name="game_sales" size="11" type="number"  min="1" step="1">
</input>
    <p><input name="add" type="submit" value="Добавить">
        <input name="b2" type="reset" value="Очистить"></p>
</form>
<p>
    <a href="lab4.1.php"> Вернуться к списку игр </a>
</body>
</html>