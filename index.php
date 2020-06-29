<?php
error_reporting(0);
?>
<html>
<head>
<title>Book by Sttar Vipin</title>
<link rel="stylesheet" href="animate.css">
<style>
body{
        background: linear-gradient(0deg, rgba(3,0,185,1) 0%, rgba(103,100,253,1) 96%);
background-attachment:fixed;
}
#max{
        width:100%;
        height:100%;
}
#head{
        width:90vw;
        height:5vw;
        border:0px red;
        border-style:solid;
        margin:0vw auto;
        text-align:center;
        font-size:4vw;
        font-family:cursive;
        color:yellow;
}
#imghead{
        width:90vw;
        height:30vw;
        border:0px red;
        border-style:solid;
        margin:0vw auto;
    
}
#img{
        margin:-12vw auto;
        width:80vw;
        height:50vw;
}
#btndiv{
        width:60vw;
        height:4vw;
        border:0px red;
        border-style:solid;
        margin:2vw auto;
        text-align:center;
        font-size:4vw;
        font-family:cursive;
        color:yellow;
}
#btn{
        width:100%;
        height:100%;
        background-color:yellow;
        color:black;
        font-size:3vw;
        transition:0.4s ease;
}
#btn:hover{
        width:100%;
        height:100%;
        background-color:black;
        color:yellow;
        font-size:3.3vw;
        font-weight:bold;
}
#foot{
        width:40vw;
        height:2vw;
        border:0px red;
        border-style:solid;
        margin:0.2vw auto;
        text-align:center;
        font-size:1.5vw;
        font-family:cursive;
        color:#fff;
}








@media screen and (max-width:800px){
body{
        background: linear-gradient(0deg, rgba(3,0,185,1) 0%, rgba(103,100,253,1) 96%);
background-attachment:fixed;
}
#max{
        width:100%;
        height:100%;
}
#head{
        width:90vw;
        height:auto;
        border:0px red;
        border-style:solid;
        margin:18vw auto;
        text-align:center;
        font-size:6vw;
        font-family:verdana;
        font-weigt:bold;
        color:yellow;
}
#imghead{
        width:90vw;
        height:30vw;
        border:0px red;
        border-style:solid;
        margin:0vw auto;
        color:yellow;
}
#img{
        margin:-33vw auto;
        width:95vw;
        height:75vw;
}
#btndiv{
        width:90vw;
        height:8vw;
        border:0px red;
        border-style:solid;
        margin:7vw auto;
        text-align:center;
        font-size:5vw;
        font-family:cursive;
        color:yellow;
}
#btn{
        width:100%;
        height:100%;
        background-color:yellow;
        color:black;
        font-size:5vw;
        transition:0.4s ease;
}
#btn:hover{
        width:100%;
        height:100%;
        background-color:black;
        color:yellow;
        font-size:5.3vw;
        font-weight:bold;
}
#foot{
        width:60vw;
        height:4vw;
        border:0px red;
        border-style:solid;
        margin:0.2vw auto;
        text-align:center;
        font-size:3.5vw;
        font-family:verdana;
        color:#fff;
}
}
</style>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<div id="max">
<div id="head">
Start knowing what people thinks about you
</div>
<div id="imghead">
<img src="avtaar.png" alt="sttarvipin" id="img">
</div>
<div id="btndiv">
<a href="bookownername.php"><button id="btn" class="wow animate__heartBeat">Let's Begin</button></a>
</div>
<div id="foot">
A question book by sttar vipin rao
</div>

</div>
<script src="wow.min.js"></script>
<script> new wow().init();</script>
</body>
</html>