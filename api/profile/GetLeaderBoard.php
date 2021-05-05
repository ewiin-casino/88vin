<?php
session_start();
$auth_token = $_SESSION["auth"];
$gameId = $_GET['gameId'];
$roomType = $_GET['roomType'];
$currencyID = $_GET['currencyID'];
//$author = $_COOKIE['auth1'];
//$auth_token = $_SERVER["HTTP_AUTHORIZATION"];
$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "https://profile.g88.vin/api/profile/GetLeaderBoard?gameId=$gameId&roomType=$roomType&currencyID=$currencyID",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'GET',
  CURLOPT_HTTPHEADER => array(
    "Authorization: Bearer $auth_token",
    "authority: profile.g88.vin",
    
  ),
));

$response = curl_exec($curl);

curl_close($curl);
echo $response;
