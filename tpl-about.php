<?php
/*
* Template Name: About Page Template 
*/

get_header();

?>

<div id="leadership-team" class="o-panel o-panel--leadership-team margin-top-140">
	<div class="row c-intro">
		<div class="small-24 medium-13 columns wow wow-visible">
			<h2 class="c-intro__title"><?php echo get_field('lt_heading'); ?></h2>
		</div>
		<div class="small-24 medium-11 columns wow wow-visible">
			<div class="c-intro__text">
				<?php echo get_field('lt_details'); ?>
			</div>
		</div>
	</div><!--/ Intro Section -->

	<div class="row c-bio align-center">
		<?php if( have_rows('bios') ): 
            while ( have_rows('bios') ) : the_row();?>
				<div class="small-24 medium-12 large-8 columns c-bio__col wow wow-visible">
					<div class="c-bio__box">
						<div class="c-bio__box-wrap">
							<div class="c-bio__image">
								<img src="<?php the_sub_field('bio_photo'); ?>" alt="">
							</div><!--/ Bio Image -->

							<div class="c-bio__details">
								<h3 class="c-bio__name"><?php the_sub_field('bio_name'); ?></h3>
								<div class="c-bio__designation"><?php the_sub_field('designation'); ?></div>
								
								<div class="c-bio__text">
									<p>
										<span class="c-bio__normal-text">
											<?php the_sub_field('details'); ?>
										</span>
										<span class="c-bio__more-text">
											<?php the_sub_field('more_text'); ?>
										</span>
									</p>
								</div>
							</div>

							<div class="c-bio__social">
								<?php if( have_rows('social_items') ): 
            						while ( have_rows('social_items') ) : the_row();?>
										<a href="<?php the_sub_field('social_link'); ?>" target="_blank"><i class="fa fa-<?php the_sub_field('social_name'); ?>"></i></a>
									<?php endwhile; 
        						endif ?>
							</div>
						</div>
					</div>
				</div><!--/ Bio Col -->
			<?php endwhile; 
        endif ?>
	</div><!--/ Bio Section -->
</div><!-- End Leadership Panel -->

<div id="about-shiftlab" class="o-panel o-panel--about-shiftlab">
	<div class="c-our-mission">
		<div class="c-our-mission__wrap">
			<div class="row c-our-mission__row">
				<div class="small-24 columns text-center">
					<h2 class="c-our-mission__title wow wow-visible" data-wow-delay="400ms"><?php echo get_field('mission_heading'); ?></h2>

					<div class="wow wow-visible" data-wow-delay="500ms">
						<?php echo get_field('mission_details'); ?>
					</div>
				</div>
			</div>
		</div>
	</div><!--/ Our Mission -->

	<div class="row c-about-shiftlab">
		<div class="small-24 medium-11 columns">
			<h4 class="c-about-shiftlab__sub-title"><?php echo get_field('section_4_sub_heading'); ?></h4>
			<h2 class="c-about-shiftlab__title wow wow-visible" data-wow-delay="400ms"><?php echo get_field('section_4_heading'); ?></h2>

			<div class="c-about-shiftlab__text wow wow-visible" data-wow-delay="500ms">
				<?php echo get_field('section_4_details'); ?>
			</div>
		</div>
		<div class="small-24 medium-13 columns">
			<div class="c-about-shiftlab__img wow wow-visible" data-wow-delay="400ms">
				<img src="<?php echo get_field('section_4_photo'); ?>" alt="">
			</div>
		</div>
	</div>
</div><!-- End About Shiftlab -->

<div id="why-shiftlab" class="o-panel o-panel--why-shiftlab" style="background-image: url(<?php echo get_field('section_5_photo_1'); ?>);">
	<div class="row c-why-shiftlab text-center">
		<div class="small-24 columns">
			<div class="u-svg-animation c-why-shiftlab__icon">
                <object id="<?php echo str_replace('.svg', '', get_field('section_5_svg_icon')); ?>" type="image/svg+xml" data="<?php echo get_stylesheet_directory_uri(); ?>/assets/svg_v2/<?php echo get_field('section_5_svg_icon'); ?>"></object>
            </div>

			<h2 class="c-why-shiftlab__title wow wow-visible" data-wow-delay="400ms"><?php echo get_field('section_5_heading'); ?></h2>

			<div class="wow wow-visible" data-wow-delay="500ms">
				<?php echo get_field('section_5_details'); ?>
			</div>

			<div class="c-why-shiftlab__more">
				<a class="u-button" href="<?php echo get_field('section_5_button_link'); ?>"><span>Get in Touch</span></a>
			</div>
		</div>
	</div>

	<div class="c-why-shiftlab__layer2" data-bottom-center="transform: translateY(-70%);" data-center="transform: translateY(-100%)" style="background-image: url(<?php echo get_field('section_5_photo_2'); ?>);">
		<img src="<?php echo get_field('section_5_photo_2'); ?>" alt="">
	</div>
</div><!-- End Why Shiftlab -->

<?php get_footer(); ?>