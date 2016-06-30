$(document).ready(function(){
        $.get("smartphoneFetch.php", 
                { categoria: "smartphones" }, function(data, status){
    
		document.getElementById("devicesElement").innerHTML = data;
        });
	});