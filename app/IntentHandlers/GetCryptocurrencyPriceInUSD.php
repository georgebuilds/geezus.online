<?php


namespace Geezus\IntentHandlers;


use Geezus\IntentHandler;

class GetCryptocurrencyPriceInUSD extends IntentHandler {

    function fulfill(){


        $symbol = is_array($this->parameters['cryptocurrency']) ? implode(" ", $this->parameters['cryptocurrency']) : $this->parameters['cryptocurrency'];

        if($price_data = $this->get_currency_unit_price($symbol)){

            $this->geezus->reply("The price of 1 ".$price_data->asset_id_base." is $".number_format($price_data->rate, 2)." USD");

        } else {
            $this->geezus->reply("Sorry I just could't find data for $symbol");
        }
    }

    private function get_currency_unit_price(string $symbol = 'XTZ'){

        $config = include __DIR__."/../../configuration.php";
        $key = $config['coin-api']['key'];
        $curl = curl_init("https://rest.coinapi.io/v1/exchangerate/$symbol/USD ");
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);

        curl_setopt($curl, CURLOPT_HTTPHEADER, [
            "X-CoinAPI-Key: $key"
        ]);
        $response = curl_exec($curl);

        if($decoded_response = json_decode($response)){
            if(isset($decoded_response->asset_id_base)){
                return $decoded_response;
            }
        }

        return null;

    }

}