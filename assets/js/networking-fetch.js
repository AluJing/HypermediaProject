$(document).ready(function(){
        $.get("networkingFetch.php", 
                { categoria: "networking" }, function(data, status){
    
		document.getElementById("devicesElement").innerHTML = data;
        });
	});