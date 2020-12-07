<?php 
include('includes/config.php');

	if(isset($_POST['dept']))
	 {
		//$db = new DbConnect;
		$conn = $dbh;
		
		$stmt = $conn->prepare("SELECT * FROM tblemployees WHERE Department = '" . $_POST['dept']."'");
		$stmt->execute();
		$employees = $stmt->fetchAll(PDO::FETCH_ASSOC);
		echo json_encode($employees);
	}

	function loadDepts() {
		//$db = new DbConnect;
		$conn = $dbh;

		$stmt = $conn->prepare("SELECT * FROM tbldepartments");
		$stmt->execute();
		$departments = $stmt->fetchAll(PDO::FETCH_ASSOC);
		return $departments;
	}

 ?>
