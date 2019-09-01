<?php if(!class_exists('Rain\Tpl')){exit;}?><!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->


<section id="portfolio" class="container main">
    <div class="container">
        <div class="center">
            <h3>Mais galerias</h3>
            <!--<p class="lead">Praesent mollis elit vitae neque condimentum, in semper lectus placerat.</p>-->
        </div>  
        <div class="gap"></div>
        <ul class="gallery col-4">
            <!--Item 1-->
            <?php $counter1=-1;  if( isset($galeria) && ( is_array($galeria) || $galeria instanceof Traversable ) && sizeof($galeria) ) foreach( $galeria as $key1 => $value1 ){ $counter1++; ?>

            <li>
                <div class="preview">
                    <img alt=" " src="./imagens/noticias/<?php echo htmlspecialchars( $value1["url"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
                    <div class="overlay">
                    </div>
                    <div class="links">
                        <a data-toggle="modal" href="#modal-1"><i class="icon-eye-open"></i></a><a href="#"><i class="icon-link"></i></a>                          
                    </div>
                </div>
                <div class="desc">
                    <h5><?php echo htmlspecialchars( $value1["titulo"], ENT_COMPAT, 'UTF-8', FALSE ); ?></h5>
                </div>
                <div id="modal-1" class="modal hide fade">
                    <a class="close-modal" href="javascript:;" data-dismiss="modal" aria-hidden="true"><i class="icon-remove"></i></a>
                    <div class="modal-body">
                        <img src="./resources/site/images/portfolio/full/item1.jpg" alt=" " width="100%" style="max-height:400px">
                    </div>
                    

                </div> 
                 <div class="mais-noticias">
                    <a href="/projetosite/noticias/<?php echo htmlspecialchars( $value1["id"], ENT_COMPAT, 'UTF-8', FALSE ); ?>"> <button type="button" class="btn btn-large btn-azul" style="width: 91%; position: center; margin-left: 14px; "> Ler Notícia</button></a>
                </div>
            </li>
           
            <?php } ?>




        </ul>
    </div>
</section>