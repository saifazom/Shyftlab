<?php
/*
* Template Name: Features Page Template 
*/

get_header();

?>

<div id="features-intro" class="o-panel o-panel--features-intro margin-top-140">
	<div class="row c-features-intro">
		<div class="small-24 columns text-center wow wow-visible">
			<h1 class="c-features-intro__title"><?php echo get_field('intro_heading'); ?></h1>
			<?php echo get_field('intro_details'); ?>
			<a class="u-button u-button--white c-features-intro__more js-arrow-dwn" href="<?php echo get_field('intro_button_link'); ?>">Explore Features</a>
		</div>
	</div>
</div><!-- End Features Intro Panel -->

<div id="shiftlab-advantage" class="o-panel o-panel--shiftlab-advantage">
	<div class="c-shiftlab-advantage">
        <div class="row align-middle c-shiftlab-advantage__row">
            <div class="small-24 medium-12 columns c-shiftlab-advantage__image-col">
                <div class="c-shiftlab-advantage__image">
                    <img class="c-shiftlab-advantage__layer-1" src="<?php echo get_field('section_2_photo_1', 'options'); ?>" alt="">
                    <img class="c-shiftlab-advantage__layer-2" src="<?php echo get_field('section_2_photo_2', 'options'); ?>" data-bottom-center="top: 30%;" data-center="top: 9%;" alt="">
                </div>
            </div>
            <div class="small-24 medium-12 columns c-shiftlab-advantage__text-col">
                <div class="c-shiftlab-advantage__text">
                    <div class="u-svg-animation u-svg-animation--decisions">
                        <object id="<?php echo str_replace('.svg', '', get_field('section_2_svg_icon')); ?>" type="image/svg+xml" data="<?php echo get_stylesheet_directory_uri(); ?>/assets/svg_v2/<?php echo get_field('section_2_svg_icon'); ?>"></object>
                    </div>
                    <h2 class="u-heading wow wow-visible" data-wow-delay="400ms"><?php echo get_field('section_2_heading'); ?></h2>

                    <div class="wow wow-visible" data-wow-delay="500ms">
                        <?php echo get_field('section_2_details'); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div><!-- End Shiftlab Advantage Panel -->

<div id="schedule-builder" class="o-panel o-panel--schedule-builder">
	<div class="row c-schedule-builder">
		<div class="small-24 columns text-center">
			<div class="u-svg-animation c-schedule-builder__svg-animation">
                <object id="<?php echo str_replace('.svg', '', get_field('section_3_svg_icon')); ?>" type="image/svg+xml" data="<?php echo get_stylesheet_directory_uri(); ?>/assets/svg_v2/<?php echo get_field('section_3_svg_icon'); ?>"></object>
            </div>

			<h2 class="c-schedule-builder__heading wow wow-visible" data-wow-delay="400ms"><?php echo get_field('section_3_heading'); ?></h2>
		</div><!--/ Header -->

		<?php if( have_rows('section_3_contents') ): 
            while ( have_rows('section_3_contents') ) : the_row();?>
				<div class="small-24 medium-8 columns">
					<div class="c-schedule-builder__text-box">
						<h3 class="c-schedule-builder__title  wow wow-visible" data-wow-delay="400ms"><?php the_sub_field('section_3_contents_title'); ?></h3>

						<div class="wow wow-visible" data-wow-delay="500ms">
							<?php the_sub_field('section_3_contents_details'); ?>
						</div>
					</div>
		 		</div><!--/ Column -->
		 	<?php endwhile; 
		endif; ?>


 		<div class="small-24 columns">
            <div class="c-schedule-builder__image text-center">
            	<div class="c-schedule-builder__layer-1" data-bottom-center="bottom: -170px;" data-center="bottom: -70px;">
	                <img src="<?php echo get_field('section_3_photo_1'); ?>" alt="">
	            </div>
                <div class="c-schedule-builder__layer-2">
	                <img src="<?php echo get_field('section_3_photo_2'); ?>" alt="">
	            </div>
            </div>
        </div><!--/ Layers -->
	</div>
</div><!-- End Schedule Builder -->

<div id="leadership-dashboard" class="o-panel o-panel--leadership-dashboard">
	<div class="row c-leadership-dashboard">
		<div class="small-24 medium-24 large-7 columns c-leadership-dashboard__left-col">
			<div class="u-svg-animation c-leadership-dashboard__svg-animation">
                <object id="<?php echo str_replace('.svg', '', get_field('section_4_svg_icon')); ?>" type="image/svg+xml" data="<?php echo get_stylesheet_directory_uri(); ?>/assets/svg_v2/<?php echo get_field('section_4_svg_icon'); ?>"></object>
            </div>

			<h2 class="c-leadership-dashboard__heading wow wow-visible" data-wow-delay="400ms"><?php echo get_field('section_4_heading'); ?></h2>
		</div>
		<div class="small-24 medium-24 large-17 columns c-leadership-dashboard__right-col">
			<div class="c-leadership-dashboard__items">
				<?php if( have_rows('section_4_columns') ): 
                	while ( have_rows('section_4_columns') ) : the_row();?>
						<div class="c-leadership-dashboard__item">
							<div class="c-leadership-dashboard__text">
								<h3 class="u-heading-small c-leadership-dashboard__title wow wow-visible" data-wow-delay="400ms"><?php the_sub_field('section_4_title'); ?></h3>

								<div class="wow wow-visible" data-wow-delay="500ms">
									<?php the_sub_field('section_4_details'); ?>
								</div>
							</div>
						</div><!--/ Item -->
					<?php endwhile; 
	            endif ?>
			</div>
		</div>
	</div>
</div><!-- End Leadership Dashboard Panel -->

<div id="metrics-tracking" class="o-panel o-panel--metrics-tracking">
	<div class="row c-metrics-tracking">
		<div class="small-24 columns text-center">
			<div class="u-svg-animation c-metrics-tracking__svg-animation">
                <object id="<?php echo str_replace('.svg', '', get_field('section_5_svg_icon')); ?>" type="image/svg+xml" data="<?php echo get_stylesheet_directory_uri(); ?>/assets/svg_v2/<?php echo get_field('section_5_svg_icon'); ?>"></object>
            </div>

            <h2 class="c-metrics-tracking__heading wow wow-visible" data-wow-delay="400ms"><?php echo get_field('section_5_heading'); ?></h2>
		</div><!--/ Header -->

		<div class="small-24 medium-11 columns">
			<div class="c-metrics-tracking__image wow wow-visible" data-wow-delay="400ms">
				<img src="<?php echo get_field('section_5_photo'); ?>" alt="">
			</div>
		</div>
		<div class="small-24 medium-13 columns">
			<div class="c-metrics-tracking__text">
				<?php if( have_rows('section_5_contents') ): 
                	while ( have_rows('section_5_contents') ) : the_row();?>
						<h3 class="u-heading-small wow wow-visible" data-wow-delay="400ms"><?php the_sub_field('section_5_title'); ?></h3>

						<div class="wow wow-visible" data-wow-delay="500ms">
							<?php the_sub_field('section_5_details'); ?>
						</div>
					<?php endwhile; 
	            endif ?>
			</div>
		</div>
	</div>
</div><!-- End Mmetrics Tracking Panel -->

<div id="workforce-analytics" class="o-panel o-panel--workforce-analytics">
	<div class="row c-workforce-analytics">
		<div class="small-24 columns show-for-medium-only">
			<div class="c-workforce-analytics__header">
				<div class="u-svg-animation c-workforce-analytics__svg-animation">
	                <object id="<?php echo str_replace('.svg', '', get_field('section_6_svg_icon')); ?>" type="image/svg+xml" data="<?php echo get_stylesheet_directory_uri(); ?>/assets/svg_v2/<?php echo get_field('section_6_svg_icon'); ?>"></object>
	            </div>

				<h2 class="c-workforce-analytics__heading wow wow-visible " data-wow-delay="400ms"><?php echo get_field('section_6_heading'); ?></h2>
			</div>
		</div><!--/ Heading For Mobile -->

		<div class="small-24 medium-12 columns">
			<div class="c-workforce-analytics__text">
				<div class="c-workforce-analytics__header hide-for-medium-only">
					<div class="u-svg-animation c-workforce-analytics__svg-animation">
		                <object id="<?php echo str_replace('.svg', '', get_field('section_6_svg_icon')); ?>" type="image/svg+xml" data="<?php echo get_stylesheet_directory_uri(); ?>/assets/svg_v2/<?php echo get_field('section_6_svg_icon'); ?>"></object>
		            </div>

					<h2 class="c-workforce-analytics__heading wow wow-visible " data-wow-delay="400ms"><?php echo get_field('section_6_heading'); ?></h2>
				</div><!--/ Heading -->
				<?php if( have_rows('section_6_contents') ): 
                	while ( have_rows('section_6_contents') ) : the_row();?>
						<h3 class="c-workforce-analytics__title wow wow-visible" data-wow-delay="400ms"><?php the_sub_field('section_6_title'); ?></h3>

						<div class="wow wow-visible" data-wow-delay="500ms">
							<?php the_sub_field('section_6_details'); ?>
						</div>
					<?php endwhile; 
	            endif ?>
			</div>
		</div>
		<div class="small-24 medium-12 columns">
			<div class="c-workforce-analytics__image-wrap">
				<img src="<?php echo get_field('section_6_photo_2'); ?>" alt="">

				<div class="c-workforce-analytics__image" data-bottom-center="bottom: -250px;" data-center="bottom: -120px;">
					<img src="<?php echo get_field('section_6_photo_1'); ?>" alt="">
				</div>
			</div>
		</div>
	</div>
</div><!-- End Workforce Analytics Panel -->

<div id="implement-with-ease" class="o-panel o-panel--implement-with-ease">
	<div class="row c-implement-with-ease">
		<div class="small-24 columns text-center">
			<div class="u-svg-animation c-implement-with-ease__svg-animation">
                <object id="<?php echo str_replace('.svg', '', get_field('section_7_svg_icon')); ?>" type="image/svg+xml" data="<?php echo get_stylesheet_directory_uri(); ?>/assets/svg_v2/<?php echo get_field('section_7_svg_icon'); ?>"></object>
            </div>

			<h2 class="c-implement-with-ease__title wow wow-visible" data-wow-delay="400ms"><?php echo get_field('section_7_heading'); ?></h2>

			<div class="wow wow-visible" data-wow-delay="500ms">
				<?php echo get_field('section_7_details'); ?>
			</div>

			<a class="u-button c-implement-with-ease__more" href="<?php echo get_field('section_7_button_link'); ?>"><span>Schedule a Demo</span></a>
		</div>
	</div>
</div><!-- End Implement With Ease Panel -->

<?php get_footer(); ?>