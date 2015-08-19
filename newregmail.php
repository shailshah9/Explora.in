<!DOCTYPE html>
<html>
<head>
	<title>Send mail</title>
</head>
<body>

<?php
require 'master/PHPMailerAutoload.php';

$name=$_GET['name'];
$email=$_GET['email'];
$study=$_GET['study'];
$mob=$_GET['mob'];
$address=$_GET['address'];
$enqq=$_GET['enqq'];
echo $name;
echo $email;
echo $study;
echo $mob;
echo $address;


$mail = new PHPMailer;
//$mail->SMTPDebug = 3;
$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'dbp3435@gmail.com';          // SMTP username
$mail->Password = 'dhaval1019';               // SMTP password
$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                                    // TCP port to connect to

$mail->SMTPOptions = array(
    'ssl' => array(
        'verify_peer' => false,
        'verify_peer_name' => false,
        'allow_self_signed' => true
    )
);
$newUrl="http://localhost:8181/Explora.in/newreg.php";
$mail->From = 'dbp3435@gmail.com';
$mail->FromName = $name;
$mail->addAddress($email, $name);     // Add a recipient

$mail->addReplyTo('rajani.tanmay@gmail.com', 'Information');
//$mail->addCC('cc@example.com');
//$mail->addBCC('bcc@example.com');

//$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'Explora enquiry from '.$name;
$mail->Body    = 'Thank you for showing your interest in our academy.
					To confirm your registration, please click link below and fill out the form.
					Once you fill up the form, our representative will contact you with further instructions regarding confirmation.'."\r\n"
					.$newUrl;
//$mail->AddAttachment('dhaval.pdf','helo.pdf');
if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
	
} else {
    header('Location: http://localhost:8181/Explora.in/newregtext.php');
}


?>




</body>
</html>