<?php
 error_reporting(0);
session_start();
$i=$_POST["myanswer"];
$_SESSION["ans9"] =$i;
?>
<html>
<head>
<title>
tenth question
</title>
<link href="firstq10.css" rel="stylesheet">
<script src="javascript.js"></script>

<meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>
<body>
<div id="maxdiv">
<div id="div1">
<label id="label1">Answer this </label>
<label id="label2"> LAST </label>
<label id="label3"> question </label>
<br>
<label id="label4">about </label>
<label id="label5"><?php echo $_SESSION["owner"];?></label>

</div>
<div id="main_div">
<img src="webavtar.png" alt="nicknameavtar" id="nicknameavtar"><br>
<label id="labelq">10. Can i post your answer in my story or post? </label>

<form action="result.php" method="POST" onsubmit=" return validform();" name="myanswerform" required>

<div id="input_div">
<input type="text" id="inputanswer" pattern=".{2,20}" name="myanswer" title="character limit should be 2 to 20" placeholder="Answer here.....">
</div>
<div id="div_btn">
<input type="submit" value="DONE" id="submitanswer" onclick="help();" >
</div>
</form>

</div>
</div>
</body>

</html>
