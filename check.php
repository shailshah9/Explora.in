<?php

$connection = mysqli_connect("localhost","root","","explora") or die("Error " . mysqli_error($connection));
	
$check=$_POST['group1'];
$name=$_POST['fname'];
$email=$_POST['email'];
$study=$_POST['study'];
$mob=$_POST['mob'];
$address=$_POST['address'];
$enqq=$_POST['enqq'];

if(strcmp($check,"enquiry")==0)
{
	$query=[
	'email'=>$email,
	'name'=>$name,
	'address'=>$address,
	'study'=>$study,
	'mob'=>$mob,
	'enqq'=>$enqq];
	//header('Location: http://localhost:8181/Explora.in/enquiryMailer.php?email='.$email.'&name='.$name.'&address='.$address.'&study='.$study.'&mob='.$mob.'&enqq='.$enqq);
	header('Location: http://localhost:8181/Explora.in/enquiryMailer.php?'.http_build_query($query));
	}
?>