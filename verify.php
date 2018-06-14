<?php
$access_token = 'sSDv7p584jZ76zRoS3qc1n2VgpPeCRWlIsnYKAiYMR8xcWYPtsMjCxMQiegFygBAMiRRxoNuIUlC5I+sGTTShnJiV637tpjiiotwgvgIQKNLan+rfsTb/wl13EiLqUBmgNvv17qw6B2pnt8Xj/LxjAdB04t89/1O/w1cDnyilFU=';


$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
