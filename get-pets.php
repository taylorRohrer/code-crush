<?php

$location = isset($_GET['location']) ?  $_GET['location'] : '68175';
$curl = curl_init();

curl_setopt_array($curl, array(
    CURLOPT_URL => "https://api.petfinder.com/pet.find?format=json&key=46d31956efaf8aea44dc0567a617a32d&location=".$location,
    CURLOPT_RETURNTRANSFER => 1,
    CURLOPT_USERAGENT => $_SERVER['HTTP_USER_AGENT'],
    CURLOPT_HTTPHEADER => array(
        'Content-Type:  application/json;charset=UTF-8',
        'Allow-Access-Control-Origin: *'
    ),
    CURLOPT_PROXY => 'proxy',
    CURLOPT_PROXYPORT => '8020'
));

$response = curl_exec($curl);
print_r(curl_getinfo($curl));

echo($response);

$err = curl_error($curl);

curl_close($curl);

if ($err) {
    echo "cURL Error #:" . $err;
} else {
    echo $response;
}
