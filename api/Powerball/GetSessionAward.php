<?php
session_start();
$auth_token = $_SESSION["auth"];
$gameSessionID = $_GET['gameSessionID'];
//$author = $_COOKIE['auth1'];
//$auth_token = $_SERVER["HTTP_AUTHORIZATION"];

$response = GetSessionAward($gameSessionID,$auth_token);
$json_data = json_decode($response, 1);
echo $response;

function GetSessionAward($gameSessionID,$auth_token) {
$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "https://powerball.g88.vin/api/Powerball/GetSessionAward?gameSessionID=$gameSessionID",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'GET',
  CURLOPT_HTTPHEADER => array(
     "Authorization: Bearer $auth_token",
     "authority: powerball.g88.vin",
   
  ),
));

$response = curl_exec($curl);
curl_close($curl);
return $response;

}
