

function validform()
{
	var valid=document.forms["myanswerform"]["myanswer"].value;
if(valid==""){
	alert("answer must be filled");
    return false;  }
    
}


