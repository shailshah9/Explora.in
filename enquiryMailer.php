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


$mail = new PHPMailer;
//$mail->SMTPDebug = 4;
$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'sg2plcpnl0054.prod.sin2.secureserver.net';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'admin@explora.in';          // SMTP username
$mail->Password = 'random1234rewqA';               // SMTP password
$mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 465;                                    // TCP port to connect to

$mail->SMTPOptions = array(
    'ssl' => array(
        'verify_peer' => false,
        'verify_peer_name' => false,
        'allow_self_signed' => true
    )
);

$mail->From = 'admin@explora.in';
$mail->FromName = $name;
$mail->addAddress('enquiry@explora.in', 'Enquiry');     // Add a recipient

$mail->addReplyTo($email, $name);


$mail->Subject = 'Explora enquiry from '.$name;
$mail->Body    = $enqq;

if(!$mail->send()) {
    //$mail->SMTPDebug=2;
    echo 'Message could not be sent.';
   // echo 'Mailer Error: ' . $mail->ErrorInfo;
	
} else {
    echo '<script type="text/javascript"> alert("Enquiry Submitted Successfully")</script>';
    echo "<script type='text/javascript'>window.location='newenqtext.php'</script>";
}


?>




</body>
</html>