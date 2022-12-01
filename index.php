<?php

include "vendor/autoload.php";
// https://www.youtube.com/watch?v=1s3sopeU0YU
// https://symfony.ru/doc/current/components/dom_crawler.html
// php -S localhost:8000
use Symfony\Component\DomCrawler\Crawler;

$html = file_get_contents('index.html');
$crawler = new Crawler($html);

$crawler=$crawler
    ->filter('p')
    // ->reduce(function(Crawler $node, $i){
    // echo $i, "<hr/>";
    // echo $node->marches('p.test') ? '+':'-';
    // return str_starts_with($node->text(), 'Lorem')})
    ->eq(2);
    
    
    

foreach ($crawler as $domElement){
    // echo $domElement ->nodeName, "<hr/>";
    echo $domElement ->textContent, "<hr/>";


}