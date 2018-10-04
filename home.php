<?php
session_start();
if(!isset($_SESSION['user'])){
header('location:registration.php');
}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h1>welcome <?php echo$_SESSION['user']; ?></h1>
	<a href="logout.php">LOGOUT</a>

</body>
</html>


