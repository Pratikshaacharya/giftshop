<DOCTYPE.html>
<html>
<head>
	<title>Registeration form</title>

<style>
body{
	background-image: url(r1.jpg);
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
#registeration{
	width:56%;
	background-color:#051019;
	opacity=0.8;
	padding:50px 0px;	
}
#button{
 width: 250px;
 padding:5px;
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
.registerbtn{
padding-top:10px; }
</style>	
</head>
<body>
<h1>register here</h1>

	<div class="simple-form">
		<form id="registeration" action="register.php" method="post">
			<label for="Name"></label><br>
			<input type="text" name="user" id="button" class="form-control" placeholder="enter a name"><br>
			<label for="email"></label><br>
         <input type="email" name="email" id="button" class="form-control"  placeholder="enter a email" required><br>
         <label for="password"></label><br>
			<input type="password"  id="button" class="form-control" placeholder="enter password" name="password" required>
			<label for="number"><br></label><br>
         <input type="tel" name="number" class="form-control" id="button" placeholder="enter mobile no"><br>
			
    <button type="submit" class="registerbtn">Register</button>
  <div class="container login">
    <p>Already have an account? <a href="loginn.php">log in</a>.</p>
    </div>

	   </form>
	 </div>
</body>
</html>	 	
