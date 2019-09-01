<?php

use Projeto\Page;
use Slim\Slim;
use Projeto\Model\Noticia;
use Projeto\Model\SiteMenu;

//tela index
$app->get('/', function () {
    $slide = Noticia::buscaDestaqueSlide();
    $galeria = Noticia::listarDestaqueGaleria();
    
    //$teste = Projeto\Model\Paciente::listarPacientes();
    $pagina = new Page();
    $pagina->setTpl("index", array(
        "galeria" => $galeria,
        "slide" => $slide
    ));
    
   $menus= SiteMenu::atualizarArquivo();
  // var_dump($menus);
});

//tela sobre nós
$app->get('/sobre-nos', function () {
    $pagina = new Page();
    $pagina->setTpl("sobre-nos");
});

//tela Serviços
$app->get('/servicos', function () {
    $pagina = new Page();
    $pagina->setTpl("servicos");
});

//tela Porifólio
$app->get('/portfolio', function () {
    $pagina = new Page();
    $pagina->setTpl("portfolio");
});

//tela política de privacidade
$app->get('/privacidade', function () {
    $pagina = new Page();
    $pagina->setTpl("privacidade");
});

//tela de login
$app->get('/login', function () {
    $pagina = new Page([
        "header" => false,
        "footer" => false
    ]);
    $pagina->setTpl("login");
});



$app->get('/noticias', function () {
    $galeria = Noticia::listarGaleriaCompleta();
    $pagina = new Page();
    $pagina->setTpl("galeria-noticias", array(
        "galeria" => $galeria
    ));
    
});

//tela noticia individual

$app->get('/noticias/:id', function ($id) {
    $noticia = Noticia::get( $id);
    
    $pagina = new Page();
    $pagina->setTpl("noticia", array(
        "noticia" => $noticia
    ));


});

