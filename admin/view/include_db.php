<?php
session_start();
$host="localhost";
$username="root";
$password="";
$db_name="demo";
$con= new mysqli("$host","$username","$password","$db_name") or die("cannot connect");
$sql = "USE demo";
$result = mysqli_query($con,$sql);
?>