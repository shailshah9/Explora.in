<?php

$connection = mysqli_connect("localhost","traveltr_db","Q%cC.FM.yuVb") or die("Error " . mysqli_error($connection));
$db = mysqli_select_db($connection,"traveltr_db");
$sql = "select * from explora";
$result = mysqli_query($connection, $sql) or die("Error in Selecting " . mysqli_error($connection));
//echo $result["id"] . " && ". $result["url"];
$row=mysqli_fetch_array($result);
		echo $row[1];
?>	