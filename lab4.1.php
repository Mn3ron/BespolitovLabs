<html>
<head> <title> Сведения об играх </title> </head>
<body>
<header>Бесполитов Д.А.</header>


<h2>Игры:</h2>
<table border="1">
    <tr>

        <th> Название </th>
        <th> Жанр </th>
        <th> Разработчик </th>
        <th> Издатель </th>
        <th> Объем продаж </th>
        <th> Редактировать </th>
        <th> Уничтожить </th>
    </tr>
    <?php
    $result=mysql_query("SELECT id_game,Name, Genre, Developer,Publisher,Sales FROM Games"); // запрос на выборку сведений о пользователях
    while ($row=mysql_fetch_array($result)){// для каждой строки из запроса
        echo "<tr>";
        echo "<td>" . $row['Name'] . "</td>";
        echo "<td>" . $row['Genre'] . "</td>";
        echo "<td>" . $row['Developer'] . "</td>";
        echo "<td>" . $row['Publisher'] . "</td>";
        echo "<td>" . $row['Sales'] . "</td>";
        echo "<td><a href='edit.php?id=" . $row['id_game']
            . "'>Редактировать</a></td>"; // запуск скрипта для редактирования
        echo "<td><a href='delete.php?id=" . $row['id_game']
            . "'>Удалить</a></td>"; // запуск скрипта для удаления записи
        echo "</tr>";
    }
    print "</table>";
    $num_rows = mysql_num_rows($result); // число записей в таблице БД
    print("<P>Всего игр: $num_rows </p>");
    ?>
    <p> <a href="new.php"> Добавить игру</a>
<p><a href= "index.php">Назад</a></p>
</body>
</html>