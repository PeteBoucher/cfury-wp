<?php
/**
 * The Header template for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<?php // Loads HTML5 JavaScript file to add support for HTML5 elements in older IE versions. ?>
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->
<?php wp_head(); ?>
</head>
    
   <!-- NAVIGATION -->
    <nav class="fixed-top" id="navigation">
        <div class="container">
            <div class="row">
                <div class="center col-sm-12 col-lg-12">
                    <!-- LOGO -->
                    <a class="brand pull-left" href="./">
                        <img src="assets/images/logo.png" alt="Treble">
                    </a>
                    <!-- END LOGO -->

                    <!-- MOBILE MENU BUTTON -->
                    <div class="mobile-menu" data-toggle="collapse" data-target=".nav-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </div>
                    <!-- END MOBILE MENU BUTTON -->
                    
                    <!-- MAIN MENU -->
                    <ul id="main-menu" class="nav-collapse collapse">
                        <li><a href="#page-welcome">Home</a></li>
                        <li><a href="#page-work">Work</a></li>
                        <li><a href="#page-features">Features</a></li>
                        <li><a href="#page-about">About</a></li>
                        <li><a href="#page-blog">Blog</a></li>
                        <li><a href="#page-contact">Contact</a></li>
                    </ul>
                    <!-- END MAIN MENU -->
                    
                    <!-- SOCIAL ICONS -->
                    <div class="social-icons hover-big pull-right">
                        <a href="#" class="sicon-facebook"><i>Facebook</i></a>
                        <a href="#" class="sicon-twitter"><i>Twitter</i></a>
                        <a href="#" class="sicon-linkedin"><i>LinkedIn</i></a>
                        <a href="#" class="sicon-youtube"><i>Youtube</i></a>
                        <a href="#" class="sicon-pinterest"><i>Pinterest</i></a>
                    </div>
                    <!-- END SOCIAL ICONS -->
                </div>
            </div>
        </div>
    </nav>
    <!-- END NAVIGATION -->
</body></html>