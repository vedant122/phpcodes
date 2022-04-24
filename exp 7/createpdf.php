<?php
require('C:/xampp/htdocs/Practicals/fpdf184/fpdf.php');
$pdf = new FPDF();
$pdf->AddPage("L");
$pdf->SetFont('Arial','BIU',25);
$pdf->SetTextColor(0,0,0);
$pdf->Cell(40,10,'Name : Vedant Kulkarni');
$pdf->Output();
?>