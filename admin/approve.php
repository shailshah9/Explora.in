<?php
$idv=$_POST['idv'];
$fees=$_POST['totalfeesm'];
$form=$_POST['formno'];

$connection = mysqli_connect("localhost","explora_new","random1234rewA","explora_new") or die("Error " . mysqli_error($connection));
//$connection = mysqli_connect("localhost","root","","explora") or die("Error " . mysqli_error($connection));

$sql="UPDATE registration SET f_reg=$fees, flag=1,form_no=$form where s_id=$idv";
$result = mysqli_query($connection, $sql) or die("Error in Selecting " . mysqli_error($connection));
echo '<script type="text/javascript"> alert("Approved Successfully")</script>';
echo "<script type='text/javascript'>window.location='pending.php'</script>";

?>