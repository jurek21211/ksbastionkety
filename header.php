<!DOCTYPE html>
<html>
    <head>
        
        <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico" />
        <title><?php bloginfo('name') ?></title>

        <meta http-equiv="Content-Type" content='text/html' charset='UTF-8' />
        <meta name="description" content="Klub Strzelecki LOK Bastion Kęty">
        <meta name="keywords" content="Strzelectwo, Kęty, Bastion, LOK, Klub, Sportowy, Klub Sportowy, Klub Strzelecki,">
        <meta name="author" content="Jerzy Kaczmarczyk"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <script src="<?php bloginfo('template_directory') ?>/js/jquery-1.11.3.min.js"></script>
        <link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/css/bootstrap.min.css"/>
        <script src="<?php bloginfo('template_directory') ?>/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" />

        <script type="text/javascript" src="<?php bloginfo('template_directory') ?>/js/opacity.js"></script>
        <script type="text/javascript" src="<?php bloginfo('template_directory') ?>/js/responsive.js"></script>
        <script type="text/javascript" src="<?php bloginfo('template_directory') ?>/js/menu-desc.js"></script>
        <script type="text/javascript" src="<?php bloginfo('template_directory') ?>/js/scrollreveal.js"></script>

        <?php wp_head(); ?>
    </head>
    <body>
        <div id="wrap">


            <div class="fb-like">
                <div id="facebook_slider_widget" style="display: none"><script type="text/javascript" src="http://webfrik.pl/widget/facebook_slider.html?fb_url=https://www.facebook.com/ksbastion&amp;fb_width=500&amp;fb_height=300&amp;fb_faces=true&amp;fb_stream=false&amp;fb_header=true&amp;fb_border=true&amp;fb_theme=light&amp;chx=787&amp;speed=FAST&amp;fb_pic=logo&amp;position=RIGHT">
                    </script>	      
                </div>
            </div> 

            <div id="menu-container" class="col-md-12">

                <nav class="custom-menu navbar navbar-default" role="navigation">
                    <div class="container-fluid">
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>

                        <?php
                        wp_nav_menu(array('menu' => 'primary', 'theme_location' => 'primary', 'depth' => 2, 'container' => 'div', 'container_class' => 'collapse navbar-collapse ', 'container_id' => 'bs-example-navbar-collapse-1', 'menu_class' => 'nav navbar-nav', 'fallback_cb' => 'wp_bootstrap_navwalker::fallback', 'walker' => new wp_bootstrap_navwalker()));
                        ?>
                    </div>
                </nav>
            </div>





