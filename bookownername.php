<html>
<head>
<script src="javascript.js"></script>
<style>
body{
background: linear-gradient(0deg, rgba(3,0,185,1) 0%, rgba(103,100,253,1) 96%);
background-attachment:fixed;
}
#mymax{
width:100%;
height:100%;
}
#div1{
max-width:52%;
margin:100px 330px;
border:0px pink;
border-style:solid;
}
#div2{
width:70%;
height:7%;
margin:2px 180px;
border:3px #fff;
border-style:solid;
}
#text1{
font-family:"Dosis", cursive;
font-size:6vw;
font-weight:bold;
color:#fff;
text-shadow:4px 3px black;
}
#text2{
font-family:cursive;
font-size:6vw;
font-weight:bold;
color:yellow;
text-shadow:4px 3px black;
}

.inputname{
width:100%;
height:100%;
font-size:2vw;
text-align:center;
  box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24), 0 17px 50px 0 rgba(0,0,0,0.19);
}
#div3{
width:51%;
height:4.5%;
margin:70px 330px;
border:2px yellow;
border-style:solid;
position:relative;
border-radius:40px;
}
#btn1{
max-height:100%;
width:100%;
background-color:yellow;
text-align:center;
display:inline-block;
transition:0.5s ease;
font-size:1.5vw;
  box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24), 0 17px 50px 0 rgba(0,0,0,0.19);
border-radius:40px;
}
#btn1:hover{
background-color:#000;
color:yellow;
  box-shadow: 0 12px 16px 0 rgba(0,0,0,0.9), 0 17px 50px 0 rgba(0.4,0.4,0.3,0.9);

}


@media screen and (max-width:1200px){


#mymax{
width:100%;
height:100%;
}
#text1,#text2{
font-family:arial;
font-size:6vw;
word-spacing:3px;

}
#div1{
width:100%;
margin:100px 10px 30px 98px;
border:0px red;
border-style:solid;
}

#div2{
margin: 10px auto;
width:70%;
height:30px;
border:0px #fff;
border-style:solid;
}
#div3{
margin: 20px auto;
width:50%;
height:30px;
border:0px yellow;
border-style:solid;
}
.inputname{
text-align:center;
font-size:4vw;
}
#btn1{
width:100%;
height:30px;
text-align:center;
display:inline-block;
font-size:2vw;
}
}</style>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<div id="mymax">
<div id="div1">
<label id="text1">Enter Your </label>
<label id="text2">Name</label>
</div>
<form action="copyurl.php" method="get" onsubmit=" return validform();" name="myanswerform" required>

<div id="div2">

<input type="text" class="inputname"  pattern=".{2,16}" name="myanswer" title="character limit should be 2 to 16" placeholder="type here...." id="usernameinput" >
</div>
<div id="div3"> 
<input type="submit" id="btn1">
</div>
</form>




</div>
</body>
</html>

