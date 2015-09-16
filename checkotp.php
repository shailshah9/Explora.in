<?php
session_start();
$otp=$_POST['otp'];
include 'connection.php';
$sql = "select * from new_reg where otp='$otp'";
//echo $sql;
$_SESSION['lotp']=$otp;
	$result = mysqli_query($connection, $sql) or die("Error in Selecting " . mysqli_error($connection));
	
	if(mysqli_affected_rows($connection)==0)
	{
		$_SESSION['otp']='Already used OTP, please try registering again from www.explora.in';
				echo '<script type="text/javascript"> alert("Invalid or Already used OTP, please try registering again from www.explora.in")</script>';
		echo "<script type='text/javascript'>window.location='otp.php'</script>";
	}

	while($row=mysqli_fetch_array($result))
	{
		
		if($row['flag']==0)
			{
				$_SESSION['otpl']='1';
           		echo "<script type='text/javascript'>window.location='newreg.php'</script>";
           		break;
			}
			else
			{
				$_SESSION['otp']='Already used OTP, please try registering again from www.explora.in';
				echo '<script type="text/javascript"> alert("Invalid or Already used OTP, please try registering again from www.explora.in")</script>';
				echo "<script type='text/javascript'>window.location='otp.php'</script>";
			}	
		
		
	}
	
?>	