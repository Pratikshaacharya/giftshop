<?php
$user=filter_input(INPUT_POST,'user');
$email=filter_input(INPUT_POST,'email');
$password=filter_input(INPUT_POST,'password');
$number=filter_input(INPUT_POST,'number');

$host="localhost";
$dbusername= "root";
$dbpassword="";
$dbname="users";

$conn=mysqli_connect($host,$dbusername,$dbpassword,$dbname);
if(mysqli_connect_error()){
die('Connect Error('.mysqli_connect_errno().')'.mysqli_connect_error());
}
else {
	$sql="INSERT INTO user(user,email,password,number)values('$user','$email','$password','$number')"; 
	if($conn->query($sql)){
		header('location:loginn.php');
	}
	else{
		echo "Error:".$sql."<br>"."$conn->error";
	}
	$conn->close();
}
?>
