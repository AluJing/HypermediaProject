$(document).ready(function(){
        $.get("networkingFetch.php",  function(data, status){
    
		document.getElementById("devicesElement").innerHTML = data;
        });
	});