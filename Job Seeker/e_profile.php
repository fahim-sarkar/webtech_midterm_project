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
	<title>Edit Profile</title>
</head>
<body>
<center>
<table border="2" width="600">
<tr>

<td colspan="1"><center><img src="logo.png" height="80" width="150" /></center></td>
<td colspan="1"><div align="right">
	<center><a href="home.php">Home</a> | <a href="logout.php">Logout</a> </center> </td> 
</tr>
<tr>
<td colspan="10">
<center>
 <img width="80" height="100" src="Profile Picture/93780840_942950442803821_2251613927500677120_o.jpg"></center>
	 
	<center>[ <a href="ppic_change.php"> Change Profile Picture </a> ] <h4> ID: <a href="profile.php"><?php echo $_SESSION['username'];?> </a> 
	<img src="online.png" height="10" width="10"/> </h1></center>
</td>

</td>
 
	</tr>
	<tr>
<td colspan="10"><right><big><legend><b>Edit Profile</b></legend></big></right>




</td>
	</tr>
<tr>
<td colspan="10"><big><b>Name:</b></big> <input type="text" name="user" class="form-control" required/>


</td>

</tr>
<tr>
<td colspan="10"><big><b>Degree:</b></big> <input type="text" name="user" class="form-control" required/>

</td>
</tr>


<tr>
<td colspan="10"><big><b>CGPA:</b></big> <input type="text" name="user" class="form-control" required/></td>
</tr>

<tr>
<td colspan="10"><big><b>Subject:</b></big> <input type="text" name="user" class="form-control" required/> </td>
</tr>
<tr>

	<td colspan="10"><button class="button">Update</button></td>
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








