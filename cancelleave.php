<?php
session_start();
error_reporting(0);
include('includes/config1.php');

$lid=$_GET['leaveid'];
//$connect = mysqli_connect('localhost:3306', 'admin', 'kmit@3306','finalelms');
$sql = "DELETE FROM tblleaves WHERE id=".$lid;

if (mysqli_query($connect, $sql)) {
    echo "Record deleted successfully";
	$sql1 = "DELETE FROM classadjustments WHERE leaveid=".$lid;

	if (mysqli_query($connect, $sql1)) {
		echo "Record deleted successfully";
		echo "<script type='text/javascript'> document.location = 'leavehistory.php'; </script>";
	}
} else {
    echo "Error deleting record: " . mysqli_error($connect);
}

mysqli_close($connect);
?>
