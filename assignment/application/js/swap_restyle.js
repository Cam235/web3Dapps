// JavaScript Document
var counter = 0;
$(document).ready(function() {
	
	selectPage();
	
});

function selectPage() {

	$('#home').show();
	$('#about').hide();
	$('#models').hide();
	$('#interaction').hide();
	$('#montanaDescription').hide();
	$('#limonDescription').hide(); 
	$('#fresaDescription').hide(); 


	$('#navHome').click(function(){
		$('#home').show();
		$('#about').hide();
		$('#models').hide();
		$('#interaction').hide();
		$('#montanaDescription').hide();
		$('#limonDescription').hide(); 
		$('#fresaDescription').hide(); 	  
	});

	$('#navAbout').click(function(){
		$('#home').hide();
		$('#about').show();
		$('#models').hide();
		$('#interaction').hide();
		$('#montanaDescription').hide();
		$('#limonDescription').hide(); 
		$('#fresaDescription').hide(); 	  
	});

	$('#navModels').click(function(){
		$('#home').hide();
		$('#about').hide();
		$('#models').show();
		$('#interaction').show(); 
		$('#montanaDescription').show();
		$('#limonDescription').hide(); 
		$('#fresaDescription').hide();
		$("#x3dModelTitle_montana").show();
		$("#x3dModelTitle_limon").hide();
		$("#x3dModelTitle_fresa").hide();
		$("#x3dCreationMethod_montana").show();
		$("#x3dCreationMethod_limon").hide();
		$("#x3dCreationMethod_fresa").hide(); 
	});
}


function montanaDescription() {
	$("button").click(function(){
		
		$("#montanaDescription").show();
        $("#limonDescription").hide();
		$("#fresaDescription").hide();
		
		$("#x3dModelTitle_montana").show();
		$("#x3dModelTitle_limon").hide();
		$("#x3dModelTitle_fresa").hide();

		$("#x3dCreationMethod_montana").show();
		$("#x3dCreationMethod_limon").hide();
		$("#x3dCreationMethod_fresa").hide();

    }); 
}

function limonDescription() {
    $("button").click(function(){

        $("#montanaDescription").hide();
        $("#limonDescription").show();
		$("#fresaDescription").hide();
		
		$("#x3dModelTitle_montana").hide();
		$("#x3dModelTitle_limon").show();
		$("#x3dModelTitle_fresa").hide();

		$("#x3dCreationMethod_montana").hide();
		$("#x3dCreationMethod_limon").show();
		$("#x3dCreationMethod_fresa").hide();
    }); 
}

function fresaDescription() {
    $("button").click(function(){

        $("#montanaDescription").hide();
        $("#limonDescription").hide();
		$("#fresaDescription").show();
		
		$("#x3dModelTitle_montana").hide();
		$("#x3dModelTitle_limon").hide();
		$("#x3dModelTitle_fresa").show();

		$("#x3dCreationMethod_montana").hide();
		$("#x3dCreationMethod_limon").hide();
		$("#x3dCreationMethod_fresa").show();
    }); 
}

function changeLook() {
	counter += 1;
	switch (counter) {
		case 1:
			document.getElementById('bodyColor').style.backgroundColor = 'lightblue';
			document.getElementById('headerColor').style.backgroundColor = '#FF0000';
			document.getElementById('footerColor').style.backgroundColor = '#FF9900';
			break;
		case 2:
			document.getElementById('bodyColor').style.backgroundColor = '#FF6600';
			document.getElementById('headerClor').style.backgroundColor = '#FF9999';
			document.getElementById('footerColor').style.backgroundColor = '#996699';
			break;
		case 3:
			document.getElementById('bodyColor').style.backgroundColor = 'coral';
			document.getElementById('headerColor').style.backgroundColor = 'darkcyan';
			document.getElementById('footerColor').style.backgroundColor = 'darksalmom';
			break;
		case 4:
			counter = 0;
			document.getElementById('bodyColor').style.backgroundColor = 'lightgrey';
			document.getElementById('headerColor').style.backgroundColor = 'chocolate';
			document.getElementById('footerColor').style.backgroundColor = 'dimgrey';
			break;
	}
}

function changeBack() {
	document.getElementById('bodyColor').style.backgroundColor = '#FFFFFF';
	document.getElementById('headerColor').style.backgroundColor = 'rgba(175,0,0,1)';
	document.getElementById('footerColor').style.backgroundColor = 'rgba(175,0,0,1)';
}

