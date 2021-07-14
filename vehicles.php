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
<meta charset="utf-8">
<title>Member Login</title>
<link href="css/hfh_css.css" rel="stylesheet" type="text/css">
<style type="text/css">
	
body {
	background-color: #FFFFFF;
}
body,td,th {
	font-family: Cambria, "Hoefler Text", "Liberation Serif", Times, "Times New Roman", serif;
}
</style>
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


<?php
$connect = mysqli_connect("localhost", "root", "", "login");
$query = "SELECT * FROM vehicles ORDER BY id DESC";
$result = mysqli_query($connect, $query);
?>
<html>  
 <head>    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
          <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
          <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>            
    <script src="jquery.tabledit.js"></script>
    </head>  
    <body>  
	
	<section>
  <div class="container">  
   <br />   
            <div class="table-responsive">  
    <h3 align="center">Vehicles Table</h3><br />  
	
    <table id="editable_table" class="table table-bordered table-striped">
     <thead>
      <tr>
       <th>ID</th>
       <th>Name</th>
       <th>Type</th>
	   <th>Oil Change</th>
      </tr>
     </thead>
     <tbody>
     <?php
     while($row = mysqli_fetch_array($result))
     {
      echo '
      <tr>
       <td>'.$row["id"].'</td>
       <td>'.$row["Name"].'</td>
       <td>'.$row["Type"].'</td>
	   <td>'.$row["Oil_Change"].'</td>
      </tr>
      ';
     }
     ?>
     </tbody>
    </table>
   </div>  
  </div>  
  <p class="center">
        <button type="button" style="font-size: 20px" > <a href="Tables.php">Back</a></button>
        <button type="button" style="font-size: 20px" > <a href="logout.php">Logout</a></button>
    </p>
	</section>
 </body>  
</html>  



<script>  
$(document).ready(function(){  
     $('#editable_table').Tabledit({
      url:'action2.php',
      columns:{
       identifier:[0, "id"],
       editable:[[1, 'Name'], [2, 'Type'],[3, 'Oil_Change']]
      },
	  deleteButton:false,
      restoreButton:false,
      onSuccess:function(data, textStatus, jqXHR)
      {
       if(data.action == 'delete')
       {
        $('#'+data.id).remove();
       }
      }
     });
 
});  
 </script>


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