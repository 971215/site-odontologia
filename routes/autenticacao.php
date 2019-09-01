<?php

use Hcode\Page;
use Slim\Slim;


//tela de login
$app->get('/login', function () {
    $pagina = new Page([
        "header" => false,
        "footer" => false
    ]);
    $pagina->setTpl("login");
});
