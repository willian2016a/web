<?php
 require('fpdf/fpdf.php');
 
 $pdf = new FPDF('P','pt','A4');
 $pdf->SetTitle('teste pdf 1');
 $pdf->SetAuthor('willian alves');
 $pdf->Setcreator('php'.phpversion());
 $pdf->Setkeywords('php','pdf');
 $pdf->SetSubject('como criar pdf');
 $pdf->addPage();
 
 //definir a fonte
 $pdf->SetFont('Arial','',12);
 $pdf->text(0,12,'x1');
 
 //espaçamento vertical
 $pdf->Ln(20);
 $pdf->SetFont('Courier','B',16);
 $pdf->SetTextColor(50,50,100);
 $pdf->SetY(70);
 $pdf->SetX(260);
 
 $titulo = 'Título';
 $titulo = utf8_decode($titulo);
 
 $pdf->Write(30,$titulo);
 $pdf->Ln(30);
 
 $txt = str_repeat('ÓÓÓÓÓÓÓ',30);
 $txt = utf8_decode($txt);
 

 $pdf->SetTextColor(100,50,50);
 $pdf->SetFont('Times','B',14);
 $pdf->Write(20,$txt);
 $pdf->Output();
 
 
 
 

?>
