<?php
//session_start();

	error_reporting(1);
	include('includes/config1.php');

	//$connect = mysqli_connect('localhost:3306', 'admin', 'kmit@3306','finalelms');
	$leaves=$_POST['leavecount'];
	$epid=$_POST['lempid'];
	$Date=$_POST['date'];
	$mnth=date("F", strtotime($Date));
	$employee=$_POST['employees'];
	
	$sql1 = "INSERT INTO adminaddclcount (eid,employees,leavetype,monthname,cldate,clcount )VALUES ('$epid', '$employee','cl', '$mnth','$Date','$leaves')";

if (mysqli_query($connect, $sql1))
	{
  echo "New record created successfully";
	}
	
	//$sql='select * from '.$mnth.' where empid='.$epid;
	//$result = mysqli_query($connect, $sql);
	
	$row=mysqli_fetch_assoc($result);
	$sql2 = "none";
	
		
		
			$sql="update ".$mnth." set cl=cl+".$leaves.",avail=avail-".$leaves." where empid=".$epid;
			$sql2 = "update tblavailable set cl=cl+".$leaves." where empid=".$epid;
		
	mysqli_query($connect,$sql);
	mysqli_query($connect,$sql2);
	
	echo '<script type="text/javascript">'; 
	echo 'alert("Leaves added successfully");'; 
	echo 'window.location.href = "changepassword.php";';
	echo '</script>';
?>