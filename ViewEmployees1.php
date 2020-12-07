<?php
session_start();
?>
<html>
<head> 
<title>View Employees</title>
 	<script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <script src="https://www.w3schools.com/lib/w3.js"></script>
<link href="https://www.w3schools.com/w3css/4/w3.css" rel="stylesheet" />
</head>
<body style="background-color:white;">
     <header>
<!-- #nav-menu-container -->
		<?php
		require_once('hodheader1.php');
		?>
     </header><!-- #header -->
<div class="container">
	<h2 style="font-family:Georgia;color:#000000;" align="center">Employees Information</h2>
   <div class="form-group">
		<div class="input-group">
		 <span class="input-group-addon" >Search</span>
		 <input type="text" name="search_text" id="search_text" placeholder="Search by Employee Details" class="form-control">
		</div>
	</div>
  <div id="result"></div>
 </div>
<style>
th {
  font-size: 20px;
  cursor: pointer;
  background-color: coral;
}
</style>
<script>
$(document).ready(function(){

 load_data();

 function load_data(query)
 {
  $.ajax({
   url:"hodfetch.php",
   method:"POST",
   data:{query:query},
   success:function(data)
   {
    $('#result').html(data);
   }
  });
 }
 $('#search_text').keyup(function(){
  var search = $(this).val();
  if(search != '')
  {
   load_data(search);
  }
  else
  {
   load_data();
  }
 });
 });
</script>
<!-- Footer -->
		<?php
		require_once('footer.php');
		?>
</body>
</html>