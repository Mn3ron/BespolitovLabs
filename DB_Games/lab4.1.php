<?php
session_start();
require_once ('logincheck.php');
check();

    print "<html>";
    print "<head> <title> Сведения об играх </title> </head>";
    print "<body>";
    print "<header>Бесполитов Д.А.</header>";


    error_reporting(E_ALL ^ E_DEPRECATED);
    mysql_connect("localhost", "root") or die ("Невозможно
подключиться к серверу"); // установление соединения с сервером
    mysql_query('SET NAMES cp1251'); // тип кодировки
// подключение к базе данных:
    mysql_select_db("sql11458111") or die("Нет такой таблицы!");

if ($_SESSION['Usertype'] == '2') {

    print "<h2>Игры:</h2>
<table border='1'>
    <tr>

        <th> Название </th>
        <th> Жанр </th>
        <th> Разработчик </th>
        <th> Издатель </th>
        <th> Объем продаж </th>
        <th> Редактировать </th>
        <th> Уничтожить </th>
    </tr>";

    $result = mysql_query("SELECT id_game,Name_game, Genre, Developer,Publisher,Sales FROM Games");
    while ($row = mysql_fetch_array($result)) {// для каждой строки из запроса
        echo "<tr>";
        echo "<td>" . $row['Name_game'] . "</td>";
        echo "<td>" . $row['Genre'] . "</td>";
        echo "<td>" . $row['Developer'] . "</td>";
        echo "<td>" . $row['Publisher'] . "</td>";
        echo "<td>" . $row['Sales'] . "</td>";
        echo "<td><a href='edit.php?id=" . $row['id_game']
            . "'>Редактировать</a></td>"; // запуск скрипта для редактирования

        echo "<td><a href='delete.php?table=games&colID=id_game&id=" . $row['id_game']
            . "'>Удалить</a></td>"; // запуск скрипта для удаления записи
        echo "</tr>";
    }
    print "</table>";
    $num_rows = mysql_num_rows($result); // число записей в таблице БД
    print("<P>Всего игр: $num_rows </p>");

    print '<p> <a href="new.php"> Добавить игру</a>
    <h2>Магазины:</h2>
    <table border="1">
        <tr>

            <th> Название </th>
            <th> URL </th>
            <th> Редактировать </th>
            <th> Уничтожить </th>
        </tr>';
    error_reporting(E_ALL ^ E_DEPRECATED);
    $result = mysql_query("SELECT id_store,Name, URL FROM Stores");
    while ($row = mysql_fetch_array($result)) {// для каждой строки из запроса
        echo "<tr>";
        echo "<td>" . $row['Name'] . "</td>";
        echo "<td>" . $row['URL'] . "</td>";
        echo "<td><a href='edit_store.php?id=" . $row['id_store']
            . " '>Редактировать</a></td>"; // запуск скрипта для редактирования
        echo "<td><a href='delete.php?table=stores&colID=id_store&id=" . $row['id_store']
            . "'>Удалить</a></td>"; // запуск скрипта для удаления записи
        echo "</tr>";
    }
    print "</table>";
    $num_rows = mysql_num_rows($result); // число записей в таблице БД
    print("<P>Всего магазинов: $num_rows </p>");

    print '<p> <a href="new_store.php"> Добавить магазин</a>
        <h2>Ключи:</h2>
        <table border="1">
            <tr>
                <th> Игра </th>
                <th> Магазин </th>
                <th> Дата покупки </th>
                <th> Дата окончания </th>
                <th> Цена </th>
                <th> Ключ </th>
                <th> Редактировать </th>
                <th> Уничтожить </th>
            </tr>';

    error_reporting(E_ALL ^ E_DEPRECATED);
    //id_key,Data_P,Data_end, id_game,id_store,price,Game_key
    $result = mysql_query("SELECT * FROM Game_keys 
            inner join Games ON Game_keys.id_game = Games.id_game 
            inner join Stores ON Game_keys.id_store = Stores.id_store");
    while ($row = mysql_fetch_array($result)) {// для каждой строки из запроса
        echo "<tr>";
        echo "<td>" . $row['Name_game'] . "</td>";
        echo "<td>" . $row['Name'] . "</td>";
        echo "<td>" . $row['Data_p'] . "</td>";
        echo "<td>" . $row['Data_end'] . "</td>";
        echo "<td>" . $row['Price'] . "</td>";
        echo "<td>" . $row['Game_key'] . "</td>";
        echo "<td><a href='edit_key.php?id=" . $row['id_key']
            . "'>Редактировать</a></td>"; // запуск скрипта для редактирования
        echo "<td><a href='delete.php?table=Game_keys&colID=id_key&id=" . $row['id_key']
            . "'>Удалить</a></td>"; // запуск скрипта для удаления записи
        echo "</tr>";
    }
    print "</table>";
    $num_rows = mysql_num_rows($result); // число записей в таблице БД
    print("<P>Всего ключей: $num_rows </p>");

    print '<p> <a href="new_key.php"> Добавить ключ</a>
            <p> <a href="gen_pdf.php"> PDF</a>
            <p> <a href="gen_xls.php"> XLS</a>
            <h2>Пользователи:</h2>
            <table border="1">
                <tr>

                    <th> Логин </th>
                    <th> Пароль </th>
                    <th> Тип пользователя </th>
                    <th> Редактировать </th>
                    <th> Уничтожить </th>
                </tr>';

    $result = mysql_query("SELECT * FROM users");
    while ($row = mysql_fetch_array($result)) {// для каждой строки из запроса
        echo "<tr>";
        echo "<td>" . $row['username'] . "</td>";
        echo "<td>" . $row['password'] . "</td>";
        echo "<td>" . $row['type'] . "</td>";
        echo "<td><a href='edit_user.php?id=" . $row['id_user']
            . "'>Редактировать</a></td>"; // запуск скрипта для редактирования

        if ($row['type'] != 2) {echo "<td><a href='delete.php?table=users&colID=id_user&id=" . $row['id_user']
            . "'>Удалить</a></td>";} // запуск скрипта для удаления записи

        echo "</tr>";
    }
    print "</table>";
    $num_rows = mysql_num_rows($result); // число записей в таблице БД
    print("<P>Всего пользователей: $num_rows </p>");

    print '<p> <a href="new_user.php"> Добавить пользователя</a>';
}
     else {

         print "<h2>Игры:</h2>
<table border='1'>
    <tr>

        <th> Название </th>
        <th> Жанр </th>
        <th> Разработчик </th>
        <th> Издатель </th>
        <th> Объем продаж </th>
        <th> Редактировать </th>
        
    </tr>";

         $result = mysql_query("SELECT id_game,Name_game, Genre, Developer,Publisher,Sales FROM Games");
         while ($row = mysql_fetch_array($result)) {// для каждой строки из запроса
             echo "<tr>";
             echo "<td>" . $row['Name_game'] . "</td>";
             echo "<td>" . $row['Genre'] . "</td>";
             echo "<td>" . $row['Developer'] . "</td>";
             echo "<td>" . $row['Publisher'] . "</td>";
             echo "<td>" . $row['Sales'] . "</td>";


             echo "<td><a href='edit_key.php?id=" . $row['id_game']
             . "'>Редактировать</a></td>"; // запуск скрипта для редактирования
             echo "</tr>";
         }
         print "</table>";
         $num_rows = mysql_num_rows($result); // число записей в таблице БД
         print("<P>Всего игр: $num_rows </p>");

         print '<p> <a href="new.php"> Добавить игру</a>
    <h2>Магазины:</h2>
    <table border="1">
        <tr>

            <th> Название </th>
            <th> URL </th>
            <th> Редактировать </th>
            
        </tr>';
         error_reporting(E_ALL ^ E_DEPRECATED);
         $result = mysql_query("SELECT id_store,Name, URL FROM Stores");
         while ($row = mysql_fetch_array($result)) {// для каждой строки из запроса
             echo "<tr>";
             echo "<td>" . $row['Name'] . "</td>";
             echo "<td>" . $row['URL'] . "</td>";
             echo "<td><a href='edit_store.php?id=" . $row['id_store']
                 . " '>Редактировать</a></td>"; // запуск скрипта для редактирования

             echo "</tr>";
         }
         print "</table>";
         $num_rows = mysql_num_rows($result); // число записей в таблице БД
         print("<P>Всего магазинов: $num_rows </p>");

         print '<p> <a href="new_store.php"> Добавить магазин</a>
        <h2>Ключи:</h2>
        <table border="1">
            <tr>
                <th> Игра </th>
                <th> Магазин </th>
                <th> Дата покупки </th>
                <th> Дата окончания </th>
                <th> Цена </th>
                <th> Ключ </th>
                <th> Редактировать </th>
                
            </tr>';

         error_reporting(E_ALL ^ E_DEPRECATED);
         //id_key,Data_P,Data_end, id_game,id_store,price,Game_key
         $result = mysql_query("SELECT * FROM Game_keys 
            inner join Games ON Game_keys.id_game = Games.id_game 
            inner join Stores ON Game_keys.id_store = Stores.id_store");
         while ($row = mysql_fetch_array($result)) {// для каждой строки из запроса
             echo "<tr>";
             echo "<td>" . $row['Name_game'] . "</td>";
             echo "<td>" . $row['Name'] . "</td>";
             echo "<td>" . $row['Data_p'] . "</td>";
             echo "<td>" . $row['Data_end'] . "</td>";
             echo "<td>" . $row['Price'] . "</td>";
             echo "<td>" . $row['Game_key'] . "</td>";
             echo "<td><a href='edit_key.php?id=" . $row['id_key']
                 . "'>Редактировать</a></td>"; // запуск скрипта для редактирования

             echo "</tr>";
         }
         print "</table>";
         $num_rows = mysql_num_rows($result); // число записей в таблице БД
         print("<P>Всего ключей: $num_rows </p>");

         print '<p> <a href="new_key.php"> Добавить ключ</a>
            <p> <a href="gen_pdf.php"> PDF</a>
            <p> <a href="gen_xls.php"> XLS</a>
            <h2>Пользователи:</h2>
            <table border="1">
                <tr>

                    <th> Логин </th>
                    <th> Пароль </th>
                    <th> Тип пользователя </th>
                    <th> Редактировать </th>
                    <th> Уничтожить </th>
                </tr>';
         error_reporting(E_ALL ^ E_DEPRECATED);

         $result = mysql_query("SELECT * FROM users where username ='".$_SESSION['User']."'");
         while ($row = mysql_fetch_array($result)) {// для каждой строки из запроса
             echo "<tr>";
             echo "<td>" . $row['username'] . "</td>";
             echo "<td>" . $row['password'] . "</td>";
             echo "<td>" . $row['type'] . "</td>";
             echo "<td><a href='edit_user.php?id=" . $row['id_user']
                 . "'>Редактировать</a></td>"; // запуск скрипта для редактирования

             echo "<td><a href='delete.php?table=users&colID=id_user&id=" . $row['id_user']
                 . "'>Удалить</a></td>"; // запуск скрипта для удаления записи
             echo "</tr>";
         }
         print "</table>";
         $num_rows = mysql_num_rows($result); // число записей в таблице БД
         print("<P>Всего пользователей: $num_rows </p>");


     }

                ?>
<p><a href= "login.php">Выход</a></p>
</body>
</html>
