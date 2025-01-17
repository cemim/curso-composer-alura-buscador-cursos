#!/usr/bin/env php
<?php
// #!/usr/bin/env php Informa que esse arquivo será um executavel do composer
require 'vendor/autoload.php';

use Cemim\BuscadorCursos\BuscadorDeCursos;
use GuzzleHttp\Client;
use Symfony\Component\DomCrawler\Crawler;

$client = new Client(['base_uri'=>'https://www.alura.com.br/', 'verify' => false]);
$crawler = new Crawler();

$buscador = new BuscadorDeCursos($client, $crawler);
$cursos = $buscador->buscar('/cursos-online-programacao/php');

foreach ($cursos as $curso) {
    echo $curso . PHP_EOL;
}