<?php

session_start();


$con=mysqli_connect('localhost','root');
if($con){
	echo"conection successful";
}else{
	echo"no connection";
}

mysqli_select_db($con, 'users');

$user=$_POST['user'];

$password=$_POST['password'];


$q="select * from user where user ='$user' && password= '$password'";
$result=mysqli_query($con, $q);
$num=mysqli_num_rows($result);

if($num==1){
	$_SESSION['user']=user;
	header('location:home.php');
	
}else{
	echo"error";
}
?>
	


