<?php
/*
* Template Name: Home Page Template 
*/

get_header();

?>

<div id="hero" class="o-panel o-panel--hero" style="background-image: url(<?php echo get_field('hero_photo'); ?>);">
    <div class="c-hero__layer-3" style="background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/assets/img/hero-img-layer1.png);" data-10="top: 16%;" data-1400="top: 0%;"></div>
    <div class="c-hero__layer-2" style="background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/assets/img/hero-img-layer3.png);" data-0="top: 2%;" data-1400="top: 15%;"></div>
    
    <div class="row align-middle c-hero">
        <div class="c-hero__text-col columns">
            <div class="c-hero__text-box">
                <h1 class="c-hero__title wow wow-visible" data-wow-delay="400ms"><?php echo get_field('hero_heading'); ?></h1>

                <div class="c-hero__text wow wow-visible" data-wow-delay="500ms">
                    <p><?php echo get_field('hero_details'); ?></p>
                </div>
                <a class="u-button u-button--white c-hero__learn-more-button js-go-to-href" href="#better-decisions">
                    <span>Learn More</span>
                </a>
                <a class="u-button u-button--video" href="https://youtu.be/Yd6aVfBtk6o" target="_blank">
                    <span>Watch a Demo</span>
                </a>
            </div>

            <a class="c-hero__arrow-dwn js-arrow-dwn" id="home-scroll-down" href="#better-decisions">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_2" x="0px" y="0px" viewBox="0 0 25.166666 37.8704414" enable-background="new 0 0 25.166666 37.8704414" xml:space="preserve">
                    <path class="c-hero__stroke" fill="none" stroke="#c7c4b8" stroke-width="2.5" stroke-miterlimit="10" d="M12.5833445 36.6204414h-0.0000229C6.3499947 36.6204414 1.25 31.5204487 1.25 25.2871208V12.5833216C1.25 6.3499947 6.3499951 1.25 12.5833216 1.25h0.0000229c6.2333269 0 11.3333216 5.0999947 11.3333216 11.3333216v12.7037992C23.916666 31.5204487 18.8166714 36.6204414 12.5833445 36.6204414z"></path>
                    <path class="c-hero__scroller" fill="#c7c4b8" d="M13.0833359 19.2157116h-0.9192753c-1.0999985 0-1.9999971-0.8999996-1.9999971-1.9999981v-5.428606c0-1.0999994 0.8999987-1.9999981 1.9999971-1.9999981h0.9192753c1.0999985 0 1.9999981 0.8999987 1.9999981 1.9999981v5.428606C15.083334 18.315712 14.1833344 19.2157116 13.0833359 19.2157116z"></path>
                </svg>
            </a>
        </div>
        <div class="c-hero__image-col columns">
            <div class="c-hero__image show-for-mobile">
                <img src="<?php echo get_field('photo_mobile'); ?>" alt="">
            </div>
        </div>
    </div> 

    <div class="c-hero__layer-4" style="background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/assets/img/hero-img-layer4.png);" data-bottom="bottom: 0%;" data-top-bottom="bottom: 20%;"></div>
</div><!-- End Hero Panel --> 

<div id="better-decisions" class="o-panel o-panel--better-decisions">
    <div id="home-sticky-sidebar" class="c-sidebar">
        <div class="c-sidebar__text">
            <a href="<?php bloginfo('url'); ?>/contact">Book a Demo</a>
        </div>
    </div>

    <div class="c-better-decisions">
        <div class="row align-middle c-better-decisions__row">
            <div class="small-24 medium-13 columns c-better-decisions__image-col">
                <div class="c-better-decisions__image">
                    <img class="c-better-decisions__layer-1" src="<?php echo get_field('section_2_photo_1'); ?>" alt="">
                    <img class="c-better-decisions__layer-2" src="<?php echo get_field('section_2_photo_2'); ?>" data-bottom-center="top: 30%;" data-center="top: 9%;" alt="">
                </div>
            </div>
            <div class="small-24 medium-11 columns c-better-decisions__text-col">
                <div class="c-better-decisions__text">
                    <div class="u-svg-animation u-svg-animation--decisions">
                        <object id="<?php echo str_replace('.svg', '', get_field('section_2_svg_icon')); ?>" type="image/svg+xml" data="<?php echo get_stylesheet_directory_uri(); ?>/assets/svg_v2/<?php echo get_field('section_2_svg_icon'); ?>"></object>
                    </div>
                    <h2 class="u-heading wow wow-visible" data-wow-delay="400ms"><?php echo get_field('section_2_heading'); ?></h2>

                    <div class="wow wow-visible" data-wow-delay="500ms">
                        <?php echo get_field('section_2_details'); ?>
                    </div>
                </div>
            </div>
        </div><!--/ Top Contents -->

        <div class="row c-better-decisions__columns">
            <?php if( have_rows('section2_columns') ): 
                while ( have_rows('section2_columns') ) : the_row();?>
                    <div class="small-24 medium-8 columns">
                        <h3 class="u-heading-small wow wow-visible" data-wow-delay="400ms"><?php the_sub_field('column_title'); ?></h3>

                        <div class="wow wow-visible" data-wow-delay="500ms">
                            <?php the_sub_field('column_description'); ?>
                        </div>
                    </div>
                <?php endwhile; 
            endif ?>

            <div class="small-24 columns text-center c-better-decisions__more-button">
                <a class="u-button" href="<?php echo get_field('section2_button_link'); ?>"><span>See Shiftlab in Action</span></a>
            </div>
        </div>
    </div>
</div><!-- End Better Decisions Panel -->

<div id="work-data" class="o-panel o-panel--work-data">
    <div class="row c-work-data">
        <div class="small-24 columns text-center">
            <h2 class="c-work-data__heading wow wow-visible" data-wow-delay="500ms"><?php echo get_field('section_3_heading'); ?></h2>
        </div>

        <div class="small-24 medium-24 large-8">
            <div class="c-work-data__text text-right">
                <div class="wow wow-visible" data-wow-delay="500ms">
                    <?php echo get_field('section_3_left_side_details'); ?>
                </div>
            </div>
        </div>
        <div class="small-24 medium-24 large-16">
            <div class="c-work-data__white-box">
                <?php if( have_rows('white_box_contents') ): 
                    while ( have_rows('white_box_contents') ) : the_row();?>
                        <div class="c-work-data__text-box">
                            <h3 class="u-heading-small wow wow-visible" data-wow-delay="400ms"><?php the_sub_field('white_box_title'); ?></h3>

                            <div class="wow wow-visible" data-wow-delay="500ms">
                                <?php the_sub_field('white_box_details'); ?>
                            </div>
                        </div><!--/ Text Box -->
                    <?php endwhile; 
                endif; ?>
                <div class="clearfix"></div>

                <div class="c-work-data__more-button text-center">
                    <a class="u-button" href="<?php echo get_field('section_3_button_link'); ?>"><span>Explore How Shiftlab Can Support Your Goals</span></a>
                </div>
            </div>
        </div>
    </div>
</div><!-- End Work Data Panel -->

<div id="testimonial" class="o-panel o-panel--testimonial">
    <?php include(TEMPLATEPATH.'/inc/testimonial.php'); ?>
</div><!-- End Testimonial Panel -->

<div id="schedule-management" class="o-panel o-panel--schedule-management" style="background-image: url(<?php echo get_field('features_photo_2'); ?>);">
    <div class="row c-schedule-management">
        <div class="small-24 columns c-schedule-management__header">
            <h2 class="c-schedule-management__heading"><?php echo get_field('features_heading'); ?></h2>
            <?php the_sub_field('features_details'); ?>
        </div>

        <?php if( have_rows('features_content') ): 
            while ( have_rows('features_content') ) : the_row(); ?>
                <div class="small-24 medium-8 columns">
                    <div class="c-schedule-management__text">
                        <div class="u-svg-animation">
                            <object id="<?php echo str_replace('.svg', '', get_sub_field('features_svg_icon')); ?>" type="image/svg+xml" data="<?php echo get_stylesheet_directory_uri(); ?>/assets/svg_v2/<?php the_sub_field('features_svg_icon'); ?>"></object>
                        </div>
                        <h3 class="c-schedule-management__title wow wow-visible" data-wow-delay="400ms"><?php the_sub_field('features_title'); ?></h3>

                        <div class="wow wow-visible" data-wow-delay="500ms">
                            <?php the_sub_field('features_details'); ?>
                        </div>
                    </div>
                </div><!--/ Features Col -->
            <?php endwhile; 
        endif; ?>

        <div class="small-24 medium-8 columns c-schedule-management__more">
            <div class="c-schedule-management__text">
                <a href="<?php echo get_field('features_button_link'); ?>">Explore More Features</a>
            </div>
        </div>
        
        <div class="small-24 columns">
            <div class="c-schedule-management__image text-center">
                <img class="c-schedule-management__layer-1" src="<?php echo get_field('features_photo_1'); ?>" data-bottom-center="transform: translateY(30%);" data-center="transform: translateY(0%);" alt="">
            </div>
        </div>
    </div>
</div><!-- End Schedule Management Panel -->

<div id="implement" class="o-panel o-panel--implement">
    <div class="row c-implement">
        <div class="small-24 columns text-center">
            <h2 class="c-implement__title wow wow-visible" data-wow-delay="400ms"><?php echo get_field('schedule_demo_heading'); ?></h2>

            <div class="c-implement__text wow wow-visible" data-wow-delay="500ms">
                <?php echo get_field('schedule_demo_details'); ?>

                <a class="u-button" href="<?php echo get_field('schedule_demo_button_link'); ?>"><span>Schedule a Demo</span></a>
            </div>
        </div>
    </div>
</div><!-- End Implement Panel -->

<?php get_footer(); ?>