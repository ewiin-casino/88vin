<?php
session_start();
$auth_token = $_SESSION["auth"];
$raw_data = file_get_contents("php://input");
$json_data = json_decode($raw_data, 1);

$CurrencyID = $json_data['CurrencyID'];
$DeviceID = $json_data['DeviceID'];
//$author = $_COOKIE['auth1'];
//$auth_token = $_SERVER["HTTP_AUTHORIZATION"];

$result = Spin($CurrencyID, $DeviceID, $auth_token);
$json_data = json_decode($result, 1);
echo $result;

function Spin($CurrencyID, $DeviceID, $auth_token) {
    $url = "https://gameapi.g88.vin/api/luckywheel/Spin";
    $ch = curl_init();
    curl_setopt($ch,CURLOPT_URL,$url);
    curl_setopt($ch,CURLOPT_POST,true);
    curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
    curl_setopt($ch,CURLOPT_HEADER,0);
    $data = "{\"CurrencyID\":$CurrencyID,\"DeviceID\":\"$DeviceID\"}";
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
    curl_setopt($ch,CURLOPT_HTTPHEADER,["authority: gameapi.g88.vin","authorization: Bearer $auth_token","User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/69.0.3497.92 Safari/537.36","Content-Type: application/json","Accept: application/json","Referer: http://m88.vin/","Accept-Language: vi,vi-VN;q=0.9,fr-FR;q=0.8,fr;q=0.7,und;q=0.6,de;q=0.5,pl;q=0.4"]);
    $result = curl_exec($ch);
    return $result;
}
?>