<?php get_header(); ?> 
<section>
    <div id="head">
        <div class="line">
            <h1>Example of contact page</h1>
        </div>
    </div>
    <div id="content" class="left-align contact-page">
        <div class="line">
            <div class="margin">
                <div class="s-12 l-6">
                    <h2>Vision Design - graphic zoo</h2>
                    <address>
                        <p><i class="icon-home icon"></i> IIIT Campus , Gachibowli, Hyderabad,T-HUB </p>
                        <p><i class="icon-globe_black icon"></i> Telangana 500032 - India</p>
                        <p><i class="icon-mail icon"></i> info@t-hub.ask</p>
                    </address>
                    <br />
                    <h2>Social</h2>
                    <p><i class="icon-facebook icon"></i> <a href="https://www.facebook.com/pages/Vision-Design-graphic-ZOO/154664684553091">Vision Design - graphic zoo</a></p>
                    <p><i class="icon-facebook icon"></i> <a href="https://www.facebook.com/myresponsee">Responsee</a></p>
                    <p class="margin-bottom"><i class="icon-twitter icon"></i> <a href="https://twitter.com/MyResponsee">Responsee</a></p>
                </div>
                <div class="s-12 l-6">
                    <h2>Example contact form (do not use)</h2>
                    
                        <div class="s-12 l-7">
                            <?php echo do_shortcode('[contact-form-7 id="42" title="Contact form 1"]'); ?>

                        </div>

                    
                </div>
            </div>
        </div>
    </div>
    <!-- MAP -->	
    <div id="map-block">  

        <?php dynamic_sidebar('sidebar-9'); ?>
    </div>
    <div id="fourth-block">
        <div class="line">
            <div id="owl-demo2" class="owl-carousel owl-theme">
                <div class="item">
                    <h2><?php dynamic_sidebar('sidebar-5'); ?></h2>
                    <p class="s-12 m-12 l-8 center">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.
                    </p>
                </div>
                <div class="item">
                    <h2><?php dynamic_sidebar('sidebar-6'); ?></h2>
                    <p class="s-12 m-12 l-8 center">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.
                    </p>
                </div>
                <div class="item">
                    <h2><?php dynamic_sidebar('sidebar-7'); ?></h2>
                    <p class="s-12 m-12 l-8 center">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- FOOTER -->   
<footer>
    <div class="line">
        <div class="s-12 l-6">
            <p title="Responsee - lightweight responsive framework>Copyright 2016, Vision Dejkfhdjfhjkdhkign - graphic zoo">
                <?php dynamic_sidebar('sidebar-3'); ?>
            </p>
        </div>
        <div class="s-12 l-6">
            <p class="right">
                <a class="right" href="http://www.myresponsee.com" title="Responsee - lightweight responsive framework">
                    <?php dynamic_sidebar('sidebar-4'); ?></a>
            </p>
        </div>
    </div>
</footer>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery-1.8.3.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery-ui.min.js"></script>    
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/modernizr.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/responsee.js"></script>   
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/owl-carousel/owl.carousel.js"></script>   
<script type="text/javascript">
    jQuery(document).ready(function ($) {
        $("#owl-demo").owlCarousel({
            slideSpeed: 300,
            autoPlay: true,
            navigation: false,
            pagination: false,
            singleItem: true
        });
        $("#owl-demo2").owlCarousel({
            slideSpeed: 300,
            autoPlay: true,
            navigation: false,
            pagination: true,
            singleItem: true
        });
    });

</script> 
</body>
</html>