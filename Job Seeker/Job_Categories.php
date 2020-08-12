<?php

session_start();

if(!isset($_SESSION['username'])){
	header('location:login.php');	
}



?>


<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>Job Categories</title>
</head>
<body>
<center>
<table border="2" width="600">
<tr>

<td colspan="1"><center><img src="logo.png" height="80" width="150" /></center></td>
<td colspan="1"><div align="center">
	<img width="30" height="40" src="Profile Picture/93780840_942950442803821_2251613927500677120_o.jpg"> <br/> <a href="Profile.php"><?php echo $_SESSION['username'];?></a> <img src="online.png" height="10" width="10"/>  </center>  <center><a href="home.php">Home</a> | <a href="logout.php">Logout</a> </center> </td> 
</tr>

 <td colspan="10">
<center>
 	<h3>Job Categories:</h3>

 </center>
<center><a href="#">IT & Telecommunication</a>
 		<br><br>
 		<a href="#">Engineer/Architects</a>
 		<br><br>
 		<a href="#">Garments/Textile</a>
 		<br><br>
 		<a href="#">Design/Creative</a>
 		<br><br>
 		<a href="#"> Accounting/Finance</a>
 		<br><br>
 		<a href="#">Marketing/Sales</a>
 		<br><br>
 		<a href="#">Medical/Pharma</a>
<br/><h2>More jobs comming soon!</h2>
 	</center>


</td>

	</tr>
	<tr>
<td colspan="10">
<center><big><b> Copyright @ 2020 </b></big></center>
</td>

	</tr>


</table>








	
</body>
</html>



</body>
</html>








