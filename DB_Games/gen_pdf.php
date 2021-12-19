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

require('fpdf/fpdf.php');
define('FPDF_FONTPATH',"fpdf/font/");
$result=mysql_query("SELECT * FROM Game_keys 
            inner join Games ON Game_keys.id_game = Games.id_game 
            inner join Stores ON Game_keys.id_store = Stores.id_store");
class PDF_gen extends FPDF
{
    function Table($result)
    {
        $this->SetFillColor(60, 179, 113);
        $this->SetLineWidth(0.5);
        $this->Cell(10, 5, iconv('utf-8', 'windows-1251',"№п/п"), 1, 0, 'J',1);
        $this->Cell(50, 5, iconv('utf-8', 'windows-1251',"Название"), 1, 0, 'J',1);
        $this->Cell(50, 5, iconv('utf-8', 'windows-1251',"Жанр"), 1, 0, 'J',1);
        $this->Cell(50, 5, iconv('utf-8', 'windows-1251',"Разработчик"), 1, 0, 'J',1);
        $this->Cell(50, 5, iconv('utf-8', 'windows-1251',"Издатель"), 1, 0, 'J',1);
        $this->Cell(45, 5, iconv('utf-8', 'windows-1251',"Ключ"), 1, 0, 'J',1);
        $this->Cell(50, 5, iconv('utf-8', 'windows-1251',"Дата приобретения"), 1, 0, 'J',1);
        $this->Cell(50, 5, iconv('utf-8', 'windows-1251',"Дата окончания"), 1, 0, 'J',1);
        $this->Cell(50, 5, iconv('utf-8', 'windows-1251',"URL"), 1, 0, 'J',1);
        $this->Ln();
        $num = 1;
        while ($row = mysql_fetch_array($result)) {
            $this->SetFillColor(60, 179, 113);
            $this->Cell(10, 5, $num, 1, 0, 'C',1);
            $num++;
            $this->SetFillColor(124, 252, 0);
            $this->Cell(50, 5, $row['Name_game'], 1, 0, 'J',1);
            $this->Cell(50, 5, $row['Name'], 1, 0, 'J',1);
            $this->Cell(50, 5, $row['Developer'], 1, 0, 'J',1);
            $this->Cell(50, 5, $row['Publisher'], 1, 0, 'J',1);
            $this->Cell(45, 5, $row['Game_key'], 1, 0, 'J',1);
            $this->Cell(50, 5, date('d.m.Y',strtotime($row['Data_p'])), 1, 0, 'J',1);
            $this->Cell(50, 5, date('d.m.Y',strtotime($row['Data_end'])), 1, 0, 'J',1);
            $this->Cell(50, 5, $row['URL'], 1, 0, 'J',1);
            $this->Ln();

        }
    }
}
    //$pdf->Cell(50,10, $row['Name_game'] ,1,0,'J',0);
    /*echo "<td>" . $row['Name_game'] . "</td>";
    echo "<td>" . $row['Name'] . "</td>";
    echo "<td>" . $row['Data_p'] . "</td>";
    echo "<td>" . $row['Data_end'] . "</td>";
    echo "<td>" . $row['Price'] . "</td>";
    echo "<td>" . $row['Game_key'] . "</td>";*/
$pdf= new PDF_gen();
$pdf->SetAuthor('Daniil Bespolitov');
$pdf->SetTitle('Games');
$pdf->AddFont('ArialMT','','ArialRegular.php');
$pdf->SetFont('ArialMT');
$pdf->SetTextColor(50,60,100);
$pdf->AddPage('L','A3');
$pdf->SetDisplayMode('real','default');
//$pdf->SetXY(50,20);
$pdf->SetDrawColor(50,60,100);
$pdf->SetFontSize(10);
$pdf->Table ($result);

$pdf->Output('Games.pdf','D');