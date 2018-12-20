<?php
$access_token = 'zIz2bsXdEmFUfM5q8zxX/Dcs8UZVujv7JFShA2YFnBVTQv7Hh5vAS2dPyQcyq/AhRF0MO9RA8lZH+cNFM3+xrUx9rmJWzt9bPiLhBrWOjnGknHr82Whg0qOtQGcBBj5tA0MhtPhNB8I2f5mRJbuKpwdB04t89/1O/w1cDnyilFU=';


$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
