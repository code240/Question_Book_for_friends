<?php
 error_reporting(0);
session_start();
$a=$_POST["myanswer"];
$_SESSION["ans1"] =$a;
?>
<html>
<head>
<title>
second question
</title>
<link href="firstq2.css" rel="stylesheet">
<script src="javascript.js"></script>

<meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>
<body>
<div id="maxdiv">
<div id="div1">
<label id="label1">Answer these </label>
<label id="label2"> 2/10 </label>
<label id="label3"> question</label>
<br>
<label id="label4">about </label>
<label id="label5"><?php echo $_SESSION["owner"];?></label>

</div>
<div id="main_div">
<img src="coloravtar.png" alt="nicknameavtar" id="nicknameavtar"><br>
<label id="labelq">2. Which color suits on </label>
<label id="labelq1"><?php echo $_SESSION["owner"];?>?</label>

<div id="input_div">
<form action="3rdquestion.php" method="POST" onsubmit=" return validform();" name="myanswerform" required>

<input type="text" id="inputanswer" pattern=".{2,25}" name="myanswer" title="character limit should be 2 to 25" placeholder="Answer here.....">
</div>
<div id="div_btn">
<input type="submit" id="submitanswer" value="NEXT">
</form>
</div>


</div>
</div>
</body>

</html>
