<?php if(!class_exists('Rain\Tpl')){exit;}?><!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
  <link rel="stylesheet" href="../resources/site/css/bootstrap.min.css">
    <link rel="stylesheet" href="../resources/site/css/bootstrap-responsive.min.css">
    <link rel="stylesheet" href="../resources/site/css/font-awesome.min.css">
    <link rel="stylesheet" href="../resources/site/css/main.css">
    <link rel="stylesheet" href="../resources/site/css/sl-slide.css">

    
    
     <div class="container">
        <div class="center">
            <h3>Mais galerias</h3>
            <!--<p class="lead">Praesent mollis elit vitae neque condimentum, in semper lectus placerat.</p>-->
        </div>  
        <div class="gap"></div>
        <ul class="gallery col-12">
            <!--Item 1-->
            <?php $counter1=-1;  if( isset($noticia) && ( is_array($noticia) || $noticia instanceof Traversable ) && sizeof($noticia) ) foreach( $noticia as $key1 => $value1 ){ $counter1++; ?>

            <!--<li>-->
                <div class="preview">
                    <img alt=" " src="../imagens/noticias/<?php echo htmlspecialchars( $value1["url"], ENT_COMPAT, 'UTF-8', FALSE ); ?>"  width="100%">
<!--                    <div class="overlay">
                    </div>
                    <div class="links">
                        <a data-toggle="modal" href="#modal-1"><i class="icon-eye-open"></i></a><a href="#"><i class="icon-link"></i></a>                          
                    </div>-->
                </div>
                <div class="desc">
                    <h5 style="margin-top: 2%"><?php echo htmlspecialchars( $value1["titulo"], ENT_COMPAT, 'UTF-8', FALSE ); ?></h5>
                    <p style="text-align: justify; margin-bottom: 2%"><?php echo htmlspecialchars( $value1["texto"], ENT_COMPAT, 'UTF-8', FALSE ); ?></p>
                </div>
                   
            <!--</li>-->
            <?php } ?>

            
           
                      
        </ul>
    </div>
    
    
    
  
    
