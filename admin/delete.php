<?php

include 'connection.php';$id=$_GET['idv'];
$sql="DELETE FROM registration where s_id='$id'";
$result2=mysqli_query($connection,$sql);

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