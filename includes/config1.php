<?php 

$connect = new mysqli("localhost:3306","root","","finalelms");
  $connect->query("SET time_zone = '+05:30'");
// Check connection
if ($connect -> connect_errno) 
{
	echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
    exit();
  }
?>
