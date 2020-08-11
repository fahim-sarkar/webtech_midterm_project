<?php

session_start();

$con = mysqli_connect('localhost' , 'root' , '');

mysqli_select_db($con, 'project' );

$name = $_POST['user'];
$pass = $_POST['password'];
$pquote = $_POST['pquote'];


$s = "select * from user where name = '$name' && password = '$pass'";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if($num == 1){
	$_SESSION['username'] = $name;
	$_SESSION['pquote'] = $pquote;
	header('location:home.php');
	
}else{
	header('location:login.php');   
	
	
	
}


?>