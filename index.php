<?php

require __DIR__.'/vendor/autoload.php';

use Symfony\Component\Panther\DomCrawler\Crawler;

$client = \Symfony\Component\Panther\Client::createChromeClient();
$crawler = $client->request('GET', 'https://mispichos.com/buscar?animal=7&condicion=1');

$crawler->filter('.switch-list-item > label')
    ->each( function( Crawler $element ) {
        echo $element->html().PHP_EOL;
    });