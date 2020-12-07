<?php session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>KMIT ELMS</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
	<link href="img/favicon.png" rel="icon">
	<link href="img/apple-touch-icon.png" rel="apple-touch-icon">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
	<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
	<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
	<script src="headerfile.css"/>
	<style>
		
	</style>
 <script>
function myFunction() {
$("welcome").show();
});
</script>
</head>


<body onload="myFunction()">

  <!--==========================
  Header
  ============================-->
	<header>
		<?php
		require_once('header.php');
		?>
	</header>
	<!--==========================
      Employee Section
    ============================-->
	<div id="employee" class="container text-center">
		
		<h1 style="font-family:Constantia;font-weight:bold;color:#2F4F4F;">Employee Leave Management System </h1>
        <div class="card card-container">
		<?php
		if(isset($_SESSION['error']))
		{
			echo '<p id="profile-name" class="profile-name-card">'.$_SESSION["error"].'</p>';
			session_destroy();
		}
		        ?> 
		<img id="profile-img" class="profile-img-card" src="welcome.jpg" />
           
            <form class="form-signin" action="sample.php" method="post">
                <span id="reauth-email" class="reauth-email"></span>
                <input type="text" id="username" name="username" class="form-control" placeholder="Email address" required autofocus>
                <input type="password" id="password" name="password" class="form-control" placeholder="Password" required>
                <input type="submit" name="signin" value="Sign in" class="btn btn-lg btn-primary btn-block btn-signin">
            </form><!-- /form -->
			<a href="addemployee.php" class="forgot-password"> New Employee ??</a>&nbsp;
			<a href="forgot-password.php" class="forgot-password"> Forgot Password</a>
        </div><!-- /card-container -->
    </div>
  
<!-- Footer -->
		<?php
		require_once('footer.php');
		?>
</body>
</html>
