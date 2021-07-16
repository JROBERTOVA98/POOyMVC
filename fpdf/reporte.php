<?php
require('fpdf.php');

$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B',58);
$pdf->Cell(85,10,'¡Hola, Mundo!');
$pdf->Output();
?>