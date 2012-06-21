<?php
$number = $_POST['phone'];

$url = 'http://api.yelp.com/phone_search?phone=1'.$number.'&ywsid=H6gg1HqpWED0HkyvO-2RfQ&output=php';

$data = file_get_contents($url);

$array = unserialize($data);

//print_r($array);
echo($array[businesses][0][name]);
?>
