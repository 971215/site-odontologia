<?php

session_start();

use Slim\Slim;
use Projeto\Model\Usuario;
use Projeto\Model\Paciente;
use Projeto\Model\Servico;
use Projeto\PageAdmin;
use Projeto\Model\Dentista;
use Projeto\Model\Noticia;
use Projeto\Model\SiteMenu;

//tela administração
$app->get('/admin', function () {
    Usuario::verificarLogin();
    $usuarios = Usuario::listarUsuarios();
    $pagina = new PageAdmin();
    $pagina->setTpl("index", array(
        "usuarios" => $usuarios
    ));
});

//tela de login funcionário
$app->get('/admin/login', function () {
    $pagina = new PageAdmin([
        "header" => false,
        "footer" => false
    ]);
    $pagina->setTpl("login");
});

//entrar com usuario e senha - funcionário
$app->post('/admin/login', function () {

    Usuario::login($_POST["login"], $_POST["senha"]);
//var_dump($_POST);
    header("Location: /projetosite/admin");
    exit;
});


$app->get('/admin/logout', function () {

    Usuario::logout();
    header("Location: /projetosite/");
    exit;
});

//tela usuarios
$app->get('/admin/usuarios', function () {

    $usuarios = Usuario::listarUsuarios();
    $pagina = new PageAdmin();
    $pagina->setTpl("usuario", array(
        "usuarios" => $usuarios
    ));
});

//tela usuarios
$app->get('/admin/usuarios/novo-usuario', function () {

    $pagina = new PageAdmin();
    $pagina->setTpl("novo-usuario");
});

//adicionar usuario
$app->post('/admin/usuarios/novo-usuario', function () {

    $usuario = new Usuario();
    $usuario->setData($_POST);
    var_dump($_POST);
    $usuario->adicionarUsuario();
    header("Location: /projetosite/admin/usuarios");
    exit;
});
//tela pacientes
$app->get('/admin/pacientes', function () {

    $pacientes = Paciente::listarPacientes();
    $pagina = new PageAdmin();
    $pagina->setTpl("paciente", array(
        "pacientes" => $pacientes
    ));
});

//tela novo paciente
$app->get('/admin/pacientes/novo-paciente', function () {

    $pacientes = Paciente::listarPacientes();
    $pagina = new PageAdmin();
    $pagina->setTpl("novo-paciente", array(
        "pacientes" => $pacientes
    ));
});

//tela adicionar paciente
$app->post('/admin/pacientes/novo-paciente', function () {


    $paciente = new Paciente();
    $paciente->setData($_POST);
    var_dump($_POST);
    $paciente->adicionarPaciente();
    header("Location: /projetosite/admin/pacientes");
//exit;
});


$app->get('/admin/menus', function () {
    $menus = SiteMenu::listarmenus();
    $pagina = new PageAdmin();
    $pagina->setTpl("menus", array(
        "menus" => $menus
    ));
});

$app->get('/admin/novo-menu', function () {
    $pagina = new PageAdmin();
    $pagina->setTpl("novo-menu");
});


$app->post('/admin/novo-menu', function () {


    $menu = new SiteMenu();
    $menu->setData($_POST);
    var_dump($_POST);
    $menu->adicionaMenu();
    header("Location: /projetosite/admin/menus");
exit;
});



//tela servicos
$app->get('/admin/servicos', function () {

    $servicos = Servico::listarServicos();
    $pagina = new PageAdmin();
    $pagina->setTpl("servico", array(
        "servicos" => $servicos
    ));
});

//tela novo servico
$app->get('/admin/servicos/novo-servico', function () {

    $pacientes = Paciente::listarPacientes();
    $dentistas = Dentista::listarDentistas();
    $pagina = new PageAdmin();
    $pagina->setTpl("novo-servico", array(
        "pacientes" => $pacientes,
        "dentistas" => $dentistas
    ));
});



//tela noticias admin


$app->get('/admin/noticias', function () {

    $noticias = Noticia::listarGaleriaCompleta();
    $pagina = new PageAdmin();
    $pagina->setTpl("noticias", array(
        "noticias" => $noticias
    ));
});


$app->get('/admin/noticias/nova-noticia', function () {


    $pagina = new PageAdmin();
    $pagina->setTpl("nova-noticia");
});


$app->post('/admin/noticias/nova-noticia', function () {


    $noticia = new Noticia();
    $noticia->setData($_POST);
    var_dump($_POST);
    $noticia->adicionarNoticia();
    header("Location: /projetosite/admin/noticias");
//exit;
});
