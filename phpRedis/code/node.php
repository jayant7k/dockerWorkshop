<?php
echo 'getting data from node service<br/>'.PHP_EOL;

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'http://node:8080');
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
curl_setopt($ch, CURLOPT_TIMEOUT, 30);

$data = curl_exec($ch);
echo $data.PHP_EOL;

?>
