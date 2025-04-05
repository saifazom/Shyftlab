<?php
/*
* Template Name: Contact Page Template 
*/

get_header();

?>

<div id="contact-intro" class="o-panel o-panel--contact-intro margin-top-140">
	<div class="row c-contact-intro">
		<div class="small-24 columns wow wow-visible">
			<h2 class="c-contact-intro__title"><?php echo get_field('intro_heading'); ?></h2>
		</div>
	</div>
</div><!-- End Intro Panel -->

<div id="schedule-demo" class="o-panel o-panel--schedule-demo">
    <div class="row c-schedule-demo">
        <div class="small-24 medium-12 columns c-schedule-demo__text-col">
            <div class="c-schedule-demo__text text-right wow wow-visible">
                <h2 class="c-schedule-demo__title u-heading"><?php echo get_field('Form_heading'); ?></h2>

                <div class="">
                    <?php echo get_field('form_details'); ?>
                </div>
            </div>
        </div>

        <div class="small-24 medium-12 columns c-schedule-demo__form-col">
            <div class="c-schedule-demo__form wow wow-visible">
                <?php echo do_shortcode( '[gravityform id=1 title=false description=false ajax=true tabindex=49]' ); ?>
            </div>
        </div>
    </div>
</div><!-- End Implement Panel -->

<?php get_footer(); ?>