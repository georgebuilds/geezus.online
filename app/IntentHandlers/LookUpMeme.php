<?php


namespace Geezus\IntentHandlers;


use Geezus\IntentHandler;
use Geezus\Interfaces\HandlerInterface;
use Goutte\Client;

class LookUpMeme extends IntentHandler implements HandlerInterface {


    function fulfill() : void {

        $meme_name = is_array($this->parameters['memeName']) ? implode(" ", $this->parameters['memeName']) : $this->parameters['memeName'];

        $client = new Client;
        $crawler = $client->request('GET', "https://knowyourmeme.com/search?q=".urlencode($meme_name),
            ["q"=>$meme_name]
        );
        $first_result_link = $crawler->filter("#entries table.entry_list td a")->link();
        $crawler = $client->click($first_result_link);
        $crawler->filter("section.bodycopy p")->each(function ($node, $i){

            $text = $node->text();
            if(($i<=2) && (substr($text,0,1)!="[")) $this->geezus->reply($text);

        });

    }


}