var restarauntData;

function loadDealData(longitude, latitude, containerName) {
	$.get("http://24.7.2.229:8888/api/fetch.php", function(data){
		var dataObj = eval('('+data+')');
		restarauntData = dataObj;	
		for (var i = 0; i < dataObj.restaraunts.length; i++) {
			var tmpRestaraunt = dataObj.restaraunts[i];
			var imgFile = '';
			if (tmpRestaraunt.dealClass == 'freeApp') {
				imgFile = 'images/fastfood.png';
			}
			else {
				imgFile = 'images/dessert.png';
			}
			$('#'+containerName).append('<li><a href="#"><img class="dealimg" src="'+imgFile+'"/><h2 class="dealheader">'+tmpRestaraunt.name+' - '+tmpRestaraunt.distance+'mi</h2><p class="dealdesc">'+tmpRestaraunt.deal+'<img src="'+imgFile+'" class="tinyimg"/></p>Minimum Diners: '+tmpRestaraunt.minDiners+'</a></li>');
		} //close for stmt
		$('#'+containerName).listview("refresh");
	} //close the data handler
	); //close get function
}

//function sortDataBy(method){


