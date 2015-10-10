<html>
<title>Home</title>
<head>
<style type="text/css">


.button{

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
		
}
 
#form {
margin:0 auto;
border:5px solid rgba(999,999,999);
-webkit-border-radius:5px;
-moz-border-radius:5px;
 border-radius:5px;
-webkit-box-shadow:0 0 18px rgba(50,50,50,50.4);
-moz-box-shadow:0 0 18px rgba(50,50,50,50.4);
 box-shadow:0 0 18px rgba(50,50,50,51.4);
 background-color:lightgray;
}

body{
  background: url(images.jpg) no-repeat center center fixed; 
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
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
	  
	}


	#footer p {
	  text-align: center
	}
	
	#header{
	background-color:black;
	}


		.addPatient{
   			display: inline;
    		position: relative;
		}
		
		.addPatient:hover:after{
    		background: #333;
    		background: rgba(0,0,0,.8);
    		border-radius: 5px;
    		bottom: 26px;
    		color: #fff;
    		content: attr(title);
    		left: 20%;
    		padding: 5px 15px;
    		position: absolute;
    		z-index: 98;
    		width: 220px;
		}
		
		.addPatient:hover:before{
    		border: solid;
    		border-color: #333 transparent;
    		border-width: 6px 6px 0 6px;
    		bottom: 20px;
    		content: "";
    		left: 50%;
    		position: absolute;
    		z-index: 99;
		}
		.addPatient{

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
		
}

body{
background-color:black;
}

#header{
	background-color:black;
	}

</style>

</head>

<body>
<br>
<table align="center" height="150px" width="900" id="header">
<td align=center><br><center><font color="white" size="22px">CALVIN IYAN ENCRYPTION</center>
</table>
<br><br>

<table border=0 width=320 align=center bgcolor="gray" id="form">

<td><button class="addPatient" name="button1" Onclick=window.location.href="morse.php"  title="MORSE CODE." class="addPatient"><span title=""><IMG SRC="morse.jpg" ALIGN="absmiddle" height="140px" width="140px"></span>
</button>


<td><button class="addPatient" name="button1" Onclick=window.location.href="vigenere.php"  title="VIGENERE." class="addPatient"><span title=""><IMG SRC="vigenere.jpg" ALIGN="absmiddle" height="140px" width="140px"></span>
</button>
<tr>

<td><button class="addPatient" name="button1" Onclick=window.location.href="rot.php"  title="CAESAR CIPHER." class="addPatient"><span title=""><IMG SRC="caesar.jpg" ALIGN="absmiddle" height="140px" width="140px"></span>
</button>


<td><button class="addPatient" name="button1" Onclick=window.location.href="transpo2.php"  title="TRANSPO." class="addPatient"><span title=""><IMG SRC="transpo.JPEG" ALIGN="absmiddle" height="140px" width="140px"></span>
</button>




</table>

<div id="footer">
    <ul>
      <li><a href="index.php">Log-out  </a>|  </li>
	  <li>(c) copyright 2015</a></li>
    </ul>
  </div>
  </div>



</body>
</html>
