<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body{
	background-image: url(c.jpg);
	background-image: no repeat;
	background-size: 100% ;
}
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}
input[type=text], select, textarea {
    width: 100%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    margin-top: 6px;
    margin-bottom: 16px;
    resize: vertical;
}
input[type=submit] {
    background-color: #4CAF50;
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}
input[type=submit]:hover {
    background-color: #45a049;
}
.container {
    width: 30%;
  margin: 40px auto;
  padding: 40px;
  background:#fff2cc;
  border-color: #f28d8d;
}
h1{
text-align: center;
color:peachpuff;
font-family: Georgia, serif	;
font-size: 32px;
}
#btn{
 
  width: 100%;
  border: none;
  margin-top: 5px;
  color: white;
  background-color: #CC3366;
  border-radius: 5px;
  padding: 12px;
}
label{
color: #990073}
</style>
</head>
<body>
<h1>Give Us Your Feedback</h1>
<div class="container">
	<form id="feedback" action="feed.php" method="post">
  
    <label for="name"> Name</label>
    <input type="text" id="button" name="name" placeholder="Your name..">

    <label for="email">Email</label>
    <input type="text" id="button" name="email" placeholder="email..">

    

    <label for="subject">Message</label>
    <textarea id="button" name="subject" placeholder="Write something.." style="height:200px"></textarea>

    <input  id="button" type="submit" value="Submit">
  </form>
</div>

</body>
</html>