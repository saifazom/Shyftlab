<?php
/**********************************************************************
* R.One Creative Wordpress Theme   
* 
* File name:   
*      404.php
* Brief:       
*      404 Page
* Author:      
*      R.One Creative
* Author URI:
*      http://r1creative.net
* Contact:
*      info@r1creative.net
***********************************************************************/  
?>

<?php get_header(); ?>

<div id="404" class="o-panel o-panel--404 margin-top-140">
    <div class="row text-center c-404">
        <div class="small-24 columns">
            <div class="c-404__image">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/404.png" alt="">
            </div>
        </div><!--/ Image -->

        <div class="small-24 columns">
            <div class="c-inner-hero__text">
                <h2 class="c-inner-hero__title">Oops! Something went wrong.</h2>

                <p>Sorry, we can’t find the page you’re looking for. </p>

                <a class="u-button" href="<?php bloginfo('url'); ?>">Back Home</a>
            </div>
        </div><!--/ Text -->
    </div>
</div><!-- End 404 Panel -->

<?php get_footer(); ?>
