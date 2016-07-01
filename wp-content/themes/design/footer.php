<section>
    <!-- CAROUSEL -->  

    <?php echo do_shortcode(' [huge_it_slider id="1"] '); ?>



    <!--    <div id="carousel">
            <div id="owl-demo" class="owl-carousel owl-theme">
                <div class="item">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/first.jpg" alt="">      
                    <div class="carousel-text">
                        <div class="line">
                            <div class="s-12 l-9">
                                <h2><?php dynamic_sidebar('sidebar-10'); ?></h2>
                            </div>
                            <div class="s-12 l-9">
                                <p>With amazing responsive carousel
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/second.jpg" alt="">      
                    <div class="carousel-text">
                        <div class="line">
                            <div class="s-12 l-9">
                                <h2><?php dynamic_sidebar('sidebar-11'); ?></h2>
                            </div>
                            <div class="s-12 l-9">
                                <p>Lightweight, more intuitive and useful responsive CSS framework
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/third.jpg" alt="">      
                    <div class="carousel-text">
                        <div class="line">
                            <div class="s-12 l-9">
                                <h2><?php dynamic_sidebar('sidebar-12'); ?></h2>
                            </div>
                            <div class="s-12 l-9">
                                <p>Best theme based on Responsee framework
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>-->
    <!-- FIRST BLOCK --> 	
    <div id="first-block">
        <div class="line">

            <?php if (is_active_sidebar('sidebar-0')) : ?>
                <br>
                <div id="secondary" class="widget-area" role="complementary">
                    <p> <?php dynamic_sidebar('sidebar-0'); ?></p>
                </div>
            <?php endif; ?>


        </div>
    </div>
    <!-- SECOND BLOCK --> 	
    <div id="second-block">
        <div class="line">
            <div class="margin-bottom">
                <div class="margin">
                    <article class="s-12 l-8 center">
                        <h1><?php dynamic_sidebar('sidebar-8'); ?></h1>
                        <p class="margin-bottom">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.
                        </p>
                        <a class="button s-12 l-4 center" href="#">Read more</a>  			
                    </article>
                </div>
            </div>
        </div>
    </div>
    <!-- GALLERY --> 	
    <div id="third-block">
        <div class="line">
            <?php if (is_active_sidebar('sidebar-01')) : ?>
                    <div id="secondary" class="widget-area" role="complementary">
                        <?php dynamic_sidebar('sidebar-01'); ?>
                    </div>
                <?php endif; ?>

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
<?php wp_footer(); ?>
<script type="text/javascript">

</script> 
</body>
</html>