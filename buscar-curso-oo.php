#!/usr/bin/env php
<?php

require 'vendor\autoload.php';
require 'src\Buscador.php';

use GuzzleHttp\Client;
use Senac\BuscadorDeCursos\Buscador;
use Symfony\Component\DomCrawler\Crawler;

$Client = new Client();
$crawler = new Crawler();

$buscador = new Buscador($Client, $crawler);
$cursos = $buscador->buscar('https://www.alura.com.br/cursos-online-programacao/php');

foreach ($cursos as $curso){
    echo $curso . PHP_EOL;
}
