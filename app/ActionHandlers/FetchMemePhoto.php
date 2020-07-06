<?php

namespace Geezus\ActionHandlers;

use Geezus\ActionHandler;
use Goutte\Client;

class FetchMemePhoto extends ActionHandler {

    function fulfill(){

        $session = $this->geezus->getSession();
        $context = $this->geezus->getContext('lookupmeme-followup');

        $meme_name = $context->getParameters()['memeName'];


        $client = new Client;
        $crawler = $client->request('GET', "https://knowyourmeme.com/search?q=".urlencode($meme_name),
            ["q"=>$meme_name]
        );
        $first_result_link = $crawler->filter("#entries table.entry_list td a")->link();
        $crawler = $client->click($first_result_link);
        $img_src = $crawler->filter('meta[property="og:image"]')->eq(0)->attr('content');

        $image = \Dialogflow\RichMessage\Image::create($img_src);
        $image->setFallbackText('Picture of '.$meme_name);

        $this->geezus->reply($image);
    }

}