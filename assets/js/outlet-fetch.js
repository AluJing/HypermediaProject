$(document).ready(function(){
        $.get("outletFetch.php",  function(data, status){
    
		document.getElementById("devicesElement").innerHTML = data;
        });
	});