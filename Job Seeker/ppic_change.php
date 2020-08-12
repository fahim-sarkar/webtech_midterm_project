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
	<title>Search Job</title>
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
	<h3>Upload profile picture</h3>
 	<form method="POST" action="ppic_validation.php" enctype="multipart/form-data">
		
			Image: <input type="file" name="ProfilePicture">
			<input type="submit" name="submit" value="Submit">
		
	</form>
<h2>file size maximum 5 MB</h2>
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















