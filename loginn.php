<DOCTYPE.html>
<html>
<head>
	<title>login form</title>

<style>
body{
	background-image: url(l.jpg);
	background-image: no repeat;
	background-size: 100% ;
}
.simple-form{
	text-align: center;
	margin-left:450px; 
	margin-right:150px;
	margin-top:25px;
	margin-bottom:225px; 
}
#login{
	width:56%;
	background-color:#051019;
	opacity=0.8;
	padding:50px 0px;	
}
#button{
 width: 250px;
 padding:10px;
 border-radius: 5px;
}
#rd{
margin:11px;
color:whitesmoke;
 }
#but{
color:goldenrod;
font-size:12px;
 }
#butt{
width: 55px;
padding: 10px;
border-radius: 5px;
outline=0px;
background-color: #069963;
border:2px;
}
#label{
text-align: center;
text-shadow: blur;
color: lightblue;
margin:255px;

}
#rd{
color: white;
font-size: 8px;
}
p{
color: white;}
h1{
color:violet;;
font-family:verdang;
font-size:300% }
.loginbtn{
padding-top:5px; }
</style>	
</head>
<body>
<h1>Login here here</h1>

	<div class="simple-form">
	
		<form id="login" action="validation.php" method="post">
			<label for="Name"></label><br>
			<input type="text" name="user" id="button" placeholder="enter a name" class="form-control"><br>
			
         <label for="password"></label><br>
			<input type="password"  id="button" class="form-control" placeholder="enter password" name="password" required><br>
			
	      <br>
    <button type="submit" class="loginbtn">Login</button>
 

	   </form>
	 </div>
</body>
</html>	 	
