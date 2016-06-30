$(document).ready(function(){
        $.get("tvsmartlivingFetch.php", 
                { categoria: "smartliving" }, function(data, status){
    
		document.getElementById("devicesElement").innerHTML = data;
        });
	});