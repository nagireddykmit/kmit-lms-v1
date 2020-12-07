<?php
//session_start();

	include('includes/config1.php');

	/*$connect = mysqli_connect('localhost:3306', 'admin', 'kmit@3306','finalelms');
	if (!$connect){
		die('Could not connect: ' . mysql_error());
	}	*/
	
	date_default_timezone_set("Asia/Kolkata");
	$date=date('Y-m-d'); 
	$dateandtime=date("Y-m-d h:i:s");
	$curname=date("F", strtotime($date));
	
	//Check whether updated or not.
	$sql="select isupdated from updatemonthlyleave where monthname='".$curname."year'"; 
	$mresult = mysqli_query($connect, $sql);
	$rows=mysqli_num_rows($mresult);
	if($rows) {
		$row = $mresult->fetch_assoc();
		if($row['isupdated']==0){
			$q1=$_POST['jfm'];
			$q2=$_POST['amj'];
			$q3=$_POST['jas'];
			$q4=$_POST['ond'];
			$al=$_POST['al'];
			//Update Yearwise leaves
			$sql ="UPDATE tblavailable SET q1=".$q1.", q2= ".$q2.", q3=".$q3.", q4=".$q4.", cl=0, ccl=0, od=0, al=".$al;
			$result = mysqli_query($connect, $sql);
			//Reset January leaves
			$sql ="UPDATE January SET cl=0, ccl=0, od=0, al=0, avail=0, lop=0, lates=0, icl=0, iccl=0";
			$result = mysqli_query($connect, $sql);
			//Reset February leaves
			$sql ="UPDATE February SET cl=0, ccl=0, od=0, al=0, avail=0, lop=0, lates=0, icl=0, iccl=0";
			$result = mysqli_query($connect, $sql);
			//Reset March leaves
			$sql ="UPDATE March SET cl=0, ccl=0, od=0, al=0, avail=0, lop=0, lates=0, icl=0, iccl=0";
			$result = mysqli_query($connect, $sql);
			//Reset April leaves
			$sql ="UPDATE April SET cl=0, ccl=0, od=0, al=0, avail=0, lop=0, lates=0, icl=0, iccl=0";
			$result = mysqli_query($connect, $sql);
			//Reset May leaves
			$sql ="UPDATE May SET cl=0, ccl=0, od=0, al=0, avail=0, lop=0, lates=0, icl=0, iccl=0";
			$result = mysqli_query($connect, $sql);
			//Reset June leaves
			$sql ="UPDATE June SET cl=0, ccl=0, od=0, al=0, avail=0, lop=0, lates=0, icl=0, iccl=0";
			$result = mysqli_query($connect, $sql);
			//Reset July leaves
			$sql ="UPDATE July SET cl=0, ccl=0, od=0, al=0, avail=0, lop=0, lates=0, icl=0, iccl=0";
			$result = mysqli_query($connect, $sql);
			//Reset August leaves
			$sql ="UPDATE August SET cl=0, ccl=0, od=0, al=0, avail=0, lop=0, lates=0, icl=0, iccl=0";
			$result = mysqli_query($connect, $sql);
			//Reset September leaves
			$sql ="UPDATE September SET cl=0, ccl=0, od=0, al=0, avail=0, lop=0, lates=0, icl=0, iccl=0";
			$result = mysqli_query($connect, $sql);
			//Reset October leaves
			$sql ="UPDATE October SET cl=0, ccl=0, od=0, al=0, avail=0, lop=0, lates=0, icl=0, iccl=0";
			$result = mysqli_query($connect, $sql);
			//Reset November leaves
			$sql ="UPDATE November SET cl=0, ccl=0, od=0, al=0, avail=0, lop=0, lates=0, icl=0, iccl=0";
			$result = mysqli_query($connect, $sql);
			//Update IsUpdated Value to true (i.e, value 1) for Yearly leaves			
			$sql="update updatemonthlyleave set isupdated=1, updatedDate='".$dateandtime."' where monthname='".$curname."year'"; 
			$result = mysqli_query($connect, $sql);
			
			echo "Dear Admin, You have updated YEAR-WISE Leaves. Thank You!!!";
		
		}
		else
		{
			echo "Dear Admin, You have Already updated for YEAR-WISE leaves. Thank You!!!";
		}
	}
	mysqli_close($connect);
?>
