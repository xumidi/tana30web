var menuclosed=true;
function openclosemenu(){
	if(menuclosed){
		document.getElementById("sidemenu").style.left="0";
		document.getElementById("headmenubutton").classList.add('sidemenuclosebutton');
		menuclosed=false;
	}else{
		document.getElementById("sidemenu").style.left="100%";
		document.getElementById("headmenubutton").classList.remove('sidemenuclosebutton');
		menuclosed=true;
	}
}