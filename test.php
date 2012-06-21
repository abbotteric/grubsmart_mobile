<?php
$street = $_GET['street'];
$city = $_GET['city'];
$state = $_GET['state'];

$params = $street.','.$city.','.$state;
$params = urlencode($params);

$url = 'http://where.yahooapis.com/geocode?q='.$params;

$xml = simplexml_load_file($url);
?>
<html>
<head>
</head>
<body>

<?
echo 'Latitude: '.$xml->Result->latitude.'</br>';
echo 'Longitude: '.$xml->Result->longitude.'</br>';
?>

</body>
</html>
