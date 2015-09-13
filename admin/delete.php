<?php

$con = mysqli_connect("localhost","explora_new","random1234rewA","explora_new") or die("Error " . mysqli_error($connection));
//$con = mysqli_connect("localhost","root","","explora") or die("Error " . mysqli_error($connection));
$id=$_GET['idv'];
$sql="DELETE FROM registration where s_id='$id'";
$result2=mysqli_query($con,$sql);

if($result2>0)
{	
	echo "<script type='text/javascript'>alert('Record Deleted Successfully');</script>";
	echo "<script type='text/javascript'> window.location='pending.php'</script>"; 		
}

else
{
	echo "<script type='text/javascript'>alert('Failed to delete record, try again!');</script>";
	echo "<script type='text/javascript'> window.location='pending.php'</script>"; 			
}
?>