<?php
require('fpdf.php');

// Create me a new pdf object:

$pdf = new FPDF();

// Add a page to that object

$pdf->AddPage();

$pdf->setleftmargin(10);
$pdf->setX(10);
$pdf->setY(10);

// Longwinded way with lots of repitititititition ...
// --------------------------------------------------

// Add some text
$pdf->SetFont('Arial','B',16);
// width, height, text, no border, next line - below & left margin, alignement
$pdf->Cell(80,10,'Welcome to Well House Manor!',0,1,"C");
$pdf->Cell(80,10,'Monday to Friday',0,1,"C");
$pdf->SetFont('Arial','I',10);
$pdf->SetTextColor(20,20,128);
$pdf->Cell(80,8,'06:30 - Reception opens',0,1,"C");
$pdf->Cell(80,8,'07:00 - 09:00 - Breakfast',0,1,"C");
$pdf->Cell(80,8,'09:00 - Course starts for day',0,1,"C");
$pdf->Cell(80,8,'11:00 - Last Checkout time',0,1,"C");
$pdf->Cell(80,8,'14:00 - Open for Cream Teas',0,1,"C");
$pdf->Cell(80,8,'14:00 - Museum Opens',0,1,"C");
$pdf->Cell(80,8,'15:00 - First Checkin time',0,1,"C");
$pdf->Cell(80,8,'17:00 - Course finished for day',0,1,"C");
$pdf->Cell(80,8,'17:00 - End of Cream Teas',0,1,"C");
$pdf->Cell(80,8,'17:00 - Museum Closes',0,1,"C");
$pdf->Cell(80,8,'21:00 - Reception closes',0,1,"C");

// shorter way without repitition ...
// ----------------------------------

$pdf->SetFont('Arial','B',16);
$pdf->Cell(80,10,'Welcome to Well House Manor!',0,1,"C");
$pdf->Cell(80,10,'Saturday and Sunday',0,1,"C");
// Better to load the array from a file?
$lines = array("07:30 - Reception opens","08:00 - 10:00 - Breakfast",
        "09:00 - Course starts for day","11:00 - Last Checkout time",
        "14:00 - Open for Cream Teas","14:00 - Museum Opens",
        "15:00 - First Checkin time","17:00 - Course finished for day",
        "17:00 - End of Cream Teas","17:00 - Museum Closes",
        "21:00 - Reception closes");
$pdf->SetFont('Arial','I',10);
$pdf->SetTextColor(0,120,0);
foreach ($lines as $line) {
        $pdf->Cell(80,8,$line,0,1,"C");
}

// And here it is from a data file
// -------------------------------

$pdf->setleftmargin(112);
$pdf->setX(10);
$pdf->setY(10);
$pdf->SetFont('Arial','B',16);
$pdf->Cell(80,10,'Welcome to Well House Manor!',0,1,"C");
$pdf->Cell(80,10,'Staffing Rotas',0,1,"C");
$pdf->SetFont('Arial','I',10);
$pdf->SetTextColor(100,0,0);
foreach (file("staffing.txt") as $line) {
        $pdf->Cell(80,8,$line,0,1,"C");
}

// Output the results

$pdf->SetFont('Arial','B',16);
$pdf->Cell(80,10,'',0,1,"C");
$pdf->Cell(80,10,'Well House Manor!',0,1,"C");
$pdf->SetFont('Arial','B',12);
$pdf->Cell(80,10,'48, Spa Road, Melksham, SN12 7NY',0,1,"C");
$pdf->Cell(80,10,'01225 708225',0,1,"C");
$pdf->Cell(80,10,'http://www.wellhousemanor.co.uk',0,1,"C");

$pdf->Output();

?>