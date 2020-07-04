<?php

namespace Geezus;

use Dialogflow\WebhookClient;


abstract class Webhook {

    static function run(){

        $config = include __DIR__."/../configuration.php";

        $bot_key = $config['bot']['key'];

        $provided_key = $_SERVER['HTTP_X_GEEZUS_KEY'];

        $geezus = new WebhookClient(json_decode(file_get_contents('php://input'),true));

        if($bot_key == $provided_key){

            $intent_handler_class = "Geezus\IntentHandlers\\".str_replace(" ", "", $geezus->getIntent());
            $action_handler_class = "Geezus\ActionHandlers\\".str_replace(" ", "", $geezus->getAction());

            if(class_exists($action_handler_class)){
                $handler = new $action_handler_class($geezus);
                $handler->fulfill();
            } elseif(class_exists($intent_handler_class)){
                $handler = new $intent_handler_class($geezus);
                $handler->fulfill();
            } else {
                $geezus->reply("This is the Geezus Online Special Services API replying here. I have no idea what you're trying to do. Sorry.");
                header('Content-type: application/json');
                echo json_encode($geezus->render());
            }
        } else {
            $geezus->reply("Your chat agent is not authenticated with this fulfillment API");
            header('Content-type: application/json');
            echo json_encode($geezus->render());
        }


    }



}