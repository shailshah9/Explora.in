<?php
	
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
	
	header('Location: http://www.explora.in/enquiryMailer.php?'.http_build_query($query));
}
if(strcmp($check,"newreg")==0)
{
	$query=[
	'email'=>$email,
	'name'=>$name,
	'address'=>$address,
	'study'=>$study,
	'mob'=>$mob,
	'enqq'=>$enqq];
	
	header('Location: http://www.explora.in/newregmail.php?'.http_build_query($query));
	//header('Location: http://localhost:8181/Explora.in/newregmail.php?'.http_build_query($query));

}

?>