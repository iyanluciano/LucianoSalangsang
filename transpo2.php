
<!-- saved from url=(0041)http://rumkin.com/tools/cipher/rotate.php -->
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8"><title>Transpo2</title>

<!-- These pages are (C)opyright 2002-2008, Tyler Akins -->
<!-- Fake email for spambots: info@rumkin.com -->
<script language="JavaScript" src="./Rotate_files/util.js"></script>
<script language="JavaScript" src="./Rotate_files/rotate.js"></script>
<script language="JavaScript"><!--
// This code was written by Tyler Akins and placed in the public domain.
// It would be nice if you left this header intact.  http://rumkin.com


function insert_k3()
{
   document.encoder.encdec.value = -1;
   document.encoder.col.value = 24;
   document.encoder.text.value = "ENDyaHrOHNLSRHEOCPTEOIBIDYSHNAIA\n" +
      "CHTNREYULDSLLSlLNOHSNOSMRWXMNE\n" +
      "TPRNGATIHNRARPESLNNELEBLPIIACAE\n" +
      "WMTWNDITEENRAHCTENEUDRETNHAEOE\n" +
      "TFOLSEDTIWENHAEIOYTEYQHEENCTAYCR\n" +
      "EIFTBRSPAMHHEWENATAMATEGYEERLB\n" +
      "TEEFOAsFIOTUETUAEOTOARMAEERTNRTI\n" +
      "BSEDDNIAAHTTMSTEWPIEROAGRIEWFEB\n" +
      "AECTDDHILCEIHSITEGOEAOSDDRYDLORIT\n" +
      "RKLMLEHAGTDHARDPNEOHMGFMFEUHE\n" +
      "ECDMRIPFEIMEHNLSSTTRTVDOHW";
}


function start_update()
{
   if (! document.getElementById)
   {
      alert('Sorry, you need a newer browser.');
      return;
   }

   if ((! document.Util_Loaded) || (! document.Rotate_Loaded) ||
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
       IsUnchanged(document.encoder.col) *
       IsUnchanged(document.encoder.encdec))
   {
      window.setTimeout('upd()', 100);
      return;
   }

   ResizeTextArea(document.encoder.text);
   
   var e = document.getElementById('output');
   
   if (document.encoder.text.value == '')
   {
      e.innerHTML = 'Enter your text and see the results here!';
   }
   else
   {
      e.innerHTML = SwapSpaces(HTMLEscape(Rotate(document.encoder.encdec.value * 1, 
                                      document.encoder.text.value,
				      document.encoder.col.value * 1)));
   }
   
   window.setTimeout('upd()', 100);
}

window.setTimeout('start_update()', 100);

// --></script>
<link rel="stylesheet" type="text/css" href="./Rotate_files/base.css">
<link rel="stylesheet" type="text/css" media="screen,projection" href="./Rotate_files/normal.css">
<link rel="stylesheet" type="text/css" media="print" href="./Rotate_files/print.css">
<script src="./Rotate_files/site.js" type="text/javascript"></script>
</head>
<body>


</div>
</form>
</div>

<style>
body{
background-color:black;


</style><center><br><br><center><font color="white"><h1>TRANSPO</h3></center>
<table cellpadding="0" cellspacing="0" border="0" width="500"><tbody><tr><td valign="top" width="99%"><div class="r_main">


<form name="encoder" method="post" action="http://rumkin.com/tools/cipher/rotate.php#" onsubmit="return false;">
<p><select name="encdec" _oldvalue="1">
<option value="1">Decrypt
</option><option value="-1">Transpo2
</option></select></p>
<p><textarea name="text" rows="2" cols="40" _oldvalue=""></textarea></p>
<p><input type="hidden" size="4" name="col" value="1" _oldvalue="1"></p>
</form>
<p>This is your encoded or decoded text:</p>
<table border="0" cellpadding="0" cellspacing="0" class="r_box" align="center" style="margin-top: 8px; margin-bottom: 8px;"><tbody><tr><td class="r_box"><span id="output">Enter your text and see the results here!</span>
</td></tr></tbody></table><div style="clear: both"></div>
</div>
</td>


</body></html>
