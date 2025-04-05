<?php
/**********************************************************************
* R.One Creative Wordpress Theme
*
* File name:
*      index.php
* Brief:
*      Default file for all pages if appropriate template doesn't found.
* Author:
*      R.One Creative
* Author URI:
*      http://r1creative.net
* Contact:
*      info@r1creative.net
***********************************************************************/
?>

<!DOCTYPE html>

<html <?php language_attributes(); ?>>

    <?php
        # Enable the code below if you want to output conditional
        # class for IE 6 - IE 8
        # echo r1()->printHtmlIeConditionals();
    ?>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <title><?php wp_title('|', true, 'right'); ?></title>
    <!-- <title>Shiftlab | A scalable workforce optimization platform</title> -->

    <link rel="apple-touch-icon" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/Shiftlab_AppleShare.png"  />
    <link rel="shortcut icon" type="image/png" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/favicon.ico"/>

    <?php 
        $featured_img_url = get_the_post_thumbnail_url(get_the_ID(), 'facebook_share_large'); 
        if(is_singular('blog') && $featured_img_url): 
    ?>
        <meta property="og:image" content="<?php echo $featured_img_url; ?>" />
    <?php else: ?>
        <meta property="og:image" content="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/Shiftlab_ShareImage.jpg" />
    <?php endif; ?>

    <?php r1()->mobileMeta(); ?>
    
    <link rel="stylesheet" href="https://use.typekit.net/rzn8gtt.css">
    <!--[if lt IE 9]>
        <script src="assets/js/html5shiv.js" type="text/javascript"></script>
    <![endif]-->

    <script type='text/javascript' src='<?php echo get_stylesheet_directory_uri(); ?>/assets/js/modernizr.js'></script>
    <?php wp_head(); ?>  
</head>

<body <?php body_class(); ?> id="<?php if( get_field('on_off', 'options') == 'On' ) { echo get_field('top_bar_fixed_class', 'options'); }else{ echo(' ');} ?>">

    <?php // if(isset($_GET['dev-debug'])): ?>
        <div class="shiftlab-preloader">
            <div class="ball-pulse">
                <div></div>
                <div></div>
                <div></div>
            </div>
        </div>
    <?php // endif; ?>

    <button class="js-menu-trgr u-menu-trigger">
        <span></span>
    </button>
    <div class="s-hamburger-menu">
        <div class="row align-middle s-hamburger-menu__wrap">
            <a class="s-hamburger-menu__logo" href="<?php bloginfo('url'); ?>">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/sticky-logo-2x.png" alt="">
            </a><!--/ Site Logo -->

            <div class="small-24 columns s-hamburger-menu__wrap-inner">
                <?php
                    $defaults = array(
                        'theme_location'  => 'hamburger-menu',
                        'menu'            => '',
                        'container'       => '',
                        'container_class' => '',
                        'container_id'    => '',
                        'menu_class'      => 's-hamburger-menu__items js-menu',
                        'menu_id'         => '',
                        'echo'            => true,
                        'fallback_cb'     => 'wp_page_menu',
                        'before'          => '',
                        'after'           => '',
                        'link_before'     => '',
                        'link_after'      => '',
                        'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                        'depth'           => 0,
                        'walker'          => ''
                    );

                    wp_nav_menu( $defaults );
                ?> 

                <div class="s-hamburger-menu__contact hide-for-small-only">
                    <h3 class="s-hamburger-menu__contact-title">CONTACT SUPPORT</h3>
                    <a href="mailto:support@myshiftlab.com">support@myshiftlab.com</a>
                </div>
            </div><!--/ Menu -->

            <div class="small-24 columns s-hamburger-menu__contact-col show-for-small-only">
                <div class="s-hamburger-menu__contact">
                    <h3 class="s-hamburger-menu__contact-title">CONTACT SUPPORT</h3>
                    <a href="mailto:<?php echo get_field('email_address', 'options'); ?>"><?php echo get_field('email_address', 'options'); ?></a>
                </div>
            </div>
        </div>
    </div><!--/ Hamburger Menu Wrap -->

    <?php if( get_field('on_off', 'options') == 'On' ) : ?>
        <div class="c-top-bar__wrap hide-for-small-only" style="padding-top: 60px;">
            <div id="top-bar" class="o-panel o-panel--top-bar">
                <div class="row align-middle c-top-bar">
                    <div class="small-24 columns">
                        <style type="text/css">
                            .c-top-bar__text:before {
                                background-image: url(<?php echo get_field('topbar_icon', 'options'); ?>);
                            }
                        </style>
                        <div class="c-top-bar__text">
                           <?php echo get_field('topbar_text', 'options'); ?> <a href="<?php echo get_field('topbar_button_link', 'options'); ?>">LEARN MORE</a>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--/ Top Bar -->

        <a href="<?php echo get_field('topbar_button_link', 'options'); ?>" class="c-top-bar__wrap show-for-small-only" style="padding-top: 60px;display: block;">
            <div id="top-bar" class="o-panel o-panel--top-bar">
                <div class="row align-middle c-top-bar">
                    <div class="small-24 columns">
                        <style type="text/css">
                            .c-top-bar__text:before {
                                background-image: url(<?php echo get_field('topbar_icon', 'options'); ?>);
                            }
                        </style>
                        <div class="c-top-bar__text">
                           <?php echo get_field('topbar_text', 'options'); ?> <span>LEARN MORE</span>
                        </div>
                    </div>
                </div>
            </div>
        </a><!--/ Top Bar -->
    <?php elseif( get_field('on_off', 'options') == 'Off' ) :  ?>
        <?php echo " "; ?>
    <?php endif; ?>

    <div id="header" class="o-panel o-panel--header">
        <div class="row align-middle align-justify c-header">
            <a class="c-header__logo" href="<?php bloginfo('url'); ?>">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/site-logo-2x.png" alt="">
            </a><!--/ Site Logo -->

            <div class="c-header__menu-wrap">
                <?php
                    $defaults = array(
                        'theme_location'  => 'primary-menu',
                        'menu'            => '',
                        'container'       => '',
                        'container_class' => '',
                        'container_id'    => '',
                        'menu_class'      => 's-main-menu',
                        'menu_id'         => '',
                        'echo'            => true,
                        'fallback_cb'     => 'wp_page_menu',
                        'before'          => '',
                        'after'           => '',
                        'link_before'     => '',
                        'link_after'      => '',
                        'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                        'depth'           => 0,
                        'walker'          => ''
                    );

                    wp_nav_menu( $defaults );
                ?>
        
                <a class="u-button c-header__more-btn u-button__green" href="<?php bloginfo('url'); ?>/contact"><span>Book a Demo</span></a>
            </div>
        </div><!--/ Header js-demo-btn -->
    </div><!-- End Header Panel -->



