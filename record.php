<?php
/*$name=$_POST['rName'];
$street=$_POST['rStreet'];
$city=$_POST['rCity'];
$deal=$_POST['rDeal'];
$open = $_POST['rOpen'];
$close = $_POST['rClose'];*/

include 'simple_html_dom.php';

$phone = $_POST['phone'];
$deal = $_POST['deal'];
$url = 'http://api.yelp.com/phone_search?phone=1'.$phone.'&ywsid=H6gg1HqpWED0HkyvO-2RfQ&output=php';

$data = file_get_contents($url);
$array = unserialize($data);

print $url."\n";
print_r($array);

$address = $array[businesses][0][address1].' '.$array[businesses][0][address2].' '.$array[businesses][0][address3];
$lat = $array[businesses][0][latitude];
$lon = $array[businesses][0][longitude];
$name = $array[businesses][0][name];
$city = $array[businesses][0][city];
$state = $array[businesses][0][state];
$scrapeurl = $array[businesses][0][url];

print $name."\n";
print $scrapeurl."\n";

$html = file_get_html($scrapeurl);

$arr = $html->find('.hours');
$hours = '';
foreach($arr as $item)
{
	$hours = $hours.':'.$item->plaintext;
}

$f = fopen('sample.txt','a');
fwrite($f, $name.','.$hours.','.$address.','.$city.','.$state.','.$lon.','.$lat.','.$deal."\n");
fclose($f);
?>
