<?php

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

get_header();

global $post;

$default_avatar = get_stylesheet_directory_uri() . '/assets/img/about-img1.png';

?>
<div id="wr-intro" class="o-panel o-panel--wr-intro margin-top-140">
    <div class="row c-wr-intro">
        <div class="small-24 medium-9 columns wow wow-visible">
            <div class="c-wr-intro__pagination">
                <a href="<?php bloginfo('url'); ?>/solutions">Solutions </a>
                <span><?php the_title(); ?></span>
            </div><!--/ Pagination -->

            <h2 class="c-wr-intro__title"><?php echo get_field('bs_title'); ?></h2>

            <?php echo get_field('bs_text'); ?>

            <a class="u-button u-button--white" href="<?php echo get_field('bs_button_link'); ?>">Schedule a Demo</a>
        </div>
        <div class="small-24 medium-15 columns wow wow-visible">
            <div class="c-wr-intro__image">
                <img src="<?php echo get_field('bs_photo'); ?>" alt="">
            </div>
        </div>
    </div>
</div><!-- End Wireless Retail Intro -->

<div id="benefits" class="o-panel o-panel--benefits">
    <div class="c-benefits">
        <div class="row">
            <div class="small-24 columns c-benefits__header wow wow-visible">
                <img class="c-benefits__heading-bg" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/wr-title.png" alt="">
                <h2 class="c-benefits__heading">benefits</h2>
            </div>
        </div><!--/ Heading -->

        <?php if( have_rows('bs_benefits_items') ): 
            while ( have_rows('bs_benefits_items') ) : the_row(); ?>
                <div class="row align-middle c-benefits__item wow wow-visible">
                    <div class="columns c-benefits__image-col">
                        <div class="c-benefits__image">
                            <img src="<?php the_sub_field('bi_photo'); ?>" alt="">
                        </div>
                    </div>

                    <div class="columns c-benefits__text-col">
                        <div class="c-benefits__text">
                            <h3 class="c-benefits__title"><?php the_sub_field('bi_title'); ?></h3>
                            <?php the_sub_field('bi_text'); ?>
                        </div>
                    </div>
                </div><!--/ Benefits Item -->
            <?php endwhile; 
        endif; ?>
    </div>
</div><!-- End Benefits Panel -->

<div id="testimonial" class="o-panel o-panel--testimonial wow wow-visible">
    <?php include(TEMPLATEPATH.'/inc/testimonial.php'); ?>
</div><!-- End Testimonial Panel -->

<div id="integrations" class="o-panel o-panel--integrations">
    <div class="row align-center c-integrations">
        <div class="small-24 columns wow wow-visible">
            <h2 class="c-integrations__heading">integrations</h2>
        </div><!--/ Heading -->

        <?php if( have_rows('integrations') ): 
            while ( have_rows('integrations') ) : the_row(); ?>
                <div class="small-24 medium-8 columns wow wow-visible">
                    <div class="c-integrations__item">
                        <div class="c-integrations__item-wrap">
                            <div class="c-integrations__icon">
                                <img src="<?php the_sub_field('integrations_logo'); ?>" alt="">
                            </div>
                            <p><?php the_sub_field('integrations_text'); ?></p>

                            <a class="u-button" href="<?php the_sub_field('integrations_button_link'); ?>">Learn More</a>
                        </div>
                    </div>
                </div><!--/ Integrations Col -->
            <?php endwhile; 
        endif; ?>
    </div>
</div><!-- End Testimonial -->
    
<div id="related-posts" class="o-panel o-panel--related-posts o-panel--related-posts--solution">
    <div class="c-related-posts">
        <div class="row align-center c-related-posts__row c-related-posts__row--solutions">
            <div class="small-24 columns wow wow-visible">
                <h2 class="c-related-posts__heading">More for Wireless Retail Teams</h2>

                <?php if( have_rows('blog_posts') ): ?>
                    <div class="js-related-posts">
                        <?php while ( have_rows('blog_posts') ) : the_row(); ?>

                            <?php 
                                $post_object = get_sub_field(blog_post);
                                //print_r($post_object);

                                $term_list = get_the_term_list( $post_object->ID, 'blog-category', '', ', ', '' );
                                $terms = get_the_terms( $post_object->ID , 'blog-category');
                            ?>
                            <div class="columns c-related-posts__item">
                                <div class="c-related-posts__text c-related-posts__text--solutions">
                                    <h3 class="c-related-posts__title">
                                        <a href="<?php echo get_permalink($post_object->ID); ?>"><?php echo get_the_title($post_object->ID); ?></a>
                                    </h3>

                                    <span class="c-related-posts__category-name"><?php echo $term_list; ?></span>
                                    <div class="c-related-posts__title-below">
                                        <div class="c-related-posts__date"><?php echo get_the_date('M d, Y', $post_object->ID); ?></div>
                                        <span class="c-related-posts__author">By 
                                            <?php //$author_id = $post->post_author; ?>
                                            <?php //echo get_avatar( $author_id ); ?>
                                            <?php echo get_the_author($post_object->ID); ?>
                                        </span>
                                    </div>
                                </div>
                            </div><!--/ Post Item -->
                        <?php endwhile; ?>
                    </div>
                <?php endif; ?>
            </div>

            <a href="javascript:void(0)" id="related-posts-next" class="c-related-posts__next slick-arrow">
                <i class="fa fa-angle-right"></i>
            </a>
        </div>
    </div>
</div><!-- End Related Posts Panel -->

<div id="cta" class="o-panel o-panel--cta">
    <div class="row align-middle align-center c-cta wow wow-visible">
        <div class="small-24 medium-7 columns">
            <h2 class="c-cta__title"><?php echo get_field('cta_title'); ?></h2>
        </div>
        <div class="small-24 medium-10 large-12 columns">
            <div class="c-cta__text"><?php echo get_field('cta_details'); ?></div>
        </div>
        <div class="small-24 medium-7 large-5 columns">
            <a class="u-button u-button--cta" href="<?php echo get_field('cta_button_link'); ?>"><span>Schedule a Demo</span></a>
        </div>
    </div>
</div><!-- End Cta Panel -->

<?php get_footer(); ?>