<?php get_header(); ?> 
<section>
    <div id="head">
        <div class="line">
            <h1><?php dynamic_sidebar('sidebar-10'); ?></h1>
        </div>
    </div>
    <div id="content">
        <div class="line">
            <p class="s-12 m-12 l-8 center">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Nam liber tempor cum soluta nobis eleifend option congue nihil.
            </p>
            <h2>Some subtitle</h2>
            <p class="s-12 m-12 l-8 center">Imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam; est usus legentis in iis qui facit eorum claritatem. Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius. Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula quarta decima et quinta decima. Eodem modo typi, qui nunc nobis videntur parum clari, fiant sollemnes in futurum.
            </p>
        </div>
    </div>
    	
    <div id="third-block">
        <div class="line">
            <h2>Responsive gallery</h2>
            <p class="subtitile">Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
            </p>
            <div class="margin">
                <div class="s-12 m-6 l-3">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/first-small.jpg">      
                    <p class="subtitile">Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                    </p>
                </div>
                <div class="s-12 m-6 l-3">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/second-small.jpg">      
                    <p class="subtitile">Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                    </p>
                </div>
                <div class="s-12 m-6 l-3">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/third-small.jpg">      
                    <p class="subtitile">Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                    </p>
                </div>
                <div class="s-12 m-6 l-3">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/fourth-small.jpg">      
                    <p class="subtitile">Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                    </p>
                </div>
            </div>
        </div>
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
                    <h2> <?php dynamic_sidebar('sidebar-6'); ?></h2>
                    <p class="s-12 m-12 l-8 center">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.
                    </p>
                </div>
                <div class="item">
                    <h2><?php dynamic_sidebar('sidebar-7'); ?></h2>
                    <p class="s-12 m-12 l-8 center">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit  lobortis nisl ut aliquip ex ea commodo consequat.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
 
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