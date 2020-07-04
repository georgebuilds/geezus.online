<?php


namespace Geezus;


use Dialogflow\WebhookClient;

abstract class ActionHandler {

    protected $geezus;

    protected $action;
    protected $query;
    protected $parameters;
    protected $session;
    protected $contexts;
    protected $language;
    protected $source;

    function __construct(WebhookClient $geezus) {

        $this->geezus = $geezus;

        $this->action   = $geezus->getAction();;
        $this->query    = $geezus->getQuery();
        $this->parameters = $geezus->getParameters();
        $this->session  = $geezus->getSession();
        $this->contexts = $geezus->getContexts();
        $this->source   = $geezus->getRequestSource();


        header('Content-type: application/json');
    }

    function __destruct() {
        echo json_encode($this->geezus->render());
    }

}