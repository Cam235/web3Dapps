// JavaScript Document
function getXMLHttp() {
	var xmlHttp
	try {
		xmlHttp = new XMLHttpRequest ();
	} catch (e) {
		try {
			xmlHttp = new ActiveXObject("Msxml2.XMLHTTP");
		} catch (e) {
			try {
				xmlHttp = new ActiveXObject("Microsoft.XMLHTTP");
			} catch (e) {
				return false;
			}
		}
	}
	return xmlHttp;
}


var xmlHttp = getXMLHttp();

var htmlCode = "";

var response;

$(document).ready(function() {
	
	var send = "../application/view/hook.php";
	console.log(send);
	
	xmlHttp.open("GET", send, true);
	
	xmlHttp.send(null);
	
	xmlHttp.onreadystatechange = function() {
		if(xmlHttp.readyState == 4) {
			
			response = xmlHttp.responseText.split("~");
			
			for (var i=0;i<response.length;i++) {
				
				htmlCode += '<a href="'+ response[i] + ' " data-fancybox data-caption="My X3D model render" > ';
				htmlCode += '<img class="card-img-top img-thumbnail" src="' + response[i] + '"/>';
				htmlCode += '</a>';	
				console.log(response[i]);		
			}
			
			document.getElementById('gallery').innerHTML = htmlCode;
		}
	}
});

