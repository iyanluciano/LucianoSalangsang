
<!-- saved from url=(0043)http://rumkin.com/tools/cipher/vigenere.php -->
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8"><title>Vigenere Cipher</title>

<!-- These pages are (C)opyright 2002-2008, Tyler Akins -->
<!-- Fake email for spambots: nonprepayment@rumkin.com -->
<script language="JavaScript" src="./Vigenere Ciphers_files/util.js"></script>
<script language="JavaScript" src="./Vigenere Ciphers_files/vigenere.js"></script>
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

   if ((! document.Vigenere_Loaded) || (! document.Util_Loaded) ||
       (! document.getElementById('output')))
   {
      window.setTimeout('start_update()', 100);
      return;
   }
   upd();
}


function upd()
{
   if (IsUnchanged(document.encoder.text) *
       IsUnchanged(document.encoder.pass) *
       IsUnchanged(document.encoder.encdec))
   {
      window.setTimeout('upd()', 100);
      return;
   }

   ResizeTextArea(document.encoder.text);

   var e = document.getElementById('output');
   
   if (document.encoder.text.value != '')
   {
      e.innerHTML = SwapSpaces(HTMLEscape(Vigenere(document.encoder.encdec.value * 1, 
         document.encoder.text.value, document.encoder.pass.value)));
   }
   else
   {
      e.innerHTML = 'Type in a message and see the results here!';
   }
   
   window.setTimeout('upd()', 100);
}


function InsertSmithy()
{
   document.encoder.encdec.value = 1;
   document.encoder.pass.value = "AAYCEHMU";
   document.encoder.text.value = "Jaeiex tostgp sac gre amq wfkadpmqzv";
}

function InsertSmithyFixed()
{
   document.encoder.encdec.value = 1;
   document.encoder.pass.value = "AAYCEHMU";
   document.encoder.text.value = "jaeiex tosHgp sac gre amq wfkadpmqzvZ";
}

window.setTimeout('start_update()', 100);

// --></script>
<link rel="stylesheet" type="text/css" href="./Vigenere Ciphers_files/base.css">
<link rel="stylesheet" type="text/css" media="screen,projection" href="./Vigenere Ciphers_files/normal.css">
<link rel="stylesheet" type="text/css" media="print" href="./Vigenere Ciphers_files/print.css">
<script src="./Vigenere Ciphers_files/site.js" type="text/javascript"></script>
</head>
<body>


<style>
body{
background-color:black;


</style>

</div><br><br><center><font color="white"><h1>VIGENERE</h3></center>
<center><table cellpadding="0" cellspacing="0" border="0" width="500"><tbody><tr><td valign="top" width="99%"><div class="r_main">


	
<form name="encoder" method="post" action="http://rumkin.com/tools/cipher/vigenere.php#" onsubmit="return false;">
<p><select name="encdec" _oldvalue="-1">
   <option value="1">Encrypt
   </option><option value="-1">Decrypt
</option></select>
</p><p>Key:  <input type="text" name="pass" value="" _oldvalue="ada"></p>
<p>Your message:<br><textarea name="text" rows="2" cols="40" _oldvalue="asd"></textarea></p>
</form>
<p>This is your encoded or decoded text:</p>
<table border="0" cellpadding="0" cellspacing="0" class="r_box" align="center" style="margin-top: 8px; margin-bottom: 8px;"><tbody><tr><td class="r_box"><span id="output"></span>
</td></tr></tbody></table><div style="clear: both"></div>
</div>
</td>
</div>
</td></tr></tbody></table>
</td></tr>
</body></html>
