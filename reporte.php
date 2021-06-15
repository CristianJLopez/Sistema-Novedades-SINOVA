<?php
require('fpdf/fpdf.php');
$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('arial', 'B', '18');
$pdf->Cell(190, 20, 'SINOVA - REPORTE DE NOVEDAD', 1, 1, 'C');
$pdf->Image('images/captura.png',28,50,150);
$pdf->Output();

?>