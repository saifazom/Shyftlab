<?php
/*
* Template Name: Terms and Conditions Page Template 
*/

	get_header();

?>

<div id="" class="o-panel o-panel--page margin-top-140 margin-bottom-70">
	<div class="row c-page">
		<div class="small-24 columns wow wow-visible">
			<h2 class="c-page__title"><?php echo get_field('page_heading'); ?></h2>
			<h3 class="c-page__sub-title"><?php echo get_field('page_sub_heading'); ?></h3>

			<?php if( get_field('featured_image') ): ?>
			    <img src="<?php echo get_field('featured_image'); ?>" alt="" >
			<?php endif; ?>

			<div class="c-page__content">
				<br/>
				<?php echo get_field('page_contents'); ?>
			</div>
		</div>
	</div>
</div><!-- End Page Panel -->

<?php get_footer(); ?>