<?php

$url = "https://testapi.newtondata.cz";
$data = '{"user":"test","pass":"*****","detail":1,"data":"01-1614 7133 5349 2181 2586-2","base64":1}';

$curl = curl_init($url);
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_POST, true);;
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

$headers = array();
$headers["Content-Type"] = "text/plain";

curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);

$resp = curl_exec($curl);
curl_close($curl);

echo '<h2>Example 4 - chyba</h2>';

echo '<h3>Request</h3>';
echo '<pre>' . $data . '</pre>';

echo '<h3>Response</h3>';
echo '<pre>' . $resp . '</pre>';

?>