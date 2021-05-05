<?php
session_start();
$auth_token = $_SESSION["auth"];
$currencyID = $_GET['currencyID'];
$betType = $_GET['betType'];
$TopCount = $_GET['TopCount'];
$r = $_GET['r'];

//$auth_token = $_SERVER["HTTP_AUTHORIZATION"];

$response = GetAccountHistory($currencyID,$betType,$TopCount,$auth_token,$r);
$json_data = json_decode($response, 1);
echo $response;

function GetAccountHistory($currencyID,$betType,$TopCount,$auth_token,$r) {
$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "https://minigame.g88.vin/api/highlow/GetAccountHistory?currencyID=$currencyID&betType=$betType&TopCount=$TopCount&r=$r",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'GET',
  CURLOPT_HTTPHEADER => array(
     "Authorization: Bearer $auth_token",
     "authority: minigame.g88.vin",
   
  ),
));

$response = curl_exec($curl);
curl_close($curl);
return $response;

}
