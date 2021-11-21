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

<header>Бесполитов Д.А. Лабы</header>

<nav>Лабы</nav>
<ol>
    <li>Лаба 1</li>
    <ol >
        <li> <a href= "lab1-5.php">Задача 1</a> </li>
        <li> <a href= "lab2-10.php">Задача 2</a> </li>
    </ol>
    <li>Лаба 2</li>
    <li>Лаба 3</li>
    <li>Лаба 4</li>
</ol>





</body>
</html>