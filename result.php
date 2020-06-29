<?php
 error_reporting(0);
session_start();
$j=$_POST["myanswer"];
$_SESSION["ans10"] =$j;
?>
<html>
<head>
<title>
result
</title>
<script src="javascript.js"></script>

<style>
    body{
background-image:linear-gradient(#5f27cd ,blue );
background-attachment:fixed;
}
#maxdiv{
	width:100%;
	height:100%;
	border:0px red;
	border-style:solid;
}

#user{
    width:65vw;
    height:auto;
    margin:2vw 0vw 0vw 22vw;
    border:0px red;
	border-style:solid;

}
#user0{
    width:65vw;
    height:auto;
    margin:2vw 0vw 0vw 18vw;
    border:0px red;
	border-style:solid;
    text-align:center;

}
#label0{
    font-family:cursive;
    font-size: 3vw;
    color:yellow; 
    text-shadow:2px 2px black;   
}
#label1{
    font-family:cursive;
    font-size: 4vw;
    color:#fff;
    
}
#label2{
    font-family:cursive;
    font-size: 4vw;
    color:yellow;
    
}
#d1st{
    width:68vw;
    height:auto;
    margin:2vw 0vw 0vw 11vw;
    border:0px red;
	border-style:solid;
    background-color:#f5f6fa;
    border-radius: 2vw;
   padding-top:1vw;
   padding-left:7vw;
   padding-bottom:2vw;
}

#labelques{


    font-size: 3vw;
    color:#000;
    font-family: "Dosis", cursive;
    font-weight: bold;
    
}
#labelname{


font-size: 3vw;
color:BLUE;
font-family: "Dosis", cursive;
font-weight: bold;
}

#d2nd{
    width:68vw;
    height:auto;
    margin:2vw 0vw 0vw 11vw;
    border:0px red;
	border-style:solid;
    background-color: #f5f6fa;
    border-radius: 2vw;
    padding-top:1vw;
    padding-left:7vw;
    padding-bottom:2vw;
}
#d3rd{
    width:68vw;
    height:auto;
    margin:2vw 0vw 0vw 11vw;
    border:0px red;
	border-style:solid;
    background-color: #f5f6fa;
    border-radius: 2vw;
    padding-top:1vw;
    padding-left:7vw;
    padding-bottom:2vw;
}
#d4th{
    width:68vw;
    height:auto;
    margin:2vw 0vw 0vw 11vw;
    border:0px red;
	border-style:solid;
    background-color: #f5f6fa;
    border-radius: 2vw;
    padding-top:1vw;
    padding-left:7vw;
    padding-bottom:2vw;
}
#d5th{
    width:68vw;
    height:auto;
    margin:2vw 0vw 0vw 11vw;
    border:0px red;
	border-style:solid;
    background-color:#f5f6fa;
    border-radius: 2vw;
    padding-top:1vw;
    padding-left:7vw;
    padding-bottom:2vw;
}
#labelans{
    padding-top:1vw;
    font-size: 3vw;
    color:red;
    font-family: times;
    font-weight: bold;
   
}
#labelansw{
    padding-top:1vw;
    font-size: 3vw;
    color:#44bd32;
    font-family: "Dosis", cursive;
    font-weight: bold;
   
}
#d6th{
    width:68vw;
    height:auto;
    margin:2vw 0vw 0vw 11vw;
    border:0px red;
	border-style:solid;
    background-color: #f5f6fa;
    border-radius: 2vw;
    padding-top:1vw;
    padding-left:7vw;
    padding-bottom:2vw;
}
#d7th{
    width:68vw;
    height:auto;
    margin:2vw 0vw 0vw 11vw;
    border:0px red;
	border-style:solid;
    background-color:#f5f6fa;
    border-radius: 2vw;
    padding-top:1vw;
    padding-left:7vw;
    padding-bottom:2vw;
}
#d8th{
    width:68vw;
    height:auto;
    margin:2vw 0vw 0vw 11vw;
    border:0px red;
	border-style:solid;
    background-color: #f5f6fa;
    border-radius: 2vw;
    padding-top:1vw;
    padding-left:7vw;
    padding-bottom:2vw;
}
#d9th{
    width:68vw;
    height:auto;
    margin:2vw 0vw 0vw 11vw;
    border:0px red;
	border-style:solid;
    background-color:#f5f6fa;
    border-radius: 2vw;
    padding-top:1vw;
    padding-left:7vw;
    padding-bottom:2vw;
}
#d10th{
    width:68vw;
    height:auto;
    margin:2vw 0vw 10vw 11vw;
    border:0px red;
	border-style:solid;
    background-color: #f5f6fa;
    border-radius: 2vw;
    padding-top:1vw;
    padding-left:7vw;
    padding-bottom:2vw;
}




#d11th{
    width:60vw;
    height:4.6vw;
    margin:2vw 0vw 10vw 18vw;
    border:0px red;
	border-style:solid;
    background-color: #f5f6fa;
    border-radius: 2vw;
 
}
#create{
    width:100%;
    height:100%;
    background-color:yellow;
    color:#000;
    font-family:verdana;
    font-size:3vw;
    font-weight:bold;
    border-radius:2vw;
    transition:0.4s ease;
}
#create:hover{
   
    background-color:#000;
    color:yellow;

    font-size:3.5vw;

   
}















































@media screen and (max-width:800px){
    body{
background-image:linear-gradient(#5f27cd ,blue );
background-attachment:fixed;
}
#maxdiv{
	width:100%;
	height:100%;
	border:0px red;
	border-style:solid;
}

#user{
    width:86vw;
    height:auto;
    margin:2vw 0vw 4vw 9vw;
    border:0px red;
	border-style:solid;
    


}
#user0{
    width:auto;
    height:7vw;
    margin:14vw 0vw 0vw 10vw;
    border:0px red;
	border-style:solid;

}
#label0{
    font-family:times;
    font-size: 4vw;
    color:yellow; 
    text-shadow:2px 2px black;   
}
#label1{
    font-family:times;
    font-size: 7vw;
    color:#fff;
    
}
#label2{
    font-family:times;
    font-size: 7vw;
    color:yellow;
    
}
#d1st{
    width:82vw;
    height:auto;
    margin:2vw 0vw 0vw 3vw;
    border:0px red;
	border-style:solid;
    background-color:#f5f6fa;
    border-radius: 2vw;
   padding-top:1vw;
   padding-left:7vw;
   padding-bottom:-5vw;
}

#labelques{


    font-size: 4vw;
    color:#000;
    font-family: verdana;
    
    
}
#labelname{


font-size:4vw;
color:#e84118;
font-family: verdana;
}

#d2nd{
    width:82vw;
    height:auto;
    margin:2vw 0vw 0vw 3vw;
    border:0px red;
	border-style:solid;
    background-color: #f5f6fa;
    border-radius: 2vw;
    padding-top:1vw;
    padding-left:7vw;
    padding-bottom:2vw;
}
#d3rd{
    width:82vw;
    height:auto;
    margin:2vw 0vw 0vw 3vw;
    border:0px red;
	border-style:solid;
    background-color: #f5f6fa;
    border-radius: 2vw;
    padding-top:1vw;
    padding-left:7vw;
    padding-bottom:2vw;
}
#d4th{
    width:82vw;
    height:auto;
    margin:2vw 0vw 0vw 3vw;
    border:0px red;
	border-style:solid;
    background-color: #f5f6fa;
    border-radius: 2vw;
    padding-top:1vw;
    padding-left:7vw;
    padding-bottom:2vw;
}
#d5th{
    width:82vw;
    height:auto;
    margin:2vw 0vw 0vw 3vw;
    border:0px red;
	border-style:solid;
    background-color:#f5f6fa;
    border-radius: 2vw;
    padding-top:1vw;
    padding-left:7vw;
    padding-bottom:2vw;
}
#labelans{

    font-size: 4vw;
    color:red;
    font-family: verdana;
    font-weight: bold;
   
}
#labelansw{
    padding-top:1vw;
    font-size: 4vw;
    color:#44bd32;
    font-family: times;
    font-weight: bold;
   
}
#d6th{
    width:82vw;
    height:auto;
    margin:2vw 0vw 0vw 3vw;
    border:0px red;
	border-style:solid;
    background-color: #f5f6fa;
    border-radius: 2vw;
    padding-top:1vw;
    padding-left:7vw;
    padding-bottom:2vw;
}
#d7th{
    width:82vw;
    height:auto;
    margin:2vw 0vw 0vw 3vw;
    border:0px red;
	border-style:solid;
    background-color:#f5f6fa;
    border-radius: 2vw;
    padding-top:1vw;
    padding-left:7vw;
    padding-bottom:2vw;
}
#d8th{
    width:82vw;
    height:auto;
    margin:2vw 0vw 0vw 3vw;
    border:0px red;
	border-style:solid;
    background-color: #f5f6fa;
    border-radius: 2vw;
    padding-top:1vw;
    padding-left:7vw;
    padding-bottom:2vw;
}
#d9th{
    width:82vw;
    height:auto;
    margin:2vw 0vw 0vw 3vw;
    border:0px red;
	border-style:solid;
    background-color:#f5f6fa;
    border-radius: 2vw;
    padding-top:1vw;
    padding-left:7vw;
    padding-bottom:2vw;
}
#d10th{
    width:82vw;
    height:auto;
    margin:2vw 0vw 10vw 3vw;
    border:0px red;
	border-style:solid;
    background-color: #f5f6fa;
    border-radius: 2vw;
    padding-top:1vw;
    padding-left:7vw;
    padding-bottom:2vw;
}
#d11th{
    width:60vw;
    height:7vw;
    margin:2vw 0vw 10vw 18vw;
    border:0px red;
	border-style:solid;
    background-color: #f5f6fa;
    border-radius: 2vw;
 
}
#create{
    width:100%;
    height:100%;
    background-color:yellow;
    color:#000;
    font-family:verdana;
    font-size:4vw;
    font-weight:bold;
    border-radius:2vw;
    transition:0.4s ease;
}
#create:hover{
   
    background-color:#000;
    color:yellow;

    font-size:4.5vw;

   
}


}
</style>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<div id="max">
<div id="user0">
<label id="label0">Now ,Send This Screenshot To </label>
<label id="label0"><?php echo $_SESSION["owner"]?></label>
</div>
<div id="user">
<label id="label1">Answered By </label>
<label id="label2"><?php echo $_SESSION["user"]?></label>
</div>


<div id="d1st">
    <label id="labelques">1. Any nickname for </label>
    <label id="labelname"><?php echo $_SESSION["owner"];?> ?</label><br>
    <label id="labelansw">Ans : </label>
    <label id="labelans"><?php echo $_SESSION["ans1"];?></label>
</div>
<div id="d2nd">
    <label id="labelques">2. which color suits on </label>
    <label id="labelname"><?php echo $_SESSION["owner"]; ?> ?</label><br>
    <label id="labelansw">Ans : </label>
<label id="labelans"><?php echo $_SESSION["ans2"];?></label>
</div>
<div id="d3rd">
    <label id="labelques">3. Any thing you like in </label>
    <label id="labelname"><?php echo $_SESSION["owner"];?> ?</label><br>
	<label id="labelansw">Ans : </label>
	<label id="labelans"><?php echo $_SESSION["ans3"];?></label>
</div>
<div id="d4th">
    <label id="labelques">4. One thing you dislike in </label>
    <label id="labelname"><?php echo $_SESSION["owner"];?> ?</label><br>
    <label id="labelansw">Ans : </label>
    <label id="labelans"><?php echo $_SESSION["ans4"];?></label>
</div>
<div id="d5th">
    <label id="labelques">5. Similarity in you and </label>
    <label id="labelname"><?php echo $_SESSION["owner"];?> ?</label><br>
    <label id="labelansw">Ans : </label>
    <label id="labelans"><?php echo $_SESSION["ans5"];?></label>
</div>
<div id="d6th">
    <label id="labelques">6. Sweet memory with </label>
    <label id="labelname"><?php echo $_SESSION["owner"];?> ?</label><br>
    <label id="labelansw">Ans : </label>
    <label id="labelans"><?php echo $_SESSION["ans6"];?></label>
</div>
<div id="d7th">
    <label id="labelques">7. your relationship with </label>
    <label id="labelname"><?php echo $_SESSION["owner"];?> ? </label><br>
    <label id="labelansw">Ans : </label>
    <label id="labelans"><?php echo $_SESSION["ans7"];?></label>
</div>
<div id="d8th">
    <label id="labelques">8. Any song for </label>
    <label id="labelname"><?php echo $_SESSION["owner"];?> ?</label><br>
    <label id="labelansw">Ans : </label>
    <label id="labelans"><?php echo $_SESSION["ans8"];?></label>
</div>
<div id="d9th">
    <label id="labelques">9. Short note on </label>
    <label id="labelname"><?php echo $_SESSION["owner"];?> ?</label><br>
	<label id="labelansw">Ans : </label>
    <label id="labelans"><?php echo $_SESSION["ans9"];?></label>
</div>
<div id="d10th">
    <label id="labelques">10. Can i post your answer in my story or post </label>
    <label id="labelname"> ?</label><br>
    <label id="labelansw">Ans : </label>
    <label id="labelans"><?php echo $_SESSION["ans10"];?></label>
</div>

<div id="d11th">
   <a href="index.php"><button id="create">CREATE YOUR BOOK</button>
</div>
</div>
</body>
</html>


<php?
session_unset();
?>

