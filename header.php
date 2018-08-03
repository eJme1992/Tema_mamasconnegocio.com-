<?php
/**
 * @package WordPress
 * @subpackage ID-Peru-Theme-Wordpress
 * @since HTML5 ID 2.0
 */
?><!doctype html>
<!--[if lt IE 7 ]> <html class="ie ie6 ie-lt10 ie-lt9 ie-lt8 ie-lt7 no-js" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7 ]>    <html class="ie ie7 ie-lt10 ie-lt9 ie-lt8 no-js" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8 ]>    <html class="ie ie8 ie-lt10 ie-lt9 no-js" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 9 ]>    <html class="ie ie9 ie-lt10 no-js" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 9]><!--><html class="no-js" <?php language_attributes(); ?>><!--<![endif]-->
    <!-- the "no-js" class is for Modernizr. -->
    <head id="<?php echo of_get_option('meta_headid'); ?>" data-template-set="ID-Peru-Theme-Wordpress">
        <meta charset="<?php bloginfo('charset'); ?>">
        <!-- Always force latest IE rendering engine (even in intranet) -->
        <!--[if IE ]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <![endif]-->
        <?php
        if (is_search())
            echo '<meta name="robots" content="noindex, nofollow" />';
        ?>
        <title><?php wp_title('|', true, 'right'); ?></title>
        <meta name="title" content="<?php wp_title('|', true, 'right'); ?>">
        <?php
        if (true == of_get_option('meta_author'))
            echo '<meta name="author" content="' . of_get_option("meta_author") . '" />';
        if (true == of_get_option('meta_google'))
            echo '<meta name="google-site-verification" content="' . of_get_option("meta_google") . '" />';
        ?>
        <meta name="Copyright" content="Copyright &copy; <?php bloginfo('name'); ?> <?php echo date('Y'); ?>. All Rights Reserved.">
        <?php
        /*
          j.mp/mobileviewport & davidbcalhoun.com/2010/viewport-metatag
          - device-width : Occupy full width of the screen in its current orientation
          - initial-scale = 1.0 retains dimensions instead of zooming out if page height > device height
          - maximum-scale = 1.0 retains dimensions instead of zooming in if page width < device width
          - minimal-ui = iOS devices have minimal browser ui by default
         */
        if (true == of_get_option('meta_viewport'))
            echo '<meta name="viewport" content="' . of_get_option("meta_viewport") . ' minimal-ui" />';
        /*
          These are for traditional favicons and Android home screens.
          - sizes: 1024x1024
          - transparency is OK
          - see wikipedia for info on browser support: http://mky.be/favicon/
          - See Google Developer docs for Android options. https://developers.google.com/chrome/mobile/docs/installtohomescreen
         */
        if (true == of_get_option('head_favicon')) {
            echo '<meta name=”mobile-web-app-capable” content=”yes”>';
            echo '<link rel="shortcut icon" sizes=”1024x1024” href="' . of_get_option("head_favicon") . '" />';
        }
        /*
          The is the icon for iOS Web Clip.
          - size: 57x57 for older iPhones, 72x72 for iPads, 114x114 for iPhone4 retina display (IMHO, just go ahead and use the biggest one)
          - To prevent iOS from applying its styles to the icon name it thusly: apple-touch-icon-precomposed.png
          - Transparency is not recommended (iOS will put a black BG behind the icon) -->';
         */
        if (true == of_get_option('head_apple_touch_icon'))
            echo '<link rel="apple-touch-icon" href="' . of_get_option("head_apple_touch_icon") . '">';
        ?>

        <!-- aqui empieza -->
        <?php wp_head(); ?>
        <!-- aqui termina -->
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/_/css/main.css">
       
    </head>

    <body <?php body_class(); ?>>
        <?php include_once("googletagmanager.php") ?>

        <!--<header id="header" class="clearfix">
                <div class="container">
                        <div class="row clearfix">
                                <div class="col-md-12">
                                        <nav class="navbar" role="navigation">
                                          <div class="container-fluid">
                                                
                                                        <div class="navbar-header">
                                                                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                                                        <span class="sr-only">Toggle navigation</span>
                                                        <span class="icon-bar"></span>
                                                        <span class="icon-bar"></span>
                                                        <span class="icon-bar"></span>
                                                    </button>
                                                                <a class="navbar-brand" href="<?php echo esc_url(home_url('/')); ?>" title="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>" rel="home"><?php bloginfo('name'); ?></a>
                                                        </div>
                                                        <div id="navbar" class="navbar-collapse collapse">
                                                                <nav id="nav" role="navigation" class="hidden-xs">
        <?php
        wp_nav_menu(
                array(
                    'theme_location' => 'primary',
                    'menu_class' => 'nav nav-pills',
                    'container' => '',
                    'walker' => new wp_bootstrap_navwalker(),
                )
        );
        ?>
                                                                </nav>
                                                                <nav id="nav" role="navigation" class="visible-xs-block">
        <?php
        wp_nav_menu(
                array(
                    'theme_location' => 'main-mobile',
                    'menu_class' => 'nav',
                    'container' => '',
                )
        );
        ?>
                                                                </nav>
                                                        </div>
                                                </div>
                                        </nav>
                                </div>
                        </div>
                </div>
        </header> -->


