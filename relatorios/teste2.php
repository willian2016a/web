<?php
 require('fpdf/fpdf.php');
 $pdf = new FPDF('P','pt','A4');
 $pdf->AddPage();
 $pdf->SetFont('Arial','B',16);
 
 $texto = 'Titulo sem borda';
 $texto = utf8_decode($texto);
 
 $pdf->Cell(510,20,$texto,0,1,'c');
 
 $texto = 'Título com borda';
 $texto = utf8_decode($texto);
 
 $pdf->Cell(510,20,$texto,1,1,'c');
 $pdf->Ln(20);
 $pdf->SetFillColor(255,120,120);
 $pdf->Cell(170,30,'Alinhamento a esquerda',1,0,'L',TRUE,'www.teste.com');
 $pdf->SetFillColor(170,255,120);
 $pdf->Cell(170,30,'Alinhamento ao centro',1,0,'C',TRUE,'www.teste.com');
 $pdf->SetFillColor(100,100,255);
 $pdf->Cell(170,30,'Alinhamento a direita',1,1,'R',TRUE,'www.teste.com');
 
 $txt1 = str_repeat('cell',40);
 $txt2 = str_repeat('multicell',12);
 
 $pdf->Ln(20);
 $pdf->SetFont('Times','B',14);
 $pdf->Cell(510,20,$txt1,0,1,'L',FALSE);
 $pdf->SetTextColor(50,100,50);
 $pdf->MultiCell(510,20,$txt2,0,'L',FALSE);	
 $pdf->Ln(10);
 $pdf->MultiCell(510,20,$txt2,1,'L',FALSE);
 $pdf->Ln(20);
 $pdf->SetX(200);
 $pdf->MultiCell(340,20,$txt2,1,'L',FALSE);
 $pdf->Output(); 
?>
