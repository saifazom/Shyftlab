<div class="row c-testimonial">
    <div class="small-24 medium-8 columns c-testimonial__heading-col">
        <h3 class="c-testimonial__sub-heading">TESTIMONIALS</h3>
        <h2 class="c-testimonial__heading">What our customers are saying</h2>
    </div><!--/ Heading -->

    <div class="small-24 medium-16 columns c-testimonial__col">
        <div class="js-testimonial">
            <?php

                $testimonials = new WP_Query( 
                    array(
                        'post_type' => 'testimonial',
                        'posts_per_page' => -1,
                    ) 
                );
            ?>
            <?php if($testimonials->have_posts()): ?>
                <?php while($testimonials->have_posts()): $testimonials->the_post(); ?>
                    <div class="c-testimonial__item">
                        <div class="c-testimonial__text">
                            <?php echo get_field('testimonial'); ?>
                        </div><!--/ Detail Text -->

                        <div class="c-testimonial__name">
                            <span><?php the_title(); ?> | <?php echo get_field('company'); ?></span> <img src="<?php echo get_field('logo'); ?>" alt="">
                        </div><!--/ Name -->
                    </div><!--/ Testimonial Item -->
                <?php endwhile; wp_reset_query(); ?>
            <?php endif; ?>
        </div>
        <div class="s-testimonial-controller"></div>

        <a href="javascript:void(0)" id="testimonial-next" class="c-testimonial__next slick-arrow">
            <i class="fa fa-angle-right"></i>
        </a>
    </div><!--/ Testimonial -->
</div>
