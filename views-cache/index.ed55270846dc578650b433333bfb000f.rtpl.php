<?php if(!class_exists('Rain\Tpl')){exit;}?>


<!--Slider-->
<section id="slide-show">
    <div id="slider" class="sl-slider-wrapper">
        <!--Slider Items-->    
        <div class="sl-slider">


            <?php $counter1=-1;  if( isset($slide) && ( is_array($slide) || $slide instanceof Traversable ) && sizeof($slide) ) foreach( $slide as $key1 => $value1 ){ $counter1++; ?>

            <!--Slider Item1-->
            <div class="sl-slide item1" data-orientation="horizontal" data-slice1-rotation="-25" data-slice2-rotation="-25" data-slice1-scale="2" data-slice2-scale="2">
                <div class="sl-slide-inner">
                    <div class="container">
                        <img class="pull-right" src="imagens/noticias/<?php echo htmlspecialchars( $value1["url"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" alt="" />
                        <h2><?php echo htmlspecialchars( $value1["titulo"], ENT_COMPAT, 'UTF-8', FALSE ); ?></h2>
                        <!--<h3 class="gap"><?php echo htmlspecialchars( $value1["titulo"], ENT_COMPAT, 'UTF-8', FALSE ); ?></h3>-->
                        <a class="btn btn-large btn-transparent" href="#">View More</a>
                    </div>
                </div>
            </div>
            <!--/Slider Item1-->
            <?php } ?>


        </div>
        <!--/Slider Items-->
        <!--Slider Next Prev button-->
        <nav id="nav-arrows" class="nav-arrows">
            <span class="nav-arrow-prev"><i class="icon-angle-left"></i></span>
            <span class="nav-arrow-next"><i class="icon-angle-right"></i></span> 
        </nav>
        <!--/Slider Next Prev button-->
    </div>
    <!-- /slider-wrapper -->           
</section>
<!--/Slider-->

<section class="main-info">
    <div class="container">
        <div class="row-fluid">
            <div class="span9">
                <h4>Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos</h4>
                <p class="no-margin">Ut ultrices eu nunc vitae scelerisque. Praesent sollicitudin accumsan diam, sed tristique diam sodales ut. Ut volutpat tempor dignissim.</p>
            </div>
            <div class="span3">
                <a class="btn btn-success btn-large pull-right" href="#">Nulla ornare varius</a>
            </div>
        </div>
    </div>
</section>

<!--Services-->
<section id="services">
    <div class="container">
        <div class="center gap">
            <h3>Sobre Nós</h3>
            <!--<p class="lead">Sed volutpat lectus orci, in mattis purus condimentum eget. Curabitur pulvinar urna orci, eu dictum leo fermentum quis.</p>-->
        </div>
        <div class="row-fluid">
            <div class="span4">
                <div class="media">
                    <!--                    <div class="pull-left">
                                            <i class="icon-globe icon-medium"></i>
                                        </div>-->
                    <div class="media-body">
                        <h4 class="media-heading">Missão</h4>
                        <p>Vivamus sed nibh nisl. Donec eget nunc at felis posuere ultricies. Maecenas ultrices ante ut dictum semper. Nullam ac dolor leo. Cras tempus viverra tellus, eu posuere quam vestibulum eu. Pellentesque eleifend orci sed tristique consequat. Mauris aliquet venenatis purus.</p>
                    </div>
                </div>
            </div>            <!--
            -->            <div class="span4">
                <div class="media">
                    <!--                    <div class="pull-left">
                                            <i class="icon-thumbs-up-alt icon-medium"></i>
                                        </div>-->
                    <div class="media-body">
                        <h4 class="media-heading">Visão</h4>
                        <p>Mauris aliquet venenatis purus lobortis scelerisque. Fusce vulputate dui placerat augue rhoncus elementum. Fusce nec elementum odio. Nulla vel nibh eget nulla auctor efficitur. Vivamus sollicitudin vestibulum purus non dictum. Sed scelerisque placerat dui porta vestibulum.</p>
                    </div>
                </div>
            </div>            
            <div class="span4">
                <div class="media">
                    <!--                    <div class="pull-left">
                                            <i class="icon-leaf icon-medium icon-rounded"></i>
                                        </div>-->
                    <div class="media-body">
                        <h4 class="media-heading">Valores</h4>
                        <p>Ut pellentesque odio orci, sed laoreet ipsum lacinia at. Praesent malesuada, nulla eget commodo elementum, nibh ante pellentesque lorem, vitae finibus velit dolor vitae purus. Vivamus eu molestie urna, vitae sagittis magna. Sed mauris massa, varius hendrerit odio ac, rutrum efficitur turpis.</p>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
</section>
<!--/Services-->

<!--Work-->

<section id="recent-works-front">
    <div class="container">
        <div class="center">
            <h3 style="color: #000;">Noticias</h3>
            <!--<p class="lead">Praesent mollis elit vitae neque condimentum, in semper lectus placerat.</p>-->
        </div>  
        <div class="gap"></div>
        <ul class="gallery col-4">
            
            <!--Item 1-->
            <?php $counter1=-1;  if( isset($galeria) && ( is_array($galeria) || $galeria instanceof Traversable ) && sizeof($galeria) ) foreach( $galeria as $key1 => $value1 ){ $counter1++; ?>
            <li>

                <div class="desc">
                    <h5 style="color: #000;"><?php echo htmlspecialchars( $value1["titulo"], ENT_COMPAT, 'UTF-8', FALSE ); ?></h5>
                </div>

            </li>
            <?php } ?>




        </ul>
        <a class="btn btn-large btn-azul" href="noticias" style="float: right;">Mais Notícias</a>
    </div>
</section>

<section id="recent-works-front">
    <div class="container">
        <div class="center">
            <h3 style="color: #000;">Galeria de Imagens</h3>
            <!--<p class="lead">Praesent mollis elit vitae neque condimentum, in semper lectus placerat.</p>-->
        </div>  
        <div class="gap"></div>
        <ul class="gallery col-4">
            <!--Item 1-->
            <?php $counter1=-1;  if( isset($galeria) && ( is_array($galeria) || $galeria instanceof Traversable ) && sizeof($galeria) ) foreach( $galeria as $key1 => $value1 ){ $counter1++; ?>
            <li>
                <div class="preview-front">
                    <img alt=" " src="imagens/noticias/<?php echo htmlspecialchars( $value1["url"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" class="front-site">
                    <div class="overlay">
                    </div>
                    <div class="links">
                        <a data-toggle="modal" href="#modal-1"><i class="icon-eye-open"></i></a><a href="#"><i class="icon-link"></i></a>                          
                    </div>
                </div>
                <div class="desc">
                    <h5 style="color: #000;"><?php echo htmlspecialchars( $value1["titulo"], ENT_COMPAT, 'UTF-8', FALSE ); ?></h5>

                </div>
                <div id="modal-1" class="modal hide fade">
                    <a class="close-modal" href="javascript:;" data-dismiss="modal" aria-hidden="true"><i class="icon-remove"></i></a>
                    <div class="modal-body">
                        <img src="resources/site/images/portfolio/full/item1.jpg" alt=" " width="100%" style="max-height:400px">
                    </div>
                </div>                 
            </li>
            <?php } ?>

            


        </ul>
        <a class="btn btn-large btn-azul" href="noticias" style="float: right;">Mais Notícias</a>
    </div>
</section>
<!--/Work-->

