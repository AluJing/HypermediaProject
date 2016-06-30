$(document).ready(function(){
        $.get("smartphoneFetch.php", function(data, status){
    
		document.getElementById("devicesElement").innerHTML = data;
        });
	});