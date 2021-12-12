<html>
<head> <title> Добавление нового ключа</title> </head>
<body>
<header>Бесполитов Д.А.</header>
<?php
mysql_connect("localhost", "root") or die ("Невозможно
подключиться к серверу"); // установление соединения с сервером
mysql_query('SET NAMES cp1251'); // тип кодировки
// подключение к базе данных:
mysql_select_db("sql11458111") or die("Нет такой таблицы!");

?>
<H2>Добавление магазина:</H2>
<form action="save_new_key.php" metod="get">
    Дата покупки: <input name="data_p"  type="date" required>
    <br>Дата окончания: <input name="data_end"  type="date" required>
    <br>Цена: <input name="price" size="11" type="number" min ='1' required>
    <br>Ключ: <input name="game_key" size="50" type="text" required>
        <?php
        //id_key,Data_P,Data_end, id_game,id_store,price,Game_key
        $result=mysql_query("SELECT id_game,name_game FROM Games");
        echo " <br>Игра: <select name='selectgame'>";
        while ($row=mysql_fetch_array($result)){// для каждой строки из запроса

           echo "<option value=".$row['id_game'] .">". $row['name_game']."</option> ";

        }
        echo  "</select>";
        $result=mysql_query("SELECT id_store,name FROM Stores");
        echo " <br>Магазин: <select name='selectstore'>";
        while ($row=mysql_fetch_array($result)){// для каждой строки из запроса

            echo "<option value=".$row['id_store'] .">". $row['name']."</option> ";

        }
        echo  "</select>";
        ?>
</input>
    <p><input name="add" type="submit" value="Добавить">
        <input name="b2" type="reset" value="Очистить"></p>
</form>
<p>
    <a href="lab4.1.php"> Вернуться к списку игр </a>
</body>
</html>