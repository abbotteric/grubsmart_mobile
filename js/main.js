function loadDealData(longitude, latitude, containerName) {
	/*$.get("http://24.7.2.229:8888/json.html", function(data){
		var dataObj = eval('('+data+')');
		for (var i = 0; i < dataObj.restaraunts.length; i++) {
			var tmpRestaraunt = dataObj.restaraunts[i];
			var imgFile = ''';
			if (tmpRestaraunt.dealClass == 'freeApp') {
				imgFile = 'images/fastfood.svg';
			}
			else {
				imgFile = 'images/dessert.svg';
			}
			$('#'+containerName).append('<li><a href="#"><img class="dealimg" src="'+imgFile+'"/>'+tmpRestaraunt.name+'-'+tmpRestaraunt.distance+'<p class="dealdesc">'+tmpRestaraunt.deal+'</p>Minimum Diners: '+tmpRestaraunt.minDiners+'</a></li>');
		} //close for stmt
		$('#'+containerName).listview("refresh");
	} //close the data handler
	); //close get function*/
	$("h1").text("hello");
	$.get("http://www.google.com", function(data){alert(data)});
}

function Hello(string) {
	alert(string);
}