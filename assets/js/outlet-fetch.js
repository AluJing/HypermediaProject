$(document).ready(function(){
        $.get("outletFetch.php", 
                { offerta: "1" }, function(data, status){
    
		document.getElementById("devicesElement").innerHTML = data;
        });
	});