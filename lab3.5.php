<html>
<head>
</head>
<body>
<header>Бесполитов Д.А.</header>
<header>Задача 5</header>
<FORM method="post" action="<?php print $PHP_SELF ?>">
    <FONT SIZE="5"><p><b>Анкета "Ваш характер"</b></p> </FONT>
    Введите ваше имя: <INPUT size = "text" type="text" name="login" size="3" required>
    <p><b>Ответье на следующие вопросы:</b></p>
    <ol>
        <li>Считаете ли Вы, что у многих ваших знакомых хороший характер?</li>
        <p></p>
        <INPUT type="radio" name="ch1" checked>Да
        <INPUT type="radio" name="ch1" value="1">Нет
        <p></p>
        <li>Раздражают ли Вас мелкие повседневные обязанности?</li>
        <p></p>
        <INPUT type="radio" name="ch2" checked>Да
        <INPUT type="radio" name="ch2" value="1">Нет
        <p></p>
        <li>Верите ли Вы, что ваши друзья преданы Вам? </li>
        <p></p>
        <INPUT type="radio" name="ch3" checked value="1">Да
        <INPUT type="radio" name="ch3">Нет
        <p></p>
        <li>Неприятно ли Вам, когда незнакомый человек делает Вам замечание?</li>
        <p></p>
        <INPUT type="radio" name="ch4" checked>Да
        <INPUT type="radio" name="ch4" value="1">Нет
        <p></p>
        <li>Способны ли Вы ударить собаку или кошку? </li>
        <p></p>
        <INPUT type="radio" name="ch5" checked>Да
        <INPUT type="radio" name="ch5" value="1">Нет
        <p></p>
        <li>Часто ли Вы принимаете лекарства?</li>
        <p></p>
        <INPUT type="radio" name="ch6" checked>Да
        <INPUT type="radio" name="ch6" value="1">Нет
        <p></p>
        <li>Часто ли Вы меняете магазин, в который ходите за продуктами?</li>
        <p></p>
        <INPUT type="radio" name="ch7" checked>Да
        <INPUT type="radio" name="ch7" value="1">Нет
        <p></p>
        <li>Продолжаете ли Вы отстаивать свою точку зрения, поняв, что ошиблись?</li>
        <p></p>
        <INPUT type="radio" name="ch8" checked>Да
        <INPUT type="radio" name="ch8" value="1">Нет
        <p></p>
        <li>Тяготят ли Вас общественные обязанности?</li>
        <p></p>
        <INPUT type="radio" name="ch9" checked value="1">Да
        <INPUT type="radio" name="ch9">Нет
        <p></p>
        <li>Способны ли Вы ждать более 5 минут, не проявляя беспокойства?</li>
        <p></p>
        <INPUT type="radio" name="ch10" checked value="1">Да
        <INPUT type="radio" name="ch10">Нет
        <p></p>
        <li>Часто ли Вам приходят в голову мысли о Вашей невезучести?</li>
        <p></p>
        <INPUT type="radio" name="ch11" checked>Да
        <INPUT type="radio" name="ch11" value="1">Нет
        <p></p>
        <li>Сохранилась ли у Вас фигура по сравнению с прошлым?</li>
        <p></p>
        <INPUT type="radio" name="ch12" checked>Да
        <INPUT type="radio" name="ch12" value="1">Нет
        <p></p>
        <li>Можете ли Вы с улыбкой воспринимать подтрунивание друзей?</li>
        <p></p>
        <INPUT type="radio" name="ch13" checked value="1">Да
        <INPUT type="radio" name="ch13">Нет
        <p></p>
        <li>Нравится ли Вам семейная жизнь?</li>
        <p></p>
        <INPUT type="radio" name="ch14" checked value="1">Да
        <INPUT type="radio" name="ch14">Нет
        <p></p>
        <li>Злопамятны ли Вы?</li>
        <p></p>
        <INPUT type="radio" name="ch15" checked>Да
        <INPUT type="radio" name="ch15" value="1">Нет
        <p></p>
        <li>Находите ли Вы, что стоит погода, типичная для данного времени года?</li>
        <p></p>
        <INPUT type="radio" name="ch16" checked>Да
        <INPUT type="radio" name="ch16" value="1">Нет
        <p></p>
        <li>Случается ли Вам с утра быть в плохом настроении?</li>
        <p></p>
        <INPUT type="radio" name="ch17" checked>Да
        <INPUT type="radio" name="ch17" value="1">Нет
        <p></p>
        <li>Раздражает ли Вас современная живопись?</li>
        <p></p>
        <INPUT type="radio" name="ch18" checked>Да
        <INPUT type="radio" name="ch18" value="1">Нет
        <p></p>
        <li>Надоедает ли Вам присутствие чужих детей в доме более одного часа?</li>
        <p></p>
        <INPUT type="radio" name="ch19" checked value="1">Да
        <INPUT type="radio" name="ch19">Нет
        <p></p>
        <li>Надоедает ли Вам делать лабораторные по PHP?</li>
        <p></p>
        <INPUT type="radio" name="ch20" checked>Да
        <INPUT type="radio" name="ch20" value="1">Нет
        <p> <p>

        <P> <INPUT type="submit" name="obr" value="Готово">
    </ol>
</FORM>
<?php
if (isset($_POST["obr"])) {
    $login = $_POST["login"];
    $result = ($_POST["ch1"]+$_POST["ch2"]+ $_POST["ch3"]+ $_POST["ch4"]+$_POST["ch5"]+ $_POST["ch6"]+ $_POST["ch7"]+$_POST["ch8"]+ $_POST["ch9"]+ $_POST["ch10"]+$_POST["ch111"]+ $_POST["ch12"]+ $_POST["ch13"]+$_POST["ch14"]+ $_POST["ch15"]+ $_POST["ch16"]+$_POST["ch17"]+ $_POST["ch18"]+ $_POST["ch19"]+ $_POST["ch20"]);
    if ($result > 15) print ($login. ", У Вас покладистый характер");
    elseif ($result > 7) print ($login. ", Вы не лишены недостатков, но с
вами можно ладить");
    else print ($login. ", Вашим друзьям можно посочувствовать");
}
?>
<p><a href= "index.php">Назад</a></p>
</body>
</html>