<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: members.php");
    exit;
}
?>
<!doctype html>
<html>
<head>
<style type="text/css">
	
body {
	background-color: #FFFFFF;
}
body,td,th {
	font-family: Cambria, "Hoefler Text", "Liberation Serif", Times, "Times New Roman", serif;
}
</style>
<meta charset="utf-8">
<title>Member Login</title>
<link href="css/hfh_css.css" rel="stylesheet" type="text/css">
</head>

<body>
<header>
<div id="navbar" class="topnav">
  <a href="index.html">Home</a>
  <a href="PayBill.html">Pay Bill</a>
  <a href="workwithus.html">Work With Us</a>
  <a href="members.php">Member Login</a>
  <a style="float: right" href="contact.html">Contact Us</a>>
</div>
<br>
	  <img src="logo.jpg" alt="Kennerly Construction" class="centerlogo">
	 
			
</header>

<br>
	<div class="center">
		<button type="button" > <a href="vehicles.php">Vehicle Table</a></button> <button type="button" ><a href="jobs.php"> Jobs Table </a> </button>
	</div>
	<br>
	<p class="center">
       <button type="button" style="font-size: 20px" > <a href="logout.php">Logout</a></button>
    </p>
	<p>
  <footer><strong>Kennerly Construction. All Rights Reserved&nbsp;</strong></footer>
</p>
</body>
<script>
window.onscroll = function() {myFunction()};

var navbar = document.getElementById("navbar");
var sticky = navbar.offsetTop;

function myFunction() {
  if (window.pageYOffset >= sticky) {
    navbar.classList.add("sticky")
  } else {
    navbar.classList.remove("sticky");
  }
}
</script>

</html>