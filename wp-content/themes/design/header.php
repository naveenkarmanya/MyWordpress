<!DOCTYPE html>
<html lang="en-US">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Responsive Design website template</title>
        <?php wp_head(); ?>
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800&amp;subset=latin,latin-ext' rel='stylesheet' type='text/css'>

    <body class="size-1140">


        <header>
            <nav class="navbar-fixed-top">
                <div class="line">
                    <div class="top-nav">              
                        <div id="sidebar" class="widget-area logo hide-l">
                            <a href=""> <?php dynamic_sidebar('sidebar-1'); ?></a>
                            <a href=""> <?php dynamic_sidebar('sidebar-2'); ?></a>

                        </div>                
                        <p class="nav-text">Custom menu text</p>

                        <div class="top-nav col-md-5 col-md-offset-1">
                            <?php
                            wp_nav_menu(array(
                                'theme_location' => 'primary',
                                'container' => 'false',
                                'menu_class' => 'nav navbar-nav navbar-right'));
                            ?>
                        </div>


                        <div id="" class="col-md-2"  style="background-color: #7bcaea;">
                            <h1><a href="<?php bloginfo('siteurl'); ?>/" 
                                   title="<?php bloginfo('name'); ?>">
                                       <?php bloginfo('name'); ?>
                                </a>
                            </h1>
                            <h3><?php bloginfo('description'); ?></h3>

                        </div>


                        <div class="top-nav col-xs-4">
                            <?php
                            wp_nav_menu(array(
                                'theme_location' => 'secondary',
                                'container' => 'false',
                                'menu_class' => 'nav navbar-nav navbar-right'));
                            ?>
                        </div>
                    </div>
                </div>
                </div>
            </nav>
        </header>
        <img src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>"
             width="<?php echo get_custom_header()->width; ?>" alt="" />










