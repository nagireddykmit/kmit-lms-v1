<?php
session_start();
$_SESSION['selectdate']=$_GET['month'];
header("Location: daywiseleavependinghistory.php?fromdate=".$_GET['month']);
?>