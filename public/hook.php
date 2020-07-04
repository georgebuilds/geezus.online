<?php

require __DIR__."/../start.php";

$geezus = new \Dialogflow\WebhookClient(json_decode(file_get_contents('php://input'),true));
$class_name = "Geezus\IntentHandlers\\".$geezus->getIntent();

if(class_exists($class_name)){
    $handler = new $class_name($geezus);
    $handler->fulfill();
} else {
    $geezus->reply("This is the Geezus Online Special Services API replying here. I have no idea what you're trying to do. Sorry.");
    header('Content-type: application/json');
    echo json_encode($geezus->render());
}

