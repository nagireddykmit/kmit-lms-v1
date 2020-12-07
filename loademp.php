<?php 
	include('includes/config.php');
	$conn = $dbh;
	if(isset($_POST['leid'])) {
		//$db = new DbConnect;
		
		$stmt = $conn->prepare("SELECT FirstName, LastName FROM tblemployees WHERE EmpId = '" . $_POST['leid']."'");
		$stmt->execute();
		$employees = $stmt->fetchAll(PDO::FETCH_ASSOC);
		echo json_encode($employees);
	}
	
    if (isset($_POST['callFunc'])) {
        echo loademployees();
    }
	
	function loademployees() {
		include('includes/config.php');
		$conn = $dbh;
		$stmt = $conn->prepare("SELECT EmpId FROM tblemployees");
		$stmt->execute();
		$lempid = $stmt->fetchAll(PDO::FETCH_ASSOC);
		return $lempid;
	}
 ?>
