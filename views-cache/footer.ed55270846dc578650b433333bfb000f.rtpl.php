<?php if(!class_exists('Rain\Tpl')){exit;}?>
<!--Bottom-->
<section id="bottom" class="main">
    <!--Container-->
    <div class="container">
        <!--row-fluids-->
        <div class="row-fluid">
            <!--Contact Info-->
            <div class="span3">
                <h4>Endereço</h4>
                <ul class="unstyled address">
                    <li>
                        <i class="icon-home"></i><strong>Icoarací - </strong>Rodovia Augusto Montenegro<br>Belém-PA, Brasil
                    </li>
                    <!--                   
                                       
                                        <li>
                                            <i class="icon-phone"></i>
                                            <strong>Telephone:</strong> 123-456-7890
                                        </li>-->
                </ul>
            </div>
            <!--End Contact Info-->
            <!--Important Links-->
            <div id="tweets" class="span3">
                <h4>MENUS</h4>
                <div>
                    <ul class="arrow">

                        <?php require $this->checkTemplate("site-menu");?>

                    </ul>
                </div>  
            </div>
            <!--Important Links-->
            <div id="archives" class="span2">
                <h4>CONTATOS</h4>
                <div>
                    <ul class="arrow">
                        <li>
                            <a href="mailto:company@domain.com">
                                <i class="icon-envelope"></i>
                                <strong>Via Email</strong> 
                            </a>
                        </li>
                        <li>
                            <a href="http://www.domain.com">
                                <i class="icon-globe"></i>
                                <strong>Website</strong> 
                            </a>
                        </li>

                        <li>
                            <i class="icon-phone"></i>
                            <strong>Fone:</strong> 00 00000-0000
                        </li>
                        
                       

                    </ul>
                </div>
            </div>
            <!--End Links-->
            <div class="span4">
                <h4>FACEBOOK</h4>
                <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Ffacebook&tabs=timeline&width=340&height=130&small_header=true&adapt_container_width=true&hide_cover=false&show_facepile=false&appId" width="340" height="130" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe>
            </div>
        </div>
        <!--/row-fluid-->
    </div>
    <!--/container-->
</section>
<!--/bottom-->

<!--Footer-->
<footer id="footer">
    <div class="container">
        <div class="row-fluid">
            <div class="span5 cp">
                &copy; 2019 <a target="_blank" href="http://www.domain.com/">Nossa Empresa</a>. Todos os direitos reservados.
            </div>
            <div class="span6">
                <ul class="social pull-right">
                    <li><a href="#"><i class="icon-facebook"></i></a></li>
                    <li><a href="#"><i class="icon-twitter"></i></a></li>
                    <li><a href="#"><i class="icon-pinterest"></i></a></li>
                    <li><a href="#"><i class="icon-linkedin"></i></a></li>
                    <li><a href="#"><i class="icon-google-plus"></i></a></li>                       
                    <li><a href="#"><i class="icon-youtube"></i></a></li>
                    <li><a href="#"><i class="icon-instagram"></i></a></li>                   
                </ul>
            </div>
            <div class="span1">
                <a id="gototop" class="gototop pull-right" href="#"><i class="icon-angle-up"></i></a>
            </div>
        </div>
    </div>
</footer>
<!--/Footer-->

<script src="resources/site/js/vendor/jquery-1.9.1.min.js"></script>
<script src="resources/site/js/vendor/bootstrap.min.js"></script>
<script src="resources/site/js/main.js"></script>
<script src="resources/site/js/jquery.ba-cond.min.js"></script>
<script src="resources/site/js/jquery.slitslider.js"></script>
<!-- Slider -->
<script type="text/javascript">
    $(function () {
        var Page = (function () {
            var $navArrows = $('#nav-arrows'),
                    slitslider = $('#slider').slitslider({
                autoplay: true
            }),
                    init = function () {
                        initEvents();
                    },
                    initEvents = function () {
                        $navArrows.children(':last').on('click', function () {
                            slitslider.next();
                            return false;
                        });
                        $navArrows.children(':first').on('click', function () {
                            slitslider.previous();
                            return false;
                        });
                    };
            return {init: init};
        })();
        Page.init();
    });


</script>
<!-- /Slider -->
</body>
</html>