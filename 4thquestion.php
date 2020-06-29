<?php
 error_reporting(0);
session_start();
$c=$_POST["myanswer"];
$_SESSION["ans3"] =$c;
?>

<html>
<head>
<title>
fourth question
</title>
<link href="firstq4.css" rel="stylesheet">
<script src="javascript.js"></script>

<meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>
<body>
<div id="maxdiv">
<div id="div1">
<label id="label1">Answer these </label>
<label id="label2"> 4/10 </label>
<label id="label3"> question</label>
<br>
<label id="label4">about </label>
<label id="label5"><?php echo $_SESSION["owner"];?></label>

</div>
<div id="main_div">
<img src="dislikeavtar.png" alt="nicknameavtar" id="nicknameavtar"><br>
<label id="labelq">4. one thing you dislike in </label>
<label id="labelq1"><?php echo $_SESSION["owner"];?>?</label>
<form action="5thquestion.php" method="POST" onsubmit=" return validform();" name="myanswerform" required>

<div id="input_div">
<input type="text" id="inputanswer" pattern=".{2,35}" name="myanswer" title="character limit should be 2 to 35" placeholder="Answer here.....">
</div>
<div id="div_btn">
<input type="submit" id="submitanswer" value="NEXT">
</div>
</form>

</div>
</div>
</body>

</html>