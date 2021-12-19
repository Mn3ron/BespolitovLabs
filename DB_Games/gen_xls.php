<?php
session_start();
require_once ('logincheck.php');
check();
error_reporting(E_ALL ^ E_DEPRECATED);
mysql_connect("localhost", "root") or die ("Невозможно
подключиться к серверу"); // установление соединения с сервером
mysql_query('SET NAMES cp1251'); // тип кодировки
// подключение к базе данных:
mysql_select_db("sql11458111") or die("Нет такой таблицы!");
require_once 'PHPExcel/Classes/PHPExcel.php';
$objPHPExcel = new PHPExcel();
$active_sheet = $objPHPExcel->getActiveSheet();
$result=mysql_query("SELECT * FROM Game_keys 
            inner join Games ON Game_keys.id_game = Games.id_game 
            inner join Stores ON Game_keys.id_store = Stores.id_store");


$active_sheet->getColumnDimension('A')->setAutoSize(true);
$active_sheet->getColumnDimension('B')->setAutoSize(true) ;
$active_sheet->getColumnDimension('C')->setAutoSize(true) ;
$active_sheet->getColumnDimension('D')->setAutoSize(true) ;
$active_sheet->getColumnDimension('E')->setAutoSize(true) ;
$active_sheet->getColumnDimension('F')->setAutoSize(true) ;
$active_sheet->getColumnDimension('G')->setAutoSize(true) ;
$active_sheet->getColumnDimension('H')->setAutoSize(true) ;
$active_sheet->getColumnDimension('I')->setAutoSize(true);
$active_sheet->setCellValue('A1','№ п/п');
$active_sheet->setCellValue('B1','Название');
$active_sheet->setCellValue('C1','Жанр');
$active_sheet->setCellValue('D1','Разработчик');
$active_sheet->setCellValue('E1','Издатель');
$active_sheet->setCellValue('F1','Ключ');
$active_sheet->setCellValue('G1','Дата приобретения');
$active_sheet->setCellValue('H1','Дата окончания');
$active_sheet->setCellValue('I1','URL');
$i = 2;
$num = 1;
while ($row = mysql_fetch_array($result)) {

    $active_sheet->setCellValue('A'.$i.'',$num);
    $active_sheet->setCellValue('B'.$i.'',$row['Name_game']);
    $active_sheet->setCellValue('C'.$i.'',$row['Name']);
    $active_sheet->setCellValue('D'.$i.'',$row['Developer']);
    $active_sheet->setCellValue('E'.$i.'',$row['Publisher']);
    $active_sheet->setCellValue('F'.$i.'',$row['Game_key']);
    $active_sheet->setCellValue('G'.$i.'',date('d.m.Y',strtotime($row['Data_p'])));
    $active_sheet->setCellValue('H'.$i.'',date('d.m.Y',strtotime($row['Data_end'])));
    $active_sheet->setCellValue('I'.$i.'',$row['URL']);
    $i++;
    $num++;
}

header("Content-Disposition:attachment;filename=Games.xls");

$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel5');
$objWriter->save('php://output');

exit();
?>