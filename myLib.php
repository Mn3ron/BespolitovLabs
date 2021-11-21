<?php
function taskText ($task){
if ($task == 3){
print ( '<br>'."Вариант 3. В матрице A(m,n) все ненулевые элементы заменить обратными по величине и
противоположными по знаку. Исходный и скорректированный массивы вывести на
экран.". '<br>'. '<br>');
}
else
print ("Вариант 9. Если в матрице P(m,n) есть отрицательные элементы, найти наибольший из них. ". '<br>'. '<br>');
}
function randMass ($n,$m){
$arr = array();
for ($i=0; $i<$n; $i++) {
for ($j=0; $j <$m; $j++){
$arr[$i][$j] = rand(-20,20);
}
}
return $arr;
}
function printMass ($arr,$n,$m){
echo '<table border="1">';

    for ($i=0; $i<$n; $i++){

    echo '<tr>';
        for ($j=1; $j<$m; $j++){

        echo '<td align="center", valign="middle">'.($arr[$i][$j]).'</td>';
        }
        echo '</tr>';
    }

    echo '</table>';

}
function task ($arr,$n,$m){
$max= -21;
for ($i=0; $i<$n; $i++) {
for ($j=0; $j <$m; $j++){
if ($arr[$i][$j] <0){
if ($arr[$i][$j] >$max ){
$max = $arr[$i][$j];
}
}
}
}
return $max;
}
function task2 ($arr,$n,$m){

for ($i=0; $i<$n; $i++) {
for ($j=0; $j <$m; $j++){
if ($arr[$i][$j] != 0){
$arr[$i][$j] = round(-1/$arr[$i][$j],2);
}
}
}
return $arr;
}
?>