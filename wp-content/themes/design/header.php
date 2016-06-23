<!DOCTYPE html>
<html lang="en-US">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Responsive Design website template</title>
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/components.css">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/responsee.css">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/owl-carousel/owl.carousel.css">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/owl-carousel/owl.theme.css">
        <!-- CUSTOM STYLE -->  
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/template-style.css">
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800&amp;subset=latin,latin-ext' rel='stylesheet' type='text/css'>
 
    <body class="size-1140">
    
        <!-- TOP NAV WITH LOGO -->  
        <header>
            <nav>
                <div class="line">
                    <div class="top-nav">              
                        <div id="sidebar" class="widget-area logo hide-l">
                            <a href=""> <?php dynamic_sidebar('sidebar-1'); ?></a>
                        </div>                
                        <p class="nav-text">Custom menu text</p>
                        <div class="top-nav s-12 l-5">
                            <?php
                            wp_nav_menu(array(
                                'theme_location' => 'primary',
                                'container' => 'false',
                                'menu_class' => 'nav navbar-nav navbar-right'));
                            ?>
                        </div>
                        <ul class="s-12 l-2"  style="background-color: #7bcaea;">

                            <div id="blogname">
                                <h1><a href="<?php bloginfo('siteurl'); ?>/" 
                                       title="<?php bloginfo('name'); ?>">
                                           <?php bloginfo('name'); ?>
                                    </a>
                                </h1>
                                <h3><?php bloginfo('description'); ?></h3>

                            </div>

                        </ul>
                        <div class="top-nav s-12 l-5">
                            <?php
                            wp_nav_menu(array(
                                'theme_location' => 'secondary',
                                'container' => 'false',
                                'menu_class' => 'nav navbar-nav navbar-right'));
                            ?>
                        </div>
                    </div>
                </div>
            </nav>
        </header>
        
         







