<?php
//session_start();

	error_reporting(1);
	include('includes/config1.php');

	//$connect = mysqli_connect('localhost', 'admin', 'kmit@3306','finalelms');
	$leaves=$_POST['leavecount'];
	$epid=$_POST['lempid'];
	$Date=$_POST['date'];
	$mnth=date("F", strtotime($Date));
	$employee=$_POST['employees'];
	
	$sql1 = "INSERT INTO adminaddcclleavecount (eid,employees,leavetype,monthname,ccldate,cclcount )VALUES ('$epid', '$employee','ccl', '$mnth','$Date','$leaves')";

if (mysqli_query($connect, $sql1))
	{
  echo "New record created successfully";
	}
	
	$sql='select * from '.$mnth.' where empid='.$epid;
	$result = mysqli_query($connect, $sql);
	
	$row=mysqli_fetch_assoc($result);
	$sql2 = "none";
	
		if($row['cl'] < 0){
			//cl=1, leaves=1 
			if($row['cl']+$leaves>=0)
			{
			$sql1="update ".$mnth." set cl=0, ccl=cl+".$leaves.", iccl=iccl+".$leaves." where empid=".$epid;
			$sql2 = "update tblavailable set cl=0, ccl=cl+".$leaves." where empid=".$epid;
			}
			else
			{
				//cl=-1,iccl=1
			$sql1="update ".$mnth." set cl=".$row['cl']+$leaves.", iccl=iccl+".$leaves." where empid=".$epid;
			$sql2 = "update tblavailable  set cl=".$row['cl']+$leaves." where empid=".$epid;
			}
		}
		else{
			
			$sql1="update ".$mnth." set ccl=ccl+".$leaves." where empid=".$epid;
			$sql2 = "update tblavailable set ccl=ccl+".$leaves." where empid=".$epid;
		}
	echo "Query-1 :".$sql1;
	echo "Query-2 :".$sql2;
	$result1=mysqli_query($connect,$sql2);
	$result2=mysqli_query($connect,$sql1);
	
	echo '<script type="text/javascript">'; 
	echo 'alert("Leaves added successfully");'; 
	echo 'window.location.href = "changepassword.php";';
	echo '</script>';
?>
