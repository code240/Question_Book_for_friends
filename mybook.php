<?php
error_reporting(0);
session_start();
$own=$_GET["myanswer"];
$_SESSION["owner"] = $own;
?>
<html>
<head>
<title>slam book</title>
<script src="javascript.js"></script>
<style>
body{
background-image:linear-gradient(#5f27cd ,blue );
background-attachment:fixed;
}


#labletagh1{
padding: 10vw 15vw;
font-family:cursive;
font-size:6vw;
color: #fff;
}
#ownername{
  width:90vw;
  height:7vw;
  margin:0 auto;
  text-align:center;
  border:0px red;
  border-style:solid;
}
#labletagb{

font-size:6vw;
text-align:center;
color:yellow;
font-family:cursive;
	

}
#mydiv{
 width:100%;
 height:100%;
 margin:2% auto;
border:0px pink;
border-style:solid;	
position:relative;
}

#imgtag{
margin:-5vw 0vw 0vw 18vw;
width:53vw;
height:33vw;
opacity:1;
position:relative;
}
#labletag1 {
font-family:helvetica;
padding:2% 34%;
font-size:2vw;
font-weight:bold;
color:#55E6C1;
position:relative;
}
#labletag2 {
font-family:helvetica;
padding:0% 34%;
font-size:2vw ;
font-weight:bold;
color:#ffdd59;
}

#labletag3{
font-family:helvetica;
padding:10% 10% 20% 34%;
font-size:2vw;
font-weight:bold;
color:#32ff7e;
}

#div2{
padding:0% 41% ;

position:relative;
}

#start_btn{

text-align:center;
max-height:100%;
background-color:#EA2027;
color:#fff;
font-weight:bold;
font-size:2vw;
display:inline-block;
 transition:0.9s ease;

}
#start_btn:hover{
background-color:#ff3f34;
opacity:0.7;
}

@media screen and (max-width:1200px){

#mydiv{
              
     width:100%;
                       height:100%;
}
 

#labletagh1{
padding:3vw 13vw;
font-family:fantasy;
font-size:6vw;

}
#ownername{
  width:90vw;
  height:9vw;
  margin:0 auto;
  text-align:center;
  border:0px red;
  border-style:solid;
}
#labletagb{

font-family:times;
font-size:8vw;
}
#imgtag{
margin:1vw 6vw;
width:80vw;
height:50vw;
}
#labletag1{
padding:1% 1%;
font-size:6vw;
}
#labletag2{
padding:1% 1%;
font-size:7vw;

}
#labletag3{
padding:1vw 1vw;
font-size:5.6vw;
}
#div2{
padding:0% 33%;
}
#start_btn{
padding:1% 20%;
font-size:4vw;
}
}
</style>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<div id="mydiv">
<lable id="labletagh1">What You Think About </lable>
<div id="ownername">
<lable id="labletagb"><?php echo $_SESSION["owner"];?>? </lable>
</div>

<img src="avtaar.png" alt="logo" id="imgtag"><br>
<lable id="labletag1">Answer these 10 question for</lable><br>
<lable id="labletag2">#<?php echo $_SESSION["owner"];?></lable><br><br><br><br><br>

<lable id="labletag3">And Send Screenshot To</lable><br>
<lable id="labletag3">&#160;&#160; #<?php echo $_SESSION["owner"];?></lable><br>

<br>











<div id="div2"><a href="start.html">
<a href="whatisyourname.php"><button id="start_btn">START  </button></a>
</a></div>
</div>


</body>
</html>