<?php

require_once './vendor/autoload.php';

use Hcode\Page;
use Slim\Slim;

$app = new Slim();
$app->config('debug', true);

require_once './routes/site.php';
require_once './routes/administracao.php';
require_once './routes/site-noticias.php';

$app->run();
?>
  