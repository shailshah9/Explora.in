<?php
require('fpdf.php');
// Create me a new pdf object:
include('include_db.php');
       
	   if (isset($_GET["idv"]))
		{
			$idv  = $_GET["idv"]; 
		} 
       $sql1="SELECT * FROM `registration` WHERE s_id=$idv";
	   $result1=$con->query($sql1);
	   while($row1=$result1->fetch_assoc())
	   {
        $form=$row1['s_id'];
		$lastname=$row1['middle_name'];
		$photo=$row1['img_path'];
		$date=$row1['f_reg_date'];
		$mobile=$row1['mobile_no'];
		$cash=20000;
		$address=$row1['address'];
		$birthdate=$row1['dob'];
		$firstname=$row1['first_name'];
		$surname=$row1['surname'];
		$course=$row1['course'];

		$pdf = new FPDF();
		$image12="done2.png";
		$logo="logo.png";

// Add a page to that object
$pdf->AddPage();
$pdf->setleftmargin(10);
$pdf->setX(10);
$pdf->setY(10);

// Add some text
$pdf->SetFont('Arial','B',10);
$text="hello";
// width, height, text, no border, next line - below & left margin, alignement
// shree rang in centre
$pdf->Cell(200,10,'|| Shree Rang ||',0,1,"C");

//create rectangle and registration form
$pdf->SetFillColor(0,0,0);
$pdf->Rect(0, 20, 210, 10, 'F');
$pdf->SetTextColor(255,255,255);
$pdf->SetFont('Arial','B',15);
$pdf->Cell(200,10,'REGISTRATION FORM - 2016',0,1,"C");

// space below registration form
$pdf->Cell(210,5,'',0,1,"C");

//set font and height
$pdf->SetFont('Arial','B',12);
$pdf->SetTextColor(0,0,0);
//space before form no.
$pdf->Cell(10,5,'',0,0,"C");
$pdf->Cell(5,5,'FORM NO.',0,0,"C");
//space between rect and form no tag
$pdf->Cell(10,5,'',0,0,"C");
// create box for form
$pdf->Cell(30,5,$form,1,0,"C");

//space after box 
$pdf->Cell(100,5,'',0,0,"C");
//display date
$pdf->SetFont('Arial','B',12);
$pdf->Cell(20,5,$date,0,1,"C");

//add new row
$pdf->Cell(210,5,'',0,1,"C");

//Explora academy title
$pdf->SetFont('Helvetica','',25);
$pdf->Cell(200,15,'Explora Academy of Design',0,1,"C");

//add new row
$pdf->Cell(210,5,'',0,1,"C");
$pdf->SetFont('Arial','',12);
$pdf->SetTextColor(0,0,0);
//nata and all 3 courses
$pdf->Cell(80,5,'',0,0,"C");
if(strtoupper($course)=="NATA")
{
	$pdf->Cell( 10,5, $pdf->Image($image12, $pdf->GetX(), $pdf->GetY(),10,5), 1, 0, 'L', false );
	$pdf->Cell(15,5,'NATA',0,1,"C");

}else
{
$pdf->Cell(10,5,'',1,0,"C");	
$pdf->Cell(15,5,'NATA',0,1,"C");
}
$pdf->Cell(1,1,'',0,1,"C");
$pdf->Cell(210,4,'',0,1,"C");
$pdf->SetFont('Arial','',12);
$pdf->SetTextColor(0,0,0);
$pdf->Cell(80,0,'',0,0,"C");
if(strtoupper($course)=="INTERIOR DESIGN")
{
	$pdf->Cell( 10,5, $pdf->Image($image12, $pdf->GetX(), $pdf->GetY(),10,5), 1, 0, 'L', false );
	$pdf->Cell(41,5,'INTERIOR DESIGN',0,1,"C");

}else
{
$pdf->Cell(10,5,'',1,0,"C");
$pdf->Cell(41,5,'INTERIOR DESIGN',0,1,"C");

}
$pdf->Cell(210,5,'',0,1,"C");
$pdf->SetFont('Arial','',12);
$pdf->SetTextColor(0,0,0);
$pdf->Cell(80,5,'',0,0,"C");
if(strtoupper($course)=="JEE ( B.ARCH )")
{
	$pdf->Cell( 10,5, $pdf->Image($image12, $pdf->GetX(), $pdf->GetY(),10,5), 1, 0, 'L', false );
	$pdf->Cell(33,5,'JEE ( B.ARCH )',0,0,"C");
}else
{
$pdf->Cell(10,5,'',1,0,"C");
$pdf->Cell(33,5,'JEE ( B.ARCH )',0,0,"C");
}
// Explora icon
$pdf->setXY(160,61);

$pdf->Cell( 40, 40, $pdf->Image($logo, $pdf->GetX(), $pdf->GetY(), 33.78), 0, 1, 'L', false );
$pdf->setFont('Arial','',12);
$pdf->Cell(20,0,'Surname',0,0,"L");
$pdf->setFont('Arial','',12);
$pdf->Cell(10,0,'',0,0,"C");
$pdf->Cell(40,0,$surname,0,1,"L");
$pdf->SetFillColor(150,150,150);
$pdf->Rect(40,104, 114,0.5, 'F');

//add new row
$pdf->Cell(210,10,'',0,1,"C");
$pdf->setFont('Arial','',12);
$pdf->Cell(20,0,'Firstname',0,0,"L");
$pdf->setFont('Arial','',12);
$pdf->Cell(10,0,'',0,0,"C");
$pdf->Cell(40,0,$firstname,0,1,"L");
$pdf->SetFillColor(150,150,150);
$pdf->Rect(40,114, 114,0.5, 'F');

//add new row
$pdf->Cell(210,10,'',0,1,"C");
$pdf->setFont('Arial','',12);
$pdf->Cell(20,0,'Lastname',0,0,"L");
$pdf->setFont('Arial','',12);
$pdf->Cell(10,0,'',0,0,"C");
$pdf->Cell(40,0,$lastname,0,1,"L");
$pdf->SetFillColor(150,150,150);
$pdf->Rect(40,124, 114,0.5, 'F');

//add new row
$pdf->Cell(210,10,'',0,1,"C");
$pdf->setFont('Arial','',12);
$pdf->Cell(20,0,'Birthdate',0,0,"L");
$pdf->setFont('Arial','',12);
$pdf->Cell(10,0,'',0,0,"C");
$pdf->Cell(40,0,$birthdate,0,1,"L");
$pdf->SetFillColor(150,150,150);
$pdf->Rect(40,134, 114,0.5, 'F');

//first address
$pdf->Cell(210,5,'',0,1,"C");
$pdf->setFont('Arial','',12);
$pdf->Cell(200,12,'Postal Address for Communication',0,1,"L");
if(strlen($address)>90)
{
	$addr1=str_split($address,90);
	$addr=$addr1[0];
	$addr2=$addr1[1];
	$pdf->setFont('Arial','',10);
	$pdf->Cell(0.01,0,'',0,0,"L");
	$pdf->Cell(190,0,strtoupper($addr),0,1,"L");
	$pdf->SetFillColor(150,150,150);
	$pdf->Rect(10.8,151, 190,0.5, 'F');

	//second address
	$pdf->Cell(210,9,'',0,1,"C");
	$pdf->setFont('Arial','',10);
	
	$pdf->Cell(0.01,0,'',0,0,"L");
	$pdf->Cell(100,0,strtoupper($addr2),0,1,"L");
}
else
{
	$pdf->setFont('Arial','',10);
	$pdf->Cell(0.01,0,'',0,0,"L");
	$pdf->Cell(190,0,strtoupper($address),0,1,"L");
	$pdf->SetFillColor(150,150,150);
	$pdf->Rect(10.8,151, 190,0.5, 'F');

	//second address
	$pdf->Cell(210,9,'',0,1,"C");
	$pdf->setFont('Arial','',10);
	$pdf->Cell(0.01,0,'',0,0,"L");
	$pdf->Cell(100,0,"",0,1,"L");
}
$pdf->Cell(115,5,'',0,0,"C");
$pdf->Cell(100,4,'M -',0,1,"L");

//second address underline
$pdf->SetFillColor(150,150,150);
$pdf->Rect(10.8,160, 110,0.5, 'F');

//mobile number underline
$pdf->SetFillColor(150,150,150);
//	$pdf->Rect(133,160, 50,5, 'F');
$pdf->Cell(125,0,'',0,0,"C");
$mob0=str_split($mobile,1);
for($i=0;$i<strlen($mobile);$i++)
{
	$mob1=$mob0[$i];
	$pdf->Cell(5,-5,$mob1,1,0,"C");
}

//sign of the candidate
$pdf->Cell(200,5,'',0,1,"C");
$pdf->Cell(0,10,'Sign of the candidate',0,1,"L");

//use this as a horizontal line 
$pdf->SetFillColor(150,150,150);
$pdf->Rect(149,170,23,0.5, 'F');

//box for the signature
$pdf->Cell(1,0,'',0,0,"C");
$pdf->Cell(45,10,'',1,1,"C");

//box for the photos
$pdf->setXY(160,102);
$image1 ="a.jpg";
//$pdf->Cell( 30, 35, , 0, 1, 'L', false );
$pdf->Cell(1,0,'',0,0,"C");
$pdf->Cell(30,35,$pdf->Image($image12, $pdf->GetX(), $pdf->GetY(), 30,35),1,1,"C");

//branch head
$pdf->setXY(148,162);
$pdf->Cell(0,10,' Branch Head		   	 (Vadodara)',0,1,"L");
$pdf->Cell(0,5,'Ar. Manoj Patel  :  09924376644',0,1,"R");
$pdf->Cell(0,5,'Ar. Parth Chitte  :  09998130018',0,1,"R");

//use this as a horizontal line  below signature box
$pdf->SetFillColor(150,150,150);
$pdf->Rect(11,188,190,0.5, 'F');
//contact
$pdf->Cell(0,10,'',0,1,"L");
$pdf->Cell(0,5,'Website : www.explora.in',0,1,"L");
$pdf->Cell(0,7,'Contact us: infonataexplora@yahoo.com',0,1,"L");

//address
$pdf->setXY(117,188 );
$pdf->setFont('Arial','B',10);
$pdf->Cell(0,5,'Address : ',0,1,"L");
$pdf->setFont('Arial','',10);
$pdf->setXY(117,193 );
$pdf->Cell(0,5,'Studio-2, First Floor, Cross Road Complex.',0,1,"L");
$pdf->setXY(117,198);
$pdf->Cell(0,5,'Next to Mr. Puff, Near to Domino\'s Pizza',0,1,"L");
$pdf->setXY(117,203);
$pdf->Cell(0,5,'Subhanpura, Vadodara-390023',0,1,"L");
$pdf->Cell(0,5,'',0,1,"L");

//use this as a horizontal line  below signature box
$pdf->SetFillColor(10,10,10);
$pdf->Rect(11,208,190,1, 'F');

//for office use only
$pdf->SetFont('Arial','B',12);
$pdf->Cell(0,10,'For Office Use Only',0,1,"C");

$pdf->SetFont('Arial','B',12);
$pdf->Cell(0,8,'Fees Details',0,1,"L");

$pdf->SetFont('Arial','',10);
$pdf->Cell(37,0,'',0,0,"L");
$pdf->Cell(0,5,'Cash / Cheque',0,0,"L");

$pdf->Cell(-85,0,'',0,0,"L");
$pdf->Cell(47,5,'Date',0,0,"L");
$pdf->Cell(0,5,'Authorized Signature',0,1,"L");

$pdf->SetFont('Arial','',12);
$pdf->Cell(0,7,'Registration',0,0,"L");

// create box for form
$pdf->Cell(0,0,'',0,1,"L");
$pdf->Cell(30,5,'',0,0,"L");
$pdf->Cell(42,8	,$cash,1,0,"C");

$pdf->Cell(17,4,'',0,0,"L");
$pdf->Cell(42,8,$date,1,0,"C");

$pdf->Cell(17,4,'',0,0,"L");
$pdf->Cell(42,8,"manoj",1,1,"C");

$pdf->SetFont('Arial','',12);
$pdf->Cell(0,18,'April',0,0,"L");

$pdf->Cell(0,5,'',0,1,"L");
$pdf->Cell(30,5,'',0,0,"L");
$pdf->Cell(42,8	,'20000',1,0,"C");

$pdf->Cell(17,4,'',0,0,"L");
$pdf->Cell(42,8,'02/05/2015',1,0,"C");

$pdf->Cell(17,4,'',0,0,"L");
$pdf->Cell(42,8,"manoj",1,1,"C");

$pdf->SetFont('Arial','',12);
$pdf->Cell(0,18,'May',0,0,"L");

$pdf->Cell(0,5,'',0,1,"L");
$pdf->Cell(30,5,'',0,0,"L");
$pdf->Cell(42,8	,'',1,0,"L");

$pdf->Cell(17,4,'',0,0,"L");
$pdf->Cell(42,8,'',1,0,"L");

$pdf->Cell(17,4,'',0,0,"L");
$pdf->Cell(42,8,'',1,1,"L");

$pdf->SetFillColor(10,10,10);
$pdf->Rect(11,278,190,1, 'F');
/*
$pdf->Output($form.".pdf");
header( 'Location: sendmail.php?name='.$form );
*/
$pdf->Output("");
}

?>