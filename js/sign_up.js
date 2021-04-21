// JavaScript Document
function fnamec() {
    var x = document.getElementById("fname").value;
	if(x== null || x==" " || x.length<3){
		document.getElementById("fpic").src="../images/red.png";
		return 0;
	}else
		document.getElementById("fpic").src="../images/green.png";
		return 1;
}
function lnamec() {
    var x = document.getElementById("lname").value;
	if(x== null || x==" " || x.length<3){
		document.getElementById("lpic").src="../images/red.png";
		return 0;
	}else
		document.getElementById("lpic").src="../images/green.png";
		return 1;
}
function emailc() {
    var x = document.getElementById("email").value;
    var atpos = x.indexOf("@");
    var dotpos = x.lastIndexOf(".");
    if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length) {
		document.getElementById("emailpic").src="../images/red.png";
		return 0;
	}else
		document.getElementById("emailpic").src="../images/green.png";
		return 1;
}

function passwordc(){
	var x=document.getElementById("password").value;
	var strong = new Array();
     strong[0] = "Bad";
     strong[1] = "Weak";
     strong[2] = "Better";
     strong[3] = "Medium";
     strong[4] = "Strong";
	var strength=0;
	if(x.length>6)strength++;
	if((x.match(/[a-z]/)) && (x.match(/[A-Z]/))) strength++;
	if(x.match(/\d+/))strength++;
	if(x.match(/.[!,@,#,$,%,^,&,*,?,_,~,-,(,)]/))strength++;
	if(strength==0)document.getElementById("pstrength").style.color="#F00";
	if(strength==1)document.getElementById("pstrength").style.color="#F30";
	if(strength==2)document.getElementById("pstrength").style.color="#F60";
	if(strength==3)document.getElementById("pstrength").style.color="#6C6";
	if(strength==4)document.getElementById("pstrength").style.color="#0F0";
	document.getElementById("pstrength").innerHTML=strong[strength];
	
}
function rpassc() {
    var x = document.getElementById("rpassword").value;
	var y = document.getElementById("password").value;
	if(!(x.value==y.value)){
		document.getElementById("rpasspic").src="../images/red.png";
		return 0;
	}else
		document.getElementById("rpasspic").src="../images/green.png";
		return 1;
}

function goFurther(){
	if ((document.getElementById("chkAgree").checked == true) && (fnamec()) && (lnamec()) && (lnamec())){
		document.getElementById("btnSubmit").disabled = false;
	}else{
		document.getElementById("btnSubmit").disabled = true;
		alert("You must agree to our terms and fill the required fields");
	}
	}

function clearall(){
	document.getElementById("fname").value="";
	document.getElementById("email").value="";
	document.getElementById("lname").value="";
	document.getElementById("password").value="";
	document.getElementById("rpassword").value="";
	location.reload();
}
