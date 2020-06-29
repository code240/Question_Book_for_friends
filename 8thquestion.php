<?php
 error_reporting(0);
session_start();
$g=$_POST["myanswer"];
$_SESSION["ans7"] =$g;
?>
<html>
<head>
<title>
eight question
</title>
<link href="firstq8.css" rel="stylesheet">
<script src="javascript.js"></script>

<meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>
<body>
<div id="maxdiv">
<div id="div1">
<label id="label1">Answer these </label>
<label id="label2"> 8/10 </label>
<label id="label3"> question</label>
<br>
<label id="label4">about </label>
<label id="label5"><?php echo $_SESSION["owner"];?></label>

</div>
<div id="main_div">
<img src="songavtar.png" alt="nicknameavtar" id="nicknameavtar"><br>
<label id="labelq">8. Any song for </label>
<label id="labelq1"><?php echo $_SESSION["owner"];?>?</label>
<form action="9thquestion.php" method="POSt" onsubmit=" return validform();" name="myanswerform" required>

<div id="input_div">
<input type="text" id="inputanswer" pattern=".{2,60}" name="myanswer" title="character limit should be 2 to 60" placeholder="Answer here.....">
</div>
<div id="div_btn">
<input type="submit" value="NEXT" id="submitanswer">
</div>
</form>

</div>
</div>
</body>

</html>
