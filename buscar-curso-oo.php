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

//packgist: repositorio central de pacotes do composer, porém é possivel configurar repositorio de outras fontes (github)
//pacotes guzzlehtt/guzzle executa as requisicoes http de alto nivel
//pacotes symfony/dom-crawler faz a leitura e filtros do html

//instalacao de dependencias(pacote): composer require <nome do pacote>
//Ex.: composer require guzzlehttp/guzzle
//Ex.: composer require symfony/dom-crawler
//Ex.: composer require symfony/css-selector

//pasta vendor: local onde o composer guarda as dependencias transitivas do projeto
//composer.json: local onde o comando require adiciona as dependencias

//composer install: comando que baixa automaticamente todas as dependencias do composer.lok(ou do composer.json, caso o .look não exista)

//composer.lok: define todas as versoes exatas instaladas

//o composer ja gera um arquivo autoload.php para facilitar o carregamento das dependencias, bastando usar require vendor/autoload.php

//composer require --dev phpunit/phpunit