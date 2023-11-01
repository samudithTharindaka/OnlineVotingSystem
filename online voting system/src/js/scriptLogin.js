function checkPassword(){
	value1=getElementById("pwd").value;
	value2=getElementById("rpwd").value;
	
	if(value1!=value2)
		alert("Password Mismatch");
	else
		alert("Success");
	return true
}

function enableButton(){
	if(document.getElementById("cbox").checked)
		document.getElementById("submitbtn").disabled=false;
	else
		document.getElementById("submitbtn").disabled=true;
	}