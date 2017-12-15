<?php
$access_token = 'B7jtMlJoF3rofBHkTupgVk/NcjnQUKj8CoWALpRTkSk6w+TgUjQ0l8368vWJuZnfiNAiGtvJydkmTenxyea77RZpc5JgdGLek/gPqRZKh8Bn+p+c/Pd7Wpw12dTxkXnbGIWb3THMnAY5yhe34vq9jgdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
