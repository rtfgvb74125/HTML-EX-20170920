<?php
require('fpdf181/fpdf.php');
include ('mysql_connect.inc.php');
class PDF extends FPDF
{
// Page header
    function Header()
    {
        // Logo
//        $this->Image('logo.png',10,6,30);
        // Arial bold 15
        $this->SetFont('Arial','B',15);
        // Move to the right
        $this->Cell(50);
        // Title
        $this->Cell(100,10,'Conference Papers',1,0,'C');
        // Line break
        $this->Ln(20);
    }

// Page footer
    function Footer()
    {
        // Position at 1.5 cm from bottom
        $this->SetY(-15);
        // Arial italic 8
        $this->SetFont('Arial','I',8);
        // Page number
        $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
    }
}

// Instanciation of inherited class
$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Times','',10);

$query = "SELECT * FROM `Teacherwork` WHERE `type`='2' ";
if($result = $connect->query($query)){
    while ($row = $result->fetch_row()){
        $pdf->Cell(0,8,$row[1],0,1);
        $pdf->Cell(0,8,$row[2],0,1);
        $pdf->Cell(0,8,$row[3].$row[4].$row[5],0,1);

    }
}else{
    echo "Error";
}


$pdf->Output();
