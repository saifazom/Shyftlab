<?php
/*
* Template Name: Integrations Page Template 
*/

get_header();

?>

<div id="wireless-retail" class="o-panel o-panel--wireless-retail margin-top-140">
    <div class="c-wireless-retail">
        <div class="row ">
            <div class="small-24 medium-8 columns wow wow-visible">
                <a class="u-back" href="<?php bloginfo('url'); ?>/solutions/wireless-retail"><i class="fa fa-chevron-left"></i> Back</a>
                
                <div class="c-wireless-retail__title-box">
                    <h4 class="c-wireless-retail__small-title"><?php echo get_field('integrations_small_title'); ?></h4>
                    <h2 class="c-wireless-retail__title"><?php echo get_field('integrations_heading'); ?></h2>
                    <h3 class="c-wireless-retail__sub-title"><?php echo get_field('integrations_sub_heading'); ?></h3>

                    <a class="u-button u-button--white" href="<?php bloginfo('url'); ?>/contact"><span>Schedule a Demo</span></a>
                </div>
            </div>

            <div class="small-24 medium-16 columns wow wow-visible">
                <div class="c-wireless-retail__img">
                    <img src="<?php echo get_field('integrations_photo'); ?>" alt="">
                </div>
            </div>
        </div><!--/ WR Image -->

        <div id="c-wireless-retail__content" class="row c-wireless-retail__content">
            <div class="small-24 medium-11 columns wow wow-visible">
                <div class="c-wireless-retail__left-column">
                    <?php echo get_field('integrations_details_contents'); ?>
                </div>
            </div>
            <div class="small-24 medium-13 columns">
                <div class="c-wireless-retail__right-column">
                    <?php if( have_rows('integrations_items') ): 
                        while ( have_rows('integrations_items') ) : the_row(); ?>
                            <div class="c-wireless-retail__text-item wow wow-visible">
                                <img src="<?php the_sub_field('integrations_icon'); ?>" alt="">
                                <h3><?php the_sub_field('integrations_title'); ?></h3>
                                <p><?php the_sub_field('integrations_details'); ?></p>
                            </div>
                        <?php endwhile; 
                    endif; ?>
                </div>
            </div>
        </div>
    </div>
</div><!-- End Page Panel -->

<div id="iQMetrix-image" class="o-panel o-panel--iQMetrix-image">
    <div class="row c-iQMetrix-image">
        <div class="small-24 columns wow wow-visible">
            <img class="hide-for-small-only" src="<?php echo get_field('iQmetrix_photo'); ?>" alt="">
            <img class="show-for-small-only" src="<?php echo get_field('iQmetrix_mobile_photo'); ?>" alt="">
        </div>
    </div>
</div><!-- End iQMetrix-image Section -->

<div id="cta" class="o-panel o-panel--cta">
    <div class="row align-middle align-center c-cta wow wow-visible">
        <div class="small-24 medium-7 columns">
            <h2 class="c-cta__title"><?php echo get_field('cta_title'); ?></h2>
        </div>
        <div class="small-24 medium-10 large-12 columns">
            <div class="c-cta__text"><?php echo get_field('cta_details'); ?></div>
        </div>
        <div class="small-24 medium-7 large-5 columns">
            <a class="u-button u-button--cta" href="<?php echo get_field('button_link'); ?>"><span>Schedule a Demo</span></a>
        </div>
    </div>
</div><!-- End Cta Panel -->

<?php get_footer(); ?>