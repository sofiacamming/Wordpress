var searchicon = document.getElementById("searchicon");
var searchtop = document.getElementById("searchtop");

function search() {
	if (searchtop.style.display == "none") {
		searchtop.style.display = "block";
		searchtop.getElementsByTagName("input")[0].focus();
	}
	else {
		searchtop.style.display = "none";
	}
}

window.onload=function(){
var form = document.getElementById('searchform');
form.onsubmit=function( e ){
	//e.stop();
	e.preventDefault();
	jQuery.ajax('http://localhost/wordpress?s='+document.getElementById('searchinput').value,{
		complete: function( res ) {

			var placeholder=document.getElementById('result');
			placeholder.innerHTML="";
			placeholder.innerHTML=res.responseText;
		}
	});
}
}