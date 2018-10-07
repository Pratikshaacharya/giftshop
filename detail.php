<?php
$name=filter_input(INPUT_POST,'name');
$email=filter_input(INPUT_POST,'email');
$address=filter_input(INPUT_POST,'address');
$city=filter_input(INPUT_POST,'city');
$state=filter_input(INPUT_POST,'state');
$mobileno=filter_input(INPUT_POST,'mobileno');


$host="localhost";
$dbusername= "root";
$dbpassword="";
$dbname="users";

$conn=mysqli_connect($host,$dbusername,$dbpassword,$dbname);
if(mysqli_connect_error()){
die('Connect Error('.mysqli_connect_errno().')'.mysqli_connect_error());
}
else {
	$sql="INSERT INTO detail(name,email,address,city,state,mobileno)values('$name','$email','$address','$city','$state','$mobileno')"; 
	if($conn->query($sql)){
		header('location:fp.php');
	}
	else{
		echo "Error:".$sql."<br>"."$conn->error";
	}
	$conn->close();
}
?>
