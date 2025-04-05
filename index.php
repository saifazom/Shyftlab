<?php 

get_header();

$homepage_id = 9;

?>
<div id="hero" class="o-panel o-panel--hero" style="background-image: url(<?php echo get_field('hero_photo', 'options'); ?>);">
    <!-- <div class="c-hero__layer-1" style="background-image: url(<?php echo get_field('hero_photo', 'options'); ?>);" data-0="background-position: 100% 0%;" data-1000="background-position: 100% 200%;"></div> -->
    <div class="c-hero__layer-2" style="background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/assets/img/hero-img-layer2.png);" data-0="top: 18%;" data-1400="top: 30%;"></div>
    <div class="c-hero__layer-3" style="background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/assets/img/hero-img-layer3.png);" data-10="top: 14%;" data-1400="top: 40%;"></div>
    
    <div class="row align-middle c-hero">
        <div class="small-24 medium-12 columns">
            <div class="c-hero__text-col">
                <h1 class="c-hero__title"><?php echo get_field('hero_heading', 'options'); ?></h1>

                <div class="c-hero__text">
                    <p><?php echo get_field('hero_details', 'options'); ?></p>
                </div>
                <a class="u-button u-button--white c-hero__learn-more-button js-go-to-href" href="#better-decisions">
                    <span>Learn More</span>
                </a>
            </div>

            <a class="c-hero__arrow-dwn js-arrow-dwn hide-for-small-only" id="home-scroll-down" href="#better-decisions">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_2" x="0px" y="0px" viewBox="0 0 25.166666 37.8704414" enable-background="new 0 0 25.166666 37.8704414" xml:space="preserve">
                    <path class="c-hero__stroke" fill="none" stroke="#c7c4b8" stroke-width="2.5" stroke-miterlimit="10" d="M12.5833445 36.6204414h-0.0000229C6.3499947 36.6204414 1.25 31.5204487 1.25 25.2871208V12.5833216C1.25 6.3499947 6.3499951 1.25 12.5833216 1.25h0.0000229c6.2333269 0 11.3333216 5.0999947 11.3333216 11.3333216v12.7037992C23.916666 31.5204487 18.8166714 36.6204414 12.5833445 36.6204414z"></path>
                    <path class="c-hero__scroller" fill="#c7c4b8" d="M13.0833359 19.2157116h-0.9192753c-1.0999985 0-1.9999971-0.8999996-1.9999971-1.9999981v-5.428606c0-1.0999994 0.8999987-1.9999981 1.9999971-1.9999981h0.9192753c1.0999985 0 1.9999981 0.8999987 1.9999981 1.9999981v5.428606C15.083334 18.315712 14.1833344 19.2157116 13.0833359 19.2157116z"></path>
                </svg>
            </a>
        </div>
        <div class="small-24 medium-12 columns">
            <!-- <img src="assets/img/hero-img-layer1.png" alt=""> -->
        </div>
    </div> 

    <div class="c-hero__layer-4" style="background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/assets/img/hero-img-layer4.png);" data-bottom="bottom: 0%;" data-top-bottom="bottom: 20%;"></div>
</div><!-- End Hero Panel --> 

<div id="better-decisions" class="o-panel o-panel--better-decisions">
    <div id="home-sticky-sidebar" class="c-sidebar">
        <div class="c-sidebar__text">
            <a class="js-demo-btn" href="#schedule-demo">Book a Demo</a>
        </div>
    </div>

    <div class="row align-middle c-better-decisions">
        <div class="small-24 medium-13 columns c-better-decisions__image-col">
            <div class="c-better-decisions__image">
                <img class="c-better-decisions__layer-1" src="<?php echo get_field('section_2_photo_1', 'options'); ?>" alt="">
                <img class="c-better-decisions__layer-2" src="<?php echo get_field('section_2_photo_2', 'options'); ?>" data-bottom-center="top: 30%;" data-center="top: 9%;" alt="">
            </div>
        </div>
        <div class="small-24 medium-11 columns c-better-decisions__text-col">
            <div class="c-better-decisions__text">
                <div class="u-svg-animation u-svg-animation--decisions">
                    <object id="<?php echo str_replace('.svg', '', get_field('section_2_svg_icon', 'options')); ?>" type="image/svg+xml" data="<?php echo get_stylesheet_directory_uri(); ?>/assets/svg_v2/<?php echo get_field('section_2_svg_icon', 'options'); ?>"></object>
                </div>
                <h2 class="u-heading wow wow-visible" data-wow-delay="400ms"><?php echo get_field('section_2_heading', 'options'); ?></h2>

                <div class="wow wow-visible" data-wow-delay="500ms">
                    <?php echo get_field('section_2_details', 'options'); ?>
                </div>
            </div>
        </div>
    </div>
</div><!-- End Better Decisions Panel -->

<div id="work-data" class="o-panel o-panel--work-data">
    <div class="row c-work-data">
        <div class="small-24 medium-12 columns">
            <div class="c-work-data__text text-right">
                <div class="u-svg-animation">
                    <object id="<?php echo str_replace('.svg', '', get_field('section_3_svg_icon', 'options')); ?>" type="image/svg+xml" data="<?php echo get_stylesheet_directory_uri(); ?>/assets/svg_v2/<?php echo get_field('section_3_svg_icon', 'options'); ?>"></object>
                </div>
                <h2 class="c-work-data__title u-heading wow wow-visible" data-wow-delay="400ms"><?php echo get_field('section_3_heading', 'options'); ?></h2>

                <div class="wow wow-visible" data-wow-delay="500ms">
                    <?php echo get_field('section_3_details', 'options'); ?>
                </div>
            </div>
        </div>
        <div class="small-24 medium-12 columns c-work-data__image-col">
            <div class="c-work-data__image">
                <img class="c-work-data__layer-1" src="<?php echo get_field('section_3_photo_1', 'options'); ?>" data-bottom-center="transform: translateY(35%);" data-center="transform: translateY(0%);" alt="">
                <img class="c-work-data__layer-2" src="<?php echo get_field('section_3_photo_2', 'options'); ?>" alt="">
            </div>
        </div>
    </div>
</div><!-- End Work Data Panel -->

<div id="schedule-management" class="o-panel o-panel--schedule-management" style="background-image: url(<?php echo get_field('section_4_photo_1', 'options'); ?>);">
    <div class="row c-schedule-management">
        <?php if( have_rows('section_contents', 'options') ): 
            while ( have_rows('section_contents', 'options') ) : the_row(); ?>
                <div class="small-24 medium-12 columns">
                    <div class="c-schedule-management__text">
                        <div class="u-svg-animation">
                            <object id="<?php echo str_replace('.svg', '', get_sub_field('section_4_svg_icon', 'options')); ?>" type="image/svg+xml" data="<?php echo get_stylesheet_directory_uri(); ?>/assets/svg_v2/<?php the_sub_field('section_4_svg_icon', 'options'); ?>"></object>
                        </div>
                        <h2 class="c-schedule-management__title u-heading wow wow-visible" data-wow-delay="400ms"><?php the_sub_field('section_4_heading', 'options'); ?></h2>

                        <div class="wow wow-visible" data-wow-delay="500ms">
                            <?php the_sub_field('section_4_details', 'options'); ?>
                        </div>
                    </div>
                </div>
            <?php endwhile; 
        endif; ?>
        
        <div class="small-24 columns">
            <div class="c-schedule-management__image text-center">
                <img class="c-schedule-management__layer-1" src="<?php echo get_field('section_4_photo_2', 'options'); ?>" data-bottom-center="transform: translateY(30%);" data-center="transform: translateY(0%);" alt="">
            </div>
        </div>
    </div>
</div><!-- End Schedule Management Panel -->

<div id="implement" class="o-panel o-panel--implement">
    <div class="row c-implement">
        <div class="small-24 columns">
            <div class="c-implement__text text-center">
                <div class="u-svg-animation">
                    <object id="<?php echo str_replace('.svg', '', get_field('section_5_svg_icon', 'options')); ?>" type="image/svg+xml" data="<?php echo get_stylesheet_directory_uri(); ?>/assets/svg_v2/<?php echo get_field('section_5_svg_icon', 'options'); ?>"></object>
                </div>
                <h2 class="c-implement__title u-heading wow wow-visible" data-wow-delay="400ms"><?php echo get_field('section_5_heading', 'options'); ?></h2>

                <div class="wow wow-visible" data-wow-delay="500ms">
                    <?php echo get_field('section_5_details', 'options'); ?>
                </div>
            </div>
        </div>
    </div>
</div><!-- End Implement Panel -->

<div id="schedule-demo" class="o-panel o-panel--schedule-demo">
    <div class="row c-schedule-demo">
        <div class="small-24 medium-12 columns c-schedule-demo__text-col">
            <div class="c-schedule-demo__text text-right">
                <h2 class="c-schedule-demo__title u-heading wow wow-visible" data-wow-delay="400ms"><?php echo get_field('schedule_demo_heading', 'options'); ?></h2>

                <div class="wow wow-visible" data-wow-delay="500ms">
                    <?php echo get_field('schedule_demo_details', 'options'); ?>
                </div>
            </div>
        </div>

        <div class="small-24 medium-12 columns c-schedule-demo__form-col">
            <div class="c-schedule-demo__form">
                <?php echo do_shortcode( '[gravityform id=1 title=false description=false ajax=true tabindex=49]' ); ?>
            </div>
        </div>
    </div>
</div><!-- End Implement Panel -->
    
<?php get_footer(); ?>