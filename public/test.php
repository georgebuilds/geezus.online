<?php

require __DIR__."/../start.php";

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


$symbol = "XMR";
header("Content-Type: text/json");
$config = include __DIR__."/../configuration.php";
$key = $config['coin-api']['key'];
$curl = curl_init("https://rest.coinapi.io/v1/exchangerate/XMR/USD ");
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($curl, CURLOPT_HTTPHEADER, [
    "X-CoinAPI-Key: $key"
]);
$response = curl_exec($curl);

var_dump($response);
//
//if(!curl_errno($curl)){
//    $decoded_response = json_decode($response);
//    if(isset($decoded_response[0]->symbol_id)){
//        return [$decoded_response[0]->symbol_id => $decoded_response[0]->ask_price];
//    }
//}


