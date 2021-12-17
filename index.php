<html>
<head>
    <style type="text/CSS (ЦСС)">
        LI { list-style-type: none; } /* Убираем исходную нумерацию */
        OL { counter-reset: list1; } /* Инициируем счетчик */
        OL LI:before {
            counter-increment: list1; /* Увеличиваем значение счетчика */
            content: counter(list1) ". "; /* Выводим значение */
        }
        OL OL { counter-reset: list2; } /* Инициируем счетчик вложенного списка */
        OL OL LI:before {
            counter-increment: list2; /* Увеличиваем значение счетчика */
            content: counter(list1) "." counter(list2) ". "; /* Выводим значение типа 2.1, 2.2,... */
        }
    </style>
</head>
<body>

<header>Бесполитов Д.А.</header>

<nav>Лабы</nav>
<ol>
    <li>Лаба 1</li>
    <ol >
        <li> <a href= "lab1-5.php">Задача 1</a> </li>
        <li> <a href= "lab1-10.php">Задача 2</a> </li>
        <li> <a href= "lab1-11.php">Задача 3</a> </li>
    </ol>
    <li>Лаба 2</li>
    <ol>
        <li> <a href= "lab2.1.php">Задача 1</a> </li>
        <li> <a href= "lab2.2.php">Задача 2</a> </li>
        <li> <a href= "lab2.3.php">Задача 3</a> </li>
        <li> <a href= "lab2.4.php">Задача 4</a> </li>
        <li> <a href= "lab2.5.php">Задача 5</a> </li>
        <li> <a href= "lab2.6.php">Задача 6</a> </li>
    </ol>
    <li>Лаба 3</li>
    <ol>
        <li> <a href= "lab3.1.html">Задача 1</a> </li>
        <li> <a href= "lab3.2.php">Задача 2</a> </li>
        <li> <a href= "lab3.3.php">Задача 3</a> </li>
        <li> <a href= "lab3.4.php">Задача 4</a> </li>
        <li> <a href= "lab3.5.php">Задача 5</a> </li>
        <li> <a href= "lab3.6.html">Задача 6</a> </li>
    </ol>
    <li>Лаба 4</li>
    <ol>
        <li> <a href= "DB_Games\login.php">Таблицы</a> </li>
    </ol>
</ol>






</body>
</html>