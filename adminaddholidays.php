<?php
//session_start();

	error_reporting(1);
	include('includes/config1.php');

	//$connect = mysqli_connect('localhost:3306', 'admin', 'kmit@3306','finalelms');

	$holiday=$_POST['holiday'];
	$hdate=$_POST['date'];
	
	$sql = "INSERT INTO holidaystable (occasion, hdate)VALUES ('$holiday','$hdate')";

if (mysqli_query($connect, $sql))
	{
  echo "New record created successfully";
	}
	echo '<script type="text/javascript">'; 
	echo 'alert("Holiday added successfully");'; 
	echo 'window.location.href = "changepassword.php";';
	echo '</script>';
?>