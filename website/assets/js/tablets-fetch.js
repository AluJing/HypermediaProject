$(document).ready(function(){
        $.get("tabletFetch.php", 
                 function(data, status){
    
		document.getElementById("devicesElement").innerHTML = data;
        });
	});