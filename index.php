<?php
/**
 * Created by PhpStorm.
 * User: ANDRE
 * Date: 04/05/2019
 * Time: 21:12
 */

require_once ('vendor/autoload.php');


use \Hcode\Page;
use \Hcode\PageAmin;
use \Slim\Slim;



$app = new Slim();

$app->config('debug', true);

require_once ('rotas/Usuario-Rota.php');
require_once ('rotas/site.php');
require_once ('rotas/administracao.php');
require_once ('rotas/Paciente-Rota.php');




$app->run();
