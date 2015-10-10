
<!-- saved from url=(0041)http://rumkin.com/tools/cipher/caesar.php -->
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8"><title>Caesarian Cipher</title>

<!-- These pages are (C)opyright 2002-2008, Tyler Akins -->
<!-- Fake email for spambots: jsimmons@rumkin.com -->
<script language="JavaScript" src="./Caesarian Shift_files/caesar.js"></script>
<script language="JavaScript" src="./Caesarian Shift_files/util.js"></script>
<script language="JavaScript"><!--
// This code was written by Tyler Akins and placed in the public domain.
// It would be nice if you left this header intact.  http://rumkin.com

function start_update()
{
   if (! document.getElementById)
   {
      alert('Sorry, you need a newer browser.');
      return;
   }

   if ((! document.Caesar_Loaded) || (! document.Util_Loaded) ||
       (! document.getElementById('caesar')))
   {
      window.setTimeout('start_update()', 100);
      return;
   }
   upd();
}


function upd()
{
   if (IsUnchanged(document.encoder.N) *
       IsUnchanged(document.encoder.text))
   {
      window.setTimeout('upd()', 100);
      return;
   }
   
   var e = document.getElementById('caesar');

   if (document.encoder.text.value == '')
   {
      e.innerHTML = 'Type in a message and see the results here!';
   }
   else
   {
      e.innerHTML = SwapSpaces(HTMLEscape(Caesar(1, document.encoder.text.value, 
         document.encoder.N.value * 1)));
   }
   
   window.setTimeout('upd()', 100);
}

function insert_alphabet()
{
   document.encoder.text.value = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
}

window.setTimeout('start_update()', 100);

// --></script>
<link rel="stylesheet" type="text/css" href="./Caesarian Shift_files/base.css">
<link rel="stylesheet" type="text/css" media="screen,projection" href="./Caesarian Shift_files/normal.css">
<link rel="stylesheet" type="text/css" media="print" href="./Caesarian Shift_files/print.css">
<script src="./Caesarian Shift_files/site.js" type="text/javascript"></script>
</head>
<body>
	
<style>
body{
background-color:black;


</style><center><br><br><center><font color="white"><h1>CAESAR CIPHER</h3></center>
<table cellpadding="0" cellspacing="0" border="0" width="500"><tbody><tr><td valign="top" width="99%"><div class="r_main">



<form name="encoder" method="post" action="http://rumkin.com/tools/cipher/caesar.php#" onsubmit="return false;">
<p>Rot:  <select name="N" _oldvalue="1">
<option value="0">0</option>
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
<option value="6">6</option>
<option value="7">7</option>
<option value="8">8</option>
<option value="9">9</option>
<option value="10">10</option>
<option value="11">11</option>
<option value="12">12</option>
<option value="13">13</option>
<option value="14">14</option>
<option value="15">15</option>
<option value="16">16</option>
<option value="17">17</option>
<option value="18">18</option>
<option value="19">19</option>
<option value="20">20</option>
<option value="21">21</option>
<option value="22">22</option>
<option value="23">23</option>
<option value="24">24</option>
<option value="25">25</option>
</select>
</p><p><textarea name="text" rows="5" cols="80" _oldvalue="asd"></textarea></p>
</form>
<p>This is your encoded or decoded text:</p>
<table border="0" cellpadding="0" cellspacing="0" class="r_box" align="center" style="margin-top: 8px; margin-bottom: 8px;"><tbody><tr><td class="r_box"><span id="caesar"></span>
</td></tr></tbody></table><div style="clear: both"></div>
</div>
</td>



</body></html>
