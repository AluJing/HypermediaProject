$(document).ready(function(){
        $.get("tabletFetch.php", 
                { categoria: "tablet" }, function(data, status){
    
		document.getElementById("devicesElement").innerHTML = data;
        });
	});