      <?php
      session_start();
      require('view/fpdf.php');
      // Create me a new pdf object:
      include 'connection.php';
      $id=$_GET['idv'];
      $sql1='SELECT * FROM `registration` WHERE `s_id`='.$id;
      
      $result1 = mysqli_query($connection, $sql1) or die("Error in Selecting " . mysqli_error($connection));

      date_default_timezone_set("Asia/Kolkata");
      $signm='manoj patel';
      $signa='manoj patel';
      $signr='manoj patel';

      while($row=mysqli_fetch_array($result1))
      {	
      $form=$row['form_no'];
      $course=$row['course'];
      $firstname=$row['first_name'];
      $lastname=$row['middle_name'];
      $surname=$row['surname'];
      $address=$row['address'];
      $mobile=$row['mobile_no'];
      $f_reg=$row['f_reg'];
      $f_reg_date=$row['f_reg_date'];
      $f_april=$row['f_april'];
      $f_april_date=$row['f_april_date'];
      $f_may=$row['f_may'];
      $f_may_date=$row['f_may_date'];
      $dob=$row['dob'];
      $pimg="../".$row['img_path'];
      $email=$row['email'];
      $_SESSION['email']=$email;
      $_SESSION['name']=$firstname;
      $pdf = new FPDF();
      $image12="done2.png";

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
      $pdf->Cell(20,5,date("Y/m/d"),0,1,"C");

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

      $pdf->setFont('Arial','',12);
      $pdf->Cell(20,15,'Surname',0,0,"L");
      $pdf->setFont('Arial','',12);
      $pdf->Cell(10,0,'',0,0,"C");
      $pdf->Cell(40,15,$surname,0,1,"L");
      $pdf->SetFillColor(150,150,150);
      $pdf->Rect(40,90, 114,0.5, 'F');


      $pdf->setFont('Arial','',12);
      $pdf->Cell(20,5,'Firstname',0,0,"L");
      $pdf->setFont('Arial','',12);
      $pdf->Cell(10,0,'',0,0,"C");
      $pdf->Cell(40,5,$firstname,0,1,"L");
      $pdf->SetFillColor(150,150,150);
      $pdf->Rect(40,100, 114,0.5, 'F');



      // Explora icon
      $pdf->setXY(160,61);
      $image1 ="logo.png";
      $pdf->Cell( 40, 40, $pdf->Image($image1, $pdf->GetX(), $pdf->GetY(), 33.78), 0, 1, 'L', false );
      $pdf->setFont('Arial','',12);
      $pdf->Cell(20,12,'Lastname',0,0,"L");
      $pdf->setFont('Arial','',12);
      $pdf->Cell(10,0,'',0,0,"C");
      $pdf->Cell(40,12,$lastname,0,1,"L");
      $pdf->SetFillColor(150,150,150);
      $pdf->Rect(40,109, 114,0.5, 'F');

      //add new row
      $pdf->Cell(210,10,'',0,20,"C");
      $pdf->setFont('Arial','',12);
      $pdf->Cell(20,-13,'Birthdate',0,0,"L");
      $pdf->setFont('Arial','',12);
      $pdf->Cell(10,0,'',0,0,"C");
      $pdf->Cell(40,-13,$dob,0,1,"L");
      $pdf->SetFillColor(150,150,150);
      $pdf->Rect(40,119, 114,0.5, 'F');

      //add new row
      $pdf->Cell(210,10,'',0,1,"C");
      $pdf->setFont('Arial','',12);
      $pdf->Cell(20,12,'E-mail',0,0,"L");
      $pdf->setFont('Arial','',12);
      $pdf->Cell(10,0,'',0,0,"C");
      $pdf->Cell(40,12,$email,0,1,"L");
      $pdf->SetFillColor(150,150,150);
      $pdf->Rect(40,129, 114,0.5, 'F');

      //first address
      $pdf->Cell(210,3,'',0,1,"C");
      $pdf->setFont('Arial','',12);
      $pdf->Cell(200,15,'Postal Address for Communication',0,1,"L");
      if(strlen($address)>87)
      {
      $addr1=str_split($address,87);
      $addr=$addr1[0];
      $addr2=$addr1[1];
      $pdf->setFont('Arial','',10);
      $pdf->Cell(0.01,0,'',0,0,"L");
      $pdf->Cell(190,0,strtoupper($addr),0,1,"L");
      $pdf->SetFillColor(150,150,150);
      $pdf->Rect(10.8,152, 190,0.5, 'F');

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
      $pdf->Rect(10.8,152, 190,0.5, 'F');

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
      $pdf->Rect(10.8,161, 110,0.5, 'F');

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
      $pdf->Cell(200,3,'',0,1,"C");
      $pdf->Cell(0,6,'Sign of the candidate',0,1,"L");

      //use this as a horizontal line 
      $pdf->SetFillColor(150,150,150);
      $pdf->Rect(148,170,25,0.5, 'F');

      //box for the signature
      $pdf->Cell(1,0,'',0,0,"C");
      $pdf->Cell(45,10,'',1,1,"C");

      //box for the photos
      $pdf->setXY(160,102);
      $image1 =$pimg;
      //$pdf->Cell( 30, 35, , 0, 1, 'L', false );
      $pdf->Cell(1,0,'',0,0,"C");
      $pdf->Cell(30,35,$pdf->Image($image1, $pdf->GetX(), $pdf->GetY(), 30,35),1,1,"C");

      //branch head
      $pdf->setXY(145,162);
      $pdf->Cell(10,10,'    Branch Head		   	 (Vadodara)',0,1,"L");
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
      if($f_reg==0)
      {
      $f_reg="";
      $signr="";
      $f_reg_date="";
      }
      // create box for form
      $pdf->Cell(0,0,'',0,1,"L");
      $pdf->Cell(30,5,'',0,0,"L");
      $pdf->Cell(42,8	,$f_reg,1,0,"C");

      $pdf->Cell(17,4,'',0,0,"L");
      $pdf->Cell(42,8,date("Y/m/d"),1,0,"C");

      $pdf->Cell(17,4,'',0,0,"L");
      $pdf->Cell(42,8,$signr,1,1,"C");

      $pdf->SetFont('Arial','',12);
      $pdf->Cell(0,18,'April',0,0,"L");
      if($f_april==0)
      {
      $f_april="";
      $signa="";
      $f_april_date="";
      }
      $pdf->Cell(0,5,'',0,1,"L");
      $pdf->Cell(30,5,'',0,0,"L");
      $pdf->Cell(42,8	,$f_april,1,0,"C");

      $pdf->Cell(17,4,'',0,0,"L");
      $pdf->Cell(42,8,$f_april_date,1,0,"C");

      $pdf->Cell(17,4,'',0,0,"L");
      $pdf->Cell(42,8,$signa,1,1,"C");

      $pdf->SetFont('Arial','',12);
      $pdf->Cell(0,18,'May',0,0,"L");
      if($f_may==0)
      {
      $f_may="";
      $signm="";
      $f_may_date="";
      }
      $pdf->Cell(0,5,'',0,1,"C");
      $pdf->Cell(30,5,'',0,0,"C");
      $pdf->Cell(42,8	,$f_may,1,0,"C");

      $pdf->Cell(17,4,'',0,0,"L");
      $pdf->Cell(42,8,$f_may_date,1,0,"C");

      $pdf->Cell(17,4,'',0,0,"L");
      $pdf->Cell(42,8,$signm,1,1,"C");

      $pdf->SetFillColor(10,10,10);
      $pdf->Rect(11,278,190,1, 'F');
      //$pdf->Output();
      $pdf->Output("Receipts/".$form.".pdf");
      }
      echo "<script type='text/javascript'>window.location='send_mail.php?name=$form'</script>";
      ?>

