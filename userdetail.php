<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title></title>
 
</head>
<style>
body{
	background-image: url(t.jpg);
	background-image: no repeat;
	background-size: 100% ;
}
#wrapper {
  width: 30%;
  margin: 50px auto;
  padding: 40px;
  background:#CCCCFF;
}
form {
  margin: 30px auto;
}
.textInput {
  border: none;
  height: 28px;
  margin: 2px;
  border: 1px solid;
  font-size: 1.2em;
  padding: 5px;
  width: 95%;
}
.textInput:focus {
  outline: none;
}
.btn {
  width: 98.6%;
  border: none;
  margin-top: 5px;
  color: white;
  background-color: #CC3366;
  border-radius: 5px;
  padding: 12px;
}
h1{
text-align: center;
color:#990099;
font-family: Georgia, serif	;

}




</style>
<body>
 <h1>User details</h1>
  <div id="wrapper">
   <form method="POST" action="detail.php"  >
   	<div id="name">
   	  <label>Name</label> <br>
   	  <input type="text" name="name" class="textInput">
   	  <div id="name_error"></div>
   	</div>
   	<div id="email">
   	  <label>Email</label> <br>
   	  <input type="email" name="email" class="textInput">
   	</div>
   	
   	<div id="Address">
   	  <label>Address</label> <br>
   	  <input type="text" name="address" class="textInput">
   	</div>
   	<div id="city">
   	   <label>City</label> <br>
   	   <input type="text" name="city" class="textInput">
   	   <div id="password_error"></div>
   	</div>
   	<div id="state">
   	   <label>State</label> <br>
   	   <input type="text" name="state" class="textInput">
   	   
   	</div>
   	<div id="mobileno">
   	   <label>Mobile Number</label> <br>
   	   <input type="text" name="mobileno" class="textInput">
   	   
   	</div>
   	<div>
		<input type="submit" name="submit" value="Register" class="btn">
   	</div>
   </form>
  </div>
</body>
</html>
        
          
