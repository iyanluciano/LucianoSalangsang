<title>Log-in form</title>
<style type="text/css">
body {
background-color:black;
 
 }
#form {
width:300px;
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

.myBUtton{

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
	
	#username{
    border: 1px solid black;
    font: 20px Helvetica, Arial, sans-serif;
	padding: 2px 10px;
	width: 210px;
	font-family:helvetica;
	font-size:16;
}

#username:focus {
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

#firstname{
    border: 1px solid black;
    font: 20px Helvetica, Arial, sans-serif;
	padding: 2px 10px;
	width: 210px;
	font-family:helvetica;
	font-size:16;
}

#firstname:focus {
    border: 3px solid black;
    outline: none;
}

#lastname{
    border: 1px solid black;
    font: 20px Helvetica, Arial, sans-serif;
	padding: 2px 10px;
	width: 210px;
	font-family:helvetica;
	font-size:16;
}

#lastname:focus {
    border: 3px solid black;
    outline: none;
}

#age{
    border: 1px solid black;
    font: 20px Helvetica, Arial, sans-serif;
	padding: 2px 10px;
	width: 210px;
	font-family:helvetica;
	font-size:16;
}

#age:focus {
    border: 3px solid black;
    outline: none;
}

#contact{
    border: 1px solid black;
    font: 20px Helvetica, Arial, sans-serif;
	padding: 2px 10px;
	width: 210px;
	font-family:helvetica;
	font-size:16;
}

#contact:focus {
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

<body>

<table align="center" height="150px" width="900" id="header">
<td align=center><br><center><font color="white" size="22px">CALVIN IYAN ENCRYPTION</center>
</table>

<form action = register.php>
	<table border = 0 id="form" height="140px">
		<TR><TD><font face = Arial> <TD align="center"><input type=text name=Username placeholder="Username" id="username" required>
		<tr><td><font face = Arial> <td align="center"><input type=password name=Password placeholder="Password" id="password" required>
		<tr><td colspan = 2><center><input type=submit class = "myBUtton" value='Register' name='save'>
			<a href="login1.php"><input type=button class = "myBUtton" value='Log-in' name='back'></a></table></form>

				
			<?php
if(isset($_GET['save']))
	{
	$a=$_GET['LastName'];
	$b=$_GET['FirstName'];
	$c=$_GET['Username'];
	$d=$_GET['Password'];
	$e=$_GET['Age'];
	$f=$_GET['Contact'];
include("dbconnect.php");
$k = "select * from michael where
Username='$c'";
$res = mysql_query($k);
$bilang = mysql_num_rows($res);
if($bilang == 0)
{
$insert = "insert into michael(LastName,FirstName,Username,Password,Age,Contact) values ('$a','$b','$c','$d','$e','$f')";
mysql_query($insert);
print"<script language=javascript>
alert('Thank you for your registration $c');
window.location='register.php';
</script>";
}
else
{

print"<script language=javascript>
alert('$a already exist $res $bilang');
window.location='register.php';
</script>";
}
	}

?>

<div id="footer">
    <ul>
	  <li><a>(c) copyright</a></li>
    </ul>
  </div>


