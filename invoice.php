<?php

	require('fpdf17/fpdf.php');
	$pdf = new FPDF('P','mm','A5');  // Support :  A3,A4,A5 |  recommended : A5
	$pdf->AddPage();

	//default margin : 10mm each side
	//writable horizontal : 219-(10*2)=189mm

	$pdf->SetFont('Arial','B',14);

	//Cell(width , height , text , border , end line , [align] )

	$pdf->Cell(100	,1,'Your Company Name',0,0);
	$pdf->Cell(25	,1,'Date',0,0);//end of line
	$pdf->Cell(25	,5,'',0,1);//end of line

	//set font to arial, regular, 12pt
	$pdf->SetFont('Arial','',12);

	$pdf->Cell(130	,5,'Adress : ',0,0);
	$pdf->Cell(59	,2,'',0,1);//end of line

	$pdf->Cell(100	,5,'',0,0);
	$pdf->Cell(15	,5,'Date : ',0,0);
	$pdf->Cell(34	,5,'date',0,1);//end of line

	$pdf->Cell(100	,0,'Phone : ',0,0);
	$pdf->Cell(15	,5,'',0,0);
	$pdf->Cell(20	,5,'',0,1,'R');//end of line

	$pdf->Cell(100	,0,'Fax : ',0,0);


	//make a dummy empty cell as a vertical spacer
	$pdf->Cell(189	,10,'',0,1);//end of line


	$pdf->SetFont('Arial','B',14);

	//billing address
	$pdf->Cell(100	,7,'Company Information Section',0,1);//end of line

	$pdf->SetFont('Arial','',12);


	//$pdf->Cell(10	,5,'',0,0);
	$pdf->Cell(10	,5,'CompanyName',0,1);

	//$pdf->Cell(10	,5,'',0,0);
	$pdf->Cell(10	,5,'CompanyAdress',0,1);

	//$pdf->Cell(10	,5,'',0,0);
	$pdf->Cell(10	,5,'CompanyPhone',0,1);

	//make a dummy empty cell as a vertical spacer
	$pdf->Cell(189	,10,'',0,1);//end of line

	//invoice contents
	$pdf->SetFont('Arial','B',12);

	$pdf->Cell(60	,5,'Product',1,0);
	$pdf->Cell(15	,5,'Count',1,0);
	$pdf->Cell(25	,5,'Price',1,0);

	$pdf->Cell(25	,5,'',0,1);//end of line

	//set font to arial, bold, 14pt

	$pdf->SetFont('Arial','',12);

	//Numbers are right-aligned so we give 'R' after new line parameter

	$pdf->Cell(60	,5,'ProductName',1,0);
	$pdf->Cell(15	,5,'Count',1,0);
	//$pdf->Cell(30	,5,' ',1,0);
	$pdf->Cell(25	,5,'Price',1,0);
	$pdf->Cell(25	,5,'1',0,1,'R');

	//summary
	$pdf->Cell(50	,5,'',0,0);
	$pdf->SetFont('Arial','',12);

	$pdf->Cell(10	,5,'Total Count',0,0,'R');
	$pdf->SetFont('Arial','',12);
	$pdf->Cell(15	,5,'1',1,1);//end of line

	$pdf->Cell(35	,5,'',0,1,'C');//end of line

	$pdf->Cell(74	,5,'',0,0);
	$pdf->Cell(5	,5,'Total : ',0,0);
	//$pdf->Cell(2	,5,'tl',0,0);
	$pdf->SetFont('Arial','',12);
	$pdf->Cell(25	,5,'$123',0,1,'C');//end of line

	$pdf->Output();

?>
