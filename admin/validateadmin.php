<?php

include 'connection.php';
$sql="select * from login";
$query=mysqli_query($connection,$sql) or die("query failed1".mysqli_error());
if(mysqli_num_rows($query)>0)
{
	while($row=mysqli_fetch_array($query))
	{
		if($row['username']==$_POST['username'] && $row['password']==$_POST['password'])
		{
			session_start();
			$_SESSION['unm']=$row['username'];
			header('location:welcome.php');
		}
		else
		{
			$msg = "Wrong Username or Password ";
			session_start();
			$_SESSION['warning']=$msg;
			header("location:index.php");
		}
	}
}

?>