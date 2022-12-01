<?php

include "../vendor/autoload.php";
// https://www.youtube.com/watch?v=1s3sopeU0YU
// https://symfony.ru/doc/current/components/dom_crawler.html
// php -S localhost:8000 -t 123/
use Symfony\Component\DomCrawler\Crawler;

$html = file_get_contents('https://ru.wikipedia.org/wiki/Википедия');
$html = file_get_contents('https://ru.wikipedia.org/wiki/Аниме');

$crawler = new Crawler($html);

$crawler=$crawler
    ->filter('.mw-page-title-main')
    // ->reduce(function(Crawler $node){

    //     return str_starts_with($node->text(),'Ви');
    // })
    ;


// $crawler->filter('.mw-page-title-main')->form();

// $crawler=$crawler->filter('.mw-page-title-main');

// $link = $crawler->link();
    
//     // mw-page-title-main
//     // ->reduce(function(Crawler $node, $i){
//     // echo $i, "<hr/>";
//     // echo $node->marches('p.test') ? '+':'-';
//     // return str_starts_with($node->text(), 'Lorem')})
//     ->eq(2);
    
    
    

foreach ($crawler as $domElement){
    // print_r($domElement);
    echo "<hr/>",$domElement ->textContent, "<hr/>";


}