<?php if(!class_exists('Rain\Tpl')){exit;}?><!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>HR Theme One</title>
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" href="resources/site/css/bootstrap.min.css">
    <link rel="stylesheet" href="resources/site/css/bootstrap-responsive.min.css">
    <link rel="stylesheet" href="resources/site/css/font-awesome.min.css">
    <link rel="stylesheet" href="resources/site/css/main.css">
    <link rel="stylesheet" href="resources/site/css/sl-slide.css">
    <script src="resources/site/js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
    <!--<link rel="shortcut icon" href="resources/site/images/favicon.png">-->
</head>

<body>
    <!--Header-->
    <header class="navbar navbar-fixed-top">
        <div class="navbar-inner">
            <div class="container">
                <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </a>
                <!--<a id="logo" class="pull-left" href="index.html"></a>-->
                <div class="nav-collapse collapse pull-right">
                    <ul class="nav">
<!--                        <li class="active"><a href="index.html">Home</a></li>
                        <li><a href="/projetosite/sobre-nos">Sobre Nós</a></li>
                        <li><a href="/projetosite/servicos">Serviços</a></li>
                        <li><a href="/projetosite/portfolio">Portfolio</a></li>
                        <li><a href="/projetosite/login">Acesse Sua Conta</a></li>-->
                        <?php require $this->checkTemplate("site-menu");?>   
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Outros <i class="icon-angle-down"></i></a>
                            <ul class="dropdown-menu">
                                <li><a href="404.html">Error 404</a></li>
                                <li><a href="privacidade">política de Privacidade</a></li>
                            </ul>
                        </li>
                        <li><a href="contact-us.html">Contatos</a></li>
                    </ul>        
                </div>
            </div>
        </div>
    </header>