<?php
require  'vendor\autoload.php';

//Guzzle: realiza requisicoes http
use GuzzleHttp\Client;
//domcrowler: ler o html

use Symfony\Component\DomCrawler\Crawler;

//guzzle
$client = new Client();
$resposta = $client->request('GET', 'https://www.alura.com.br/cursos-online-programacao/php');
$html = $resposta->getBody();

//domcrowler
$crawler = new Crawler();
//$crawler->addHtmlContent($html);
$cursos = $crawler->filter('span.card-curso__nome');

foreach ($cursos as $curso){
    echo $curso->textContent . PHP_EOL;
}