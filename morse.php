<title>Morse Code</title>


<!-- saved from url=(0040)http://rumkin.com/tools/cipher/morse.php -->

<!-- These pages are (C)opyright 2002-2008, Tyler Akins -->
<!-- Fake email for spambots: 1234@rumkin.com -->
<script language="JavaScript" src="./Morse Code_files/util.js"></script>
<script language="JavaScript"><!--
// This code was written by Tyler Akins and placed in the public domain.
// Feel free to use this code if you so desire.
// It would be nice if you left this header intact.  http://rumkin.com

var MorseIndexes = new Array("A","B","C","D","E","F","G","H","I","J","K","L","M","N","O","P","Q","R","S","T","U","V","W","X","Y","Z",'0',"1","2","3","4","5","6","7","8","9",".",",","?","-","=",":",";","(",")","/",'"',"$","'","\n","_","@","[Error]","[Error]","[Error]","[Error]","[Wait]","[Understood]","[End of message]","[End of work]","[Starting signal]","[Invitation to transmit]","!","!","+","~","#","&","\2044");
var MorseCodes = new Array(".-","-...","-.-.","-..",".","..-.","--.","....","..",".---","-.-",".-..","--","-.","---",".--.","--.-",".-.","...","-","..-","...-",".--","-..-","-.--","--..","-----",".----","..---","...--","....-",".....","-....","--...","---..","----.",".-.-.-","--..--","..--..","-....-","-...-","---...","-.-.-.","-.--.","-.--.-","-..-.",".-..-.","...-..-",".----.",".-.-..","..--.-",".--.-.","......",".......","........",".........",".-...","...-.",".-.-.","...-.-","-.-.-","-.-","---.","-.-.--",".-.-.",".-...","...-.-",". ...","-..-.");

function SwapMorse()
{
   var s = document.encoder.text.value;
   var o = '';
   
   for (var i = 0; i < s.length; i ++)
   {
      var c = s.charAt(i);
      if (c == '-')
         c = '.';
      else if (c == '.')
         c = '-';
      else if (c == "\r")
         c = '';
      o += c;
   }
   
   document.encoder.text.value = o;
}

function Reverse()
{
   var s = document.encoder.text.value;
   var i = s.length - 1, o = '';
   
   while (i >= 0)
   {
      var c = s.charAt(i);
      if (c != "\r")
         o += c;
      i --;
   }
   
   document.encoder.text.value = o;
}

function getIndex(arr, str)
{
   var i = 0;
   while (arr[i])
   {
      if (arr[i] == str)
      {
         return i;
      }
      i ++;
   }
   return -1;
}

function encode(str)
{
   var addSpace = 0;
   var out = "";
   for (var i = 0; i < str.length; i ++)
   {
      var c = str.charAt(i);
      var j = getIndex(MorseIndexes, c.toUpperCase());
      if (j >= 0)
      {
         if (addSpace)
	 {
	    out += ' ';
	 }
         out += MorseCodes[j];
	 addSpace = 1;
      }
      else
      {
         if (c.charCodeAt(0) == 10 || c.charCodeAt(0) == 13)
	 {
	    out += c;
	 }
	 else if (addSpace)
	 {
	    out += ' / ';
	 }
	 addSpace = 0;
      }
   }
   return out;
}


function decode(str)
{
   var out = "";
   var addSpace = 0;
   
   // Reformat string, trying to change odd things into dots
   // and hyphens
   tmp = "";
   for (var i = 0; i < str.length; i ++)
   {
      if (str.charCodeAt(i) < 27)
      {
         tmp += ' ' + str.charAt(i) + ' ';
      }
      else if (str.charCodeAt(i) == 8211 || str.charCodeAt(i) == 8212 ||
               str.charAt(i) == '_')
      {
         // Compensate for weird hyphens
         tmp += '-';
      }
      else if (str.charCodeAt(i) == 8226 || str.charCodeAt(i) == 8901)
      {
         // Compensate for odd dots
         tmp += '.';
      }
      else
      {
         tmp += str.charAt(i);
      }
   }
  
   str = tmp.split(' ');
   for (var i = 0; i < str.length; i ++)
   {
      var idx = getIndex(MorseCodes, str[i]);
      
      if (idx >= 0)
      {
         out += MorseIndexes[idx];
	 addSpace = 1;
      }
      else
      {
         if (str[i].charCodeAt(0) == 10 || str[i].charCodeAt(0) == 13)
	 {
	    out += str[i];
     	 }
	 else if (addSpace)
	 {
	    out += ' ';
	 }
	 addSpace = 0;
      }
   }
   return out;
}


function upd()
{
   if (IsUnchanged(document.encoder.text) *
       IsUnchanged(document.encoder.encdec))
   {
      window.setTimeout('upd()', 100);
      return;
   }
   
   ResizeTextArea(document.encoder.text);

   var e = document.getElementById('output');
 
   if (document.encoder.text.value == '')
   {
      e.innerHTML = 'Type in a message and see the results here!';
   }
   else if (document.encoder.encdec.value * 1 == 1)
   {
      e.innerHTML = HTMLEscape(encode(document.encoder.text.value));
   }
   else
   {
      e.innerHTML = HTMLEscape(decode(document.encoder.text.value));
   }
   
   window.setTimeout('upd()', 100);
}



function start_update()
{
   if (! document.getElementById)
   {
      alert('Sorry, you need a newer browser.');
      return;
   }

   if ((! document.Util_Loaded) ||
       (! document.getElementById('output')))
   {
      window.setTimeout('start_update()', 100);
      return;
   }
   upd();
}

function SetMorse(m)
{
   document.encoder.encdec.value = "-1";
   document.encoder.text.value = m;
   return false;
}


window.setTimeout('start_update()', 100);


// --></script>
<link rel="stylesheet" type="text/css" href="./Morse Code_files/base.css">
<link rel="stylesheet" type="text/css" media="screen,projection" href="./Morse Code_files/normal.css">
<link rel="stylesheet" type="text/css" media="print" href="./Morse Code_files/print.css">
<script src="./Morse Code_files/site.js" type="text/javascript"></script>
</head>
<body>




</div>
</form>
</div>
<style>
body{
background-color:black;


</style><br><br><center><font color="white"><h1>MORSE CODE</h3></center>
<center><table cellpadding="0" cellspacing="0" border="0" width="600"><tbody><tr><td valign="top" width="99%"><div class="r_main">


<form name="encoder" method="post" action="http://rumkin.com/tools/cipher/morse.php#" onsubmit="return false;">
<p><select name="encdec" _oldvalue="1">
   <option value="1">Encrypt
   </option><option value="-1">Decrypt
</option></select>
</p><p>Your message: (<a href="http://rumkin.com/tools/cipher/morse.php#" onclick="Reverse(); return false">Reverse</a> - 
<a href="http://rumkin.com/tools/cipher/morse.php#" onclick="SwapMorse(); return false">Swap</a>)<br>
<textarea name="text" rows="2" cols="40" _oldvalue="-_"></textarea></p>
</form>
<p>This is your encoded or decoded text:</p>
<table border="0" cellpadding="0" cellspacing="0" class="r_box" align="center" style="margin-top: 8px; margin-bottom: 8px;"><tbody><tr><td class="r_box"><span id="output">-....- ..--.-</span>
</td></tr></tbody></table><p>This is a table of all the Morse Code translations:
</p>
<table border="1" cellpadding="3" cellspacing="0">
<tbody><tr><td>A &nbsp; <b>.-</b></td><td>B &nbsp; <b>-...</b></td><td>C &nbsp; <b>-.-.</b></td><td>D &nbsp; <b>-..</b></td><td>E &nbsp; <b>.</b></td><td>F &nbsp; <b>..-.</b></td><td>G &nbsp; <b>--.</b></td><td>H &nbsp; <b>....</b></td><td>I &nbsp; <b>..</b></td><td>J &nbsp; <b>.---</b></td></tr>
<tr>
<td>K &nbsp; <b>-.-</b></td><td>L &nbsp; <b>.-..</b></td><td>M &nbsp; <b>--</b></td><td>N &nbsp; <b>-.</b></td><td>O &nbsp; <b>---</b></td><td>P &nbsp; <b>.--.</b></td><td>Q &nbsp; <b>--.-</b></td><td>R &nbsp; <b>.-.</b></td><td>S &nbsp; <b>...</b></td><td>T &nbsp; <b>-</b></td></tr>
<tr>
<td>U &nbsp; <b>..-</b></td><td>V &nbsp; <b>...-</b></td><td>W &nbsp; <b>.--</b></td><td>X &nbsp; <b>-..-</b></td><td>Y &nbsp; <b>-.--</b></td><td>Z &nbsp; <b>--..</b></td><td>0 &nbsp; <b>-----</b></td><td>1 &nbsp; <b>.----</b></td><td>2 &nbsp; <b>..---</b></td><td>3 &nbsp; <b>...--</b></td></tr>
<tr>
<td>4 &nbsp; <b>....-</b></td><td>5 &nbsp; <b>.....</b></td><td>6 &nbsp; <b>-....</b></td><td>7 &nbsp; <b>--...</b></td><td>8 &nbsp; <b>---..</b></td><td>9 &nbsp; <b>----.</b></td><td>. &nbsp; <b>.-.-.-</b></td><td>, &nbsp; <b>--..--</b></td><td>? &nbsp; <b>..--..</b></td><td>- &nbsp; <b>-....-</b></td></tr>
<tr>
<td>= &nbsp; <b>-...-</b></td><td>: &nbsp; <b>---...</b></td><td>; &nbsp; <b>-.-.-.</b></td><td>( &nbsp; <b>-.--.</b></td><td>) &nbsp; <b>-.--.-</b></td><td>/ &nbsp; <b>-..-.</b></td><td>" &nbsp; <b>.-..-.</b></td><td>$ &nbsp; <b>...-..-</b></td><td>' &nbsp; <b>.----.</b></td><td>¶ &nbsp; <b>.-.-..</b></td></tr>
<tr>
<td>_ &nbsp; <b>..--.-</b></td><td>@ &nbsp; <b>.--.-.</b></td><td>! &nbsp; <b>---.</b></td><td>! &nbsp; <b>-.-.--</b></td><td>+ &nbsp; <b>.-.-.</b></td><td>~ &nbsp; <b>.-...</b></td><td># &nbsp; <b>...-.-</b></td><td>&amp; &nbsp; <b>. ...</b></td><td>⁄ &nbsp; <b>-..-.</b></td><td>&nbsp;</td></tr>
</tbody></table>


</body></html>
