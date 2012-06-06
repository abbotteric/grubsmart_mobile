<?php
$longitude = $_GET['lon'];
$latitude = $_GET['lat'];

echo '{"restaraunts":[
{"name":"Priya","distance":"0.5","deal":"Free Chai Tea With Buffet Purchase","dealClass":"freeDrink","minDiners":"2","price":"1","cuisine":"Indian","startDate":"06 06, 2012 11:00:00","endDate":"06 06, 2012 15:00:00"},
{"name":"Great American Burger","distance":"0.9","deal":"Free Fries For Group Of 5 Or More","dealClass":"freeApp","minDiners":"5","price":"1","cuisine":"American","startDate":"06 06, 2012 11:00:00","endDate":"06 06, 2012 15:00:00"},
{"name":"Round Table Pizza","distance":"2","deal":"Free Soda With Purchase of a Lunch Buffet","dealClass":"freeDrink","minDiners":"1","price":"1","cuisine":"American","startDate":"06 06, 2012 11:00:00","endDate":"06 06, 2012 15:00:00"},
{"name":"Toomies Thai","distance":"5","deal":"10% off","dealClass":"discount","minDiners":"5","price":"2","cuisine":"Thai","startDate":"06 06, 2012 11:00:00","endDate":"06 06, 2012 15:00:00"},
{"name":"House of Prime Rib","distance":"4.8","deal":"Free cocktail with purchase of $50 or more","dealClass":"freeDrink","minDiners":"1","price":"3","cuisine":"Fine Dining","startDate":"06 06, 2012 11:00:00","endDate":"06 06, 2012 15:00:00"},
{"name":"Spiessekamer","distance":"3.2","deal":"5% off lunch","dealClass":"discount","minDiners":"1","price":"2","cuisine":"German","startDate":"06 06, 2012 11:00:00","endDate":"06 06, 2012 14:00:00"}]}';

?>
