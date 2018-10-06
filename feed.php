<?php
$name=filter_input(INPUT_POST,'name');
$email=filter_input(INPUT_POST,'email');
$subject=filter_input(INPUT_POST,'subject');

$host="localhost";
$dbusername= "root";
$dbpassword="";
$dbname="users";

$conn=mysqli_connect($host,$dbusername,$dbpassword,$dbname);
if(mysqli_connect_error()){
die('Connect Error('.mysqli_connect_errno().')'.mysqli_connect_error());
}
else {
	$sql="INSERT INTO feed(name,email,message)values('$name','$email','$subject')"; 
	if($conn->query($sql)){
		header('location:fp.php');
	}
	else{
		echo "Error:".$sql."<br>"."$conn->error";
	}
	$conn->close();
}
?>