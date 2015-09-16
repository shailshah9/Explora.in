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
$mail->Username = 'info@explora.in';          // SMTP username
$mail->Password = 'awwfaw2012C';               // SMTP password
$mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 465;                                    // TCP port to connect to
                                  // TCP port to connect to

$mail->SMTPOptions = array(
    'ssl' => array(
        'verify_peer' => false,
        'verify_peer_name' => false,
        'allow_self_signed' => true
    )
);
$newUrl="http://www.explora.in/otp.php";
$mail->From = 'info@explora.in';
$mail->FromName = "Registration @ Explora Academy of Design";
$mail->addAddress($email, $name);     // Add a recipient
$otp1=str_split($mob,6);
$motp1=str_split($email,3);
$otp=$motp1[0].$otp1[1];
$mail->addReplyTo('info@explora.in', 'Information');

$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'Explora Academy of Design Registration';
$mail->Body    = 'Thank you for showing your interest in our academy.
					To confirm your registration, please click link below and fill out the form.
					Once you fill up the form, our representative will contact you with further instructions regarding confirmation.<br/>'.$newUrl.'<br/>Your one time password(OTP) for completing the registration process is <b>'.$otp.'</b>';

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
	
} else {
        include 'connection.php';
        
        $sql = "INSERT INTO new_reg (`otp`,`flag`) VALUES ('$otp',0)";
        $result = mysqli_query($connection, $sql) or die("Error in Selecting " . mysqli_error($connection));


        if($result>0)
        {

            echo '<script type="text/javascript"> alert("Submitted Successfully")</script>';
            echo "<script type='text/javascript'>window.location='newregtext.php'</script>";
            $_SESSION['result']=1;
        }
        else
        {
             echo "<script>
             window.location = 'welcome.php';
             </script>"; 
            exit("Error, Try Again after sometime");
        } 
}
?>
</body>
</html>