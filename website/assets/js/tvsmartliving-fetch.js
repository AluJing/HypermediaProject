$(document).ready(function(){
        $.get("tvsmartlivingFetch.php",  function(data, status){
    
		document.getElementById("devicesElement").innerHTML = data;
        });
	});