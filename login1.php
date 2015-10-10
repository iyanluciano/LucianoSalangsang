<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Log-in form</title>
<style type="text/css">
body {
background-color:black;
 
 }
#form {
width:500px;
margin:0 auto;
border:5px solid rgba(999,999,999);
-webkit-border-radius:5px;
-moz-border-radius:5px;
 border-radius:5px;
-webkit-box-shadow:0 0 18px rgba(50,50,50,50.4);
-moz-box-shadow:0 0 18px rgba(50,50,50,50.4);
 box-shadow:0 0 18px rgba(50,50,50,51.4);
 margin-top:5%;
 background-color:lightgray;
}

.mybutton{

		cursor: pointer;
		border: 1px solid #333;
		background: #a9e7f9; /* fallback */
		background: -moz-linear-gradient(top,  #a9e7f9 0%, #77d3ef 4%, #05abe0 100%);
		background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#a9e7f9), color-stop(4%,#77d3ef), color-stop(100%,#05abe0));
		background: -webkit-linear-gradient(top,  #a9e7f9 0%,#77d3ef 4%,#05abe0 100%);
		background: -o-linear-gradient(top,  #a9e7f9 0%,#77d3ef 4%,#05abe0 100%);
		background: -ms-linear-gradient(top,  #a9e7f9 0%,#77d3ef 4%,#05abe0 100%);
		background: linear-gradient(to bottom,  #a9e7f9 0%,#77d3ef 4%,#05abe0 100%);
		border-radius: 4px;
		box-shadow: 0 0 4px rgba(0,0,0,0.3);
		height:30px;
		width:90px;
		font-size:16px;
		font-family:Arial;
		
}

#footer {

	  width: 99%;
	  position: fixed;
	  bottom: 0px;
	  height: 71px;
	  border-top: 12px solid black;
	  font-family: Arial, Helvetica, sans-serif;
	  font-size: 12px;
	  color: #343434
	}

	#footer ul {
	  margin: 15px 0 10px 0;
	  text-align: center
	}

	#footer li {
	  display: inline;
	  list-style-type: none;
	}

	#footer li a {
	  color: #343434;
	  text-decoration: none;
	  margin: 0 5px
	}

	#footer li a:visited {
	  text-decoration: none
	}

	#footer li a:hover {
	  text-decoration: underline
	}


	#footer p {
	  text-align: center
	}
	
	#email{
    border: 1px solid black;
    font: 20px Helvetica, Arial, sans-serif;
	padding: 2px 10px;
	width: 210px;
	font-family:helvetica;
	font-size:16;
}

#email:focus {
    border: 3px solid black;
    outline: none;
}

#password{
    border: 1px solid black;
    font: 20px Helvetica, Arial, sans-serif;
	padding: 2px 10px;
	width: 210px;
	font-family:helvetica;
	font-size:16;
}

#password:focus {
    border: 3px solid black;
    outline: none;
}

#header{
 background-color:black;
}

.login{
width:100px;
height:30px;
font-size:16px;
}

</style>
</head>

<table align="center" height="150px" width="900" id="header">
<td align=center><br><center><font color="white" size="22px">CALVIN IYAN ENCRYPTION</center>
</table>

<?php

session_start();

 ?>
 
<table border=0 align = center id="form" height="220px">
	<form action = index.php method=POST>
	
	<tr><td align=center><font size="5px" face="arial">ENCRYPTION<tr><td align = center><input type=text id="email" name=email placeholder = "USERNAME" background="red" style="height:30px; width:200px; text-align:center;font-size:18px;" required>
	<tr><td align = center><input type=password name=password id="password" placeholder = "PASSWORD" style="height:30px; width:200px; font-size:18px; font-style:Arial; text-align:center;" required>
	<tr><td align = center><input class = "myButton" type=submit value="Log In" name=go style="font-family:'Arial';">
	<tr align="center"><td><font size="3px" face="arial">Dont Have an Account? Click <a href="register.php">Here!</a>
	</form></table>
	
<?php
if(isset($_POST['go']))
{include("dbconnect.php");
$a=$_POST['email'];
$b=$_POST['password'];
$query="select * from michael where Username='$a' and Password='$b'";
$result=mysql_query($query);
$bilang=mysql_num_rows($result);
if($bilang==0)
	print"<script language=javascript>
alert('Welcome $a!');
window.location='home.php';
</script>";
else
	{
	$_SESSION['email']=$a;
	print"<script language=javascript>
	window.location='home.php';
	alert('Welcome $a');
	</script>";
	}
}
?>

<?php
if (isset($_POST['submit'])){
 $_SESSION['email']=$_POST['email'];
 $_SESSION['password']=$_POST['password'];
if(($_POST['email']=="calvin")&&($_POST['password']=="abueva"))
{
print"<script language = javascript> window.location ='admin.php?view=month';</script>";
}
else
{
print"<script language=javascript>
alert('INVALID ADMIN');
window.location='index.php';
</script>";
}
}
?>
<br><br>
<div id="footer">
    <ul>
	  <li><a>(c) copyright</a></li>
    </ul>
  </div>
