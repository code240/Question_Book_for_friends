<?php
error_reporting(0);
$ow=$_GET["myanswer"];
$_SESSION["owner1"] = $ow;

$url="http://sttarvipinraocreation.epizy.com/mybook.php?myanswer=".$ow;
?>
<html>
<head>
<title>copy url</title>
<style>
body{
        background: linear-gradient(0deg, rgba(3,0,185,1) 0%, rgba(103,100,253,1) 96%);
background-attachment:fixed;
}
#max{
        width:100%;
        height:100%;
}
#textdiv{
        width:60vw;
        height:auto;
        text-align:center;
        font-weight:bold;
        margin:5vw 0vw 0vw 17vw;     
    font-size:3.4vw;
    text-shadow:3px 3px black;
font-family:cursive;
border:0px red;
border-style:solid; 
color:yellow;
}
#urldiv{
        width:63vw;
        height:auto;
        text-align:center;
        font-weight:bold;
        background-color:#fff;
        margin:5vw 0vw 0vw 16vw;     
        font-size:2.4vw;
        font-family:cursive;
        border:1px red;
        border-style:solid; 
        color:black;
}
#btnimgdiv{
        width:8vw;
        height:8vw;
        text-align:center;
        font-weight:bold;
        background-color:#fff;
        margin:3vw 0vw 0vw 43vw;     
        font-size:2.4vw;
        font-family:cursive;
        border:1px red;
        border-style:solid; 
        color:black;
        border-radius:2vw;
}
#imgbtn{
width:100%;
height:100%;
border-radius:2vw;
}
#btndiv{
        width:30vw;
        height:5vw;
        margin:2vw 0vw 0vw 32vw;
        border:1px red;
        border-style:solid; 

}
#btn{
        width:100%;
        height:100%;
        color:#fff;
        font-size:2vw;
        font-family:verdana;
        background-color:red;
}
#btn:hover{
      
        color:red;
        font-size:2.7vw;
        font-family:verdana;
        background-color:#fff;
        font-weight:bold;
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
#textdiv{
        width:70vw;
        height:auto;
        text-align:center;
        font-weight:bold;
        margin:15vw 0vw 10vw 15vw;     
    font-size:7vw;
    text-shadow:2px 2px black;
font-family:verdana;
border:0px red;
border-style:solid; 
color:yellow;
}
#urldiv{
        width:80vw;
        height:auto;    
        text-align:center;
        font-weight:bold;
        background-color:#fff;
        margin:5vw auto;     
        font-size:3vw;
        font-family:time;
        border:1px red;
        border-style:solid; 
        color:black;
}
#btnimgdiv{
        width:14vw;
        height:14vw;
        text-align:center;
        font-weight:bold;
        background-color:#fff;
        margin:5vw auto;     
        font-size:2.4vw;
        font-family:cursive;
        border:1px red;
        border-style:solid; 
        color:black;
        border-radius:3vw;
}
#imgbtn{
width:100%;
height:100%;
border-radius:3vw;
}
#btndiv{
        width:50vw;
        height:8vw;
        margin:6vw auto;
        border:1px red;
        border-style:solid; 

}
#btn{
        width:100%;
        height:100%;
        color:#fff;
        font-size:4vw;
        font-family:verdana;
        background-color:red;
}
#btn:hover{
      
        color:red;
        font-size:4.7vw;
        font-family:verdana;
        background-color:#fff;
        font-weight:bold;
}


}

</style>
<meta name="viewport" content="width= device-width, initial-scale=1.0">
</head>
<body>
<div id="max">
<div id="textdiv">
COPY URL AND SHARE WITH YOUR FRIENDS.
</div>
<div id="urldiv">
<?php
echo "http://sttarvipinraocreation.epizy.com/mybook.php?myanswer=".$ow;
?>
</div>
<div id="btnimgdiv">
<?php
echo "<a href='whatsapp://send?text=$url'><img src='whatsapp.jpg' alt='SttarVipinRao' id='imgbtn'/></a>";
?>
</div>
<div id="btndiv">
<?php
echo "<a href='$url'><button id='btn'>Wanna Check ? </button></a>";
?>
</div>
</div>                                     
</body>
</html>