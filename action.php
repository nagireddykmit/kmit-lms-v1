<?php
session_start();
error_reporting(0);
include('includes/config1.php');
//$connect = mysqli_connect("localhost:3306", "admin", "kmit@3306", "finalelms");  

// code for update the read notification status
$isread=1;
$did=intval($_GET['leaveid']);  
$admremarkdate=date('Y-m-d G:i:s ');


// code for action taken on leave
$did=intval($_GET['leaveid']);
$description=$_GET['remark'];
$status=$_GET['status'];   
$sql = "update tblleaves set AdminRemark='".$description."', AdminRemarkDate='".$admremarkdate."', Status=".$status.", IsRead=".$isread." where id=".$did; 
echo $sql;
$success=mysqli_query($connect, $sql);
 
if($success)
{
	$_SESSION['lid']=$did;
	echo "successful";
	echo "<script type='text/javascript'> document.location = 'calculate12.php'; </script>";
}

$msg="Leave updated Successfully";
echo "<script type='text/javascript'> document.location = 'pending-leavehistory.php'; </script>";

?>
