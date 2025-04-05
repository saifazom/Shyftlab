<?php
/*
* Template Name: solutions Page Template 
*/

get_header();

?>
<div id="wr-intro" class="o-panel o-panel--wr-intro margin-top-140">
    <div class="row c-wr-intro c-wr-intro--solutions wow wow-visible">
        <div class="small-24 medium-13 columns">
            <h2 class="c-wr-intro__title" style="margin-top: -4px;">Business Solutions </h2>
        </div>
        <div class="small-24 medium-11 columns">
            <p>Shiftlab empowers teams to make informed workforce management decisions and evaluate their cost-effectiveness in real-time.</p>
        </div>
    </div>
</div><!-- End Wireless Retail Intro -->

<div id="solutions" class="o-panel o-panel--solutions">
    <div class="c-solutions">
        <?php
            $solutions = new WP_Query( 
                array(
                    'post_type' => 'solutions',
                    'posts_per_page' => -1,
                ) 
            );
        ?>
        <?php if($solutions->have_posts()): ?>
            <?php while($solutions->have_posts()): $solutions->the_post(); ?>
                <div class="row align-middle c-solutions__item wow wow-visible">
                    <div class="small-24 medium-14 columns c-solutions__text-col">
                        <div class="c-solutions__text">
                            <h2 class="c-solutions__title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                            <h3 class="c-solutions__sub-title"><?php echo get_field('solutions_sub_title'); ?></h3>

                            <div class="c-solutions__image show-for-small-only">
                               <a href="<?php the_permalink(); ?>">
                                    <?php the_post_thumbnail('full'); ?>
                                </a>
                            </div>
                            <p><?php echo get_field('solutions_short_description'); ?></p>

                            <a class="u-button u-button--white" href="<?php the_permalink(); ?>">Learn More</a>
                        </div>
                    </div>
                    <div class="small-24 medium-10 columns c-solutions__image-col hide-for-small-only">
                        <div class="c-solutions__image">
                           <a href="<?php the_permalink(); ?>">
                                <?php the_post_thumbnail('full'); ?>
                            </a>
                        </div>
                    </div>
                </div><!--/ Benefits Item -->
            <?php endwhile; wp_reset_query(); ?>
        <?php endif; ?>
    </div>
</div><!-- End Benefits Panel -->

<div id="cta" class="o-panel o-panel--cta">
    <div class="row align-middle align-center c-cta wow wow-visible">
        <div class="small-24 medium-15 large-19 columns">
            <h2 class="c-cta__title c-cta__title--solutions"><?php echo get_field('cta_title'); ?></h2>
        </div>

        <div class="small-24 medium-9 large-5 columns text-center">
            <a class="u-button u-button--cta u-button--cta--solutions" href="<?php echo get_field('cta_button_link'); ?>"><span>Schedule a Demo</span></a>
        </div>
    </div>
</div><!-- End Cta Panel -->

<?php get_footer(); ?>