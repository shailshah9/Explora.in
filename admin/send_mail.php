<!DOCTYPE html>
<html>
<head>
<title>Send Email</title>
<link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
<link rel="shortcut icon" href="../exploralocal/images/favicon.ico">

</head>

<?php
session_start();
require '../master/PHPMailerAutoload.php';
$a= $_GET ;
$mail = new PHPMailer;
$mail->SMTPDebug = 4;
$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'sg2plcpnl0054.prod.sin2.secureserver.net';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'info@explora.in';          // SMTP username
$mail->Password = 'awwfaw2012C';               // SMTP password
$mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 465;                                    // TCP port to connect to

$mail->SMTPOptions = array(
'ssl' => array(
    'verify_peer' => false,
    'verify_peer_name' => false,
    'allow_self_signed' => true
)
);
$mail->From = 'info@explora.in';
$mail->FromName = "Registration @ Explora Academy of Design";
$mail->addAddress($_SESSION['email'], $_SESSION['name']);     // Add a recipient
$mail->addAddress('receipts@explora.in', 'Receipt');     // Add a recipient
$mail->addReplyTo('info@explora.in', 'Information for receipt');

$mail->isHTML(true);                                  // Set email format to HTML
$mail->Subject = 'Receipt for '.$_SESSION['name'];
$mail->Body    = 'Hello <b>'.$_SESSION["name"].'</b>,<br/>
					This mail is in reference to your current admission at <b>Explora Academy of Design<b/>.<br/>
					Below attached is the receipt of payment made during registration. Please verify it and revert back if any changes or query arises.';
$mail->AddAttachment("Receipts/".$a['name'].".pdf",$a['name'].".pdf");
if(!$mail->send()) {
	$mail->SMTPDebug = 4;
echo 'Message could not be sent.';
echo 'Mailer Error: ' . $mail->ErrorInfo;
}
else {
		unset($_SESSION['email']);
		unset($_SESSION['name']);
		echo '<script language="javascript">';
		echo 'alert("Mail has been sent.")';
		echo '</script>';
		echo "<script type='text/javascript'> window.location='approved.php'</script>";
}
?>
</html>