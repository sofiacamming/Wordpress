var searchicon = document.getElementById("searchicon");
var searchtop = document.getElementById("searchtop");

function search() {
	if (searchtop.style.display == "none") {
		searchtop.style.display = "block";
	}
	else {
		searchtop.style.display = "none";
	}
}


function ajaxRequest(url, callback) {
    var XHR = null;
    
    if (XMLHttpRequest) {
        XHR = new XMLHttpRequest();
    } 

    else {
        XHR = new ActiveXObject("Microsoft.XMLHTTP"); 
    }

    XHR.onreadystatechange = function () {
        if (XHR.readyState == 4 || XHR.readyState == "complete") {
            if (XHR.status == 200) {
                callback(XHR); 
            } 

            else {
                alert("fel på servern");
            }
            
        }
    }

    XHR.open("GET", url, true);
    XHR.send(null);
}