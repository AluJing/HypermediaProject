$.urlParam = function(name){
	var results = new RegExp('[\?&]' + name + '=([^&#]*)').exec(window.location.href);
	return results[1] || 0;
}
	$(document).ready(function(){
	var res = $.urlParam('id');
   
	$("#deviceDetails").load("deviceDetails.php?id=" + res);
     
	});