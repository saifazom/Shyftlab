<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

get_header();

global $post;

$default_avatar = get_stylesheet_directory_uri() . '/assets/img/about-img1.png';
$term_list = get_the_term_list( $post->ID, 'blog-category', '', ', ', '' );
?>

<div id="blog" class="o-panel o-panel--blog margin-top-140">
	<?php if(have_posts()): ?>
		<div class="row c-single-blog">
			<div class="small-24 columns">
				<a class="c-single-blog__back" href="<?php bloginfo('url'); ?>/blog"><i class="fa fa-chevron-left"></i> Back</a>

				<h2 class="c-blog__title">
					<?php the_title(); ?>
				</h2>

				<div class="c-blog__title-below">
					<div class="c-blog__category-name"><?php echo $term_list; ?></div>
					<div class="c-blog__date"><?php echo get_the_date('M d, Y'); ?></div>
					<div class="c-blog__author">
						<?php $author_id = $post->post_author; ?>
						<?php echo get_avatar( $author_id ); ?>
						<span><?php the_author(); ?></span>
					</div>
				</div>

				<?php if (has_post_thumbnail( $post->ID ) ): ?>
					<div class="c-blog__image">
						<?php the_post_thumbnail( 'full' ); ?>
					</div>
				<?php endif; ?>

				<!-- <div class="c-blog__details"> -->
					<?php // the_excerpt(); ?>
				<!-- </div> -->

				<?php the_content(); ?>
			</div>
			<div class="small-24 columns">
				<div class="c-inner-blog__social-wrap">
					<?php
                        global $post;
                        $share_url = get_the_permalink();
                        $share_title = $post->post_title;
                        $share_description = $post->post_excerpt;
                    ?>

					<span>Share</span> 
					<div class="c-inner-blog__social">
						<a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo $share_url; ?>" target="_blank">
							<i class="fa fa-facebook"></i>
						</a>
						<a href="https://twitter.com/intent/tweet?text=<?php echo $share_title; ?>&url=<?php echo $share_url; ?>" target="_blank">
							<i class="fa fa-twitter"></i>
						</a>
                        <a href="https://www.linkedin.com/sharing/share-offsite?url=<?php echo $share_url; ?>&title=<?php echo $share_title; ?>" target="_blank">
                            <i class="fa fa-linkedin"></i>
                        </a>
                        <a href="https://www.pinterest.com/shareArticle?mini=true&url=<?php echo $share_url; ?>&title=<?php echo $share_title; ?>" target="_blank">
                            <i class="fa fa-pinterest"></i>
                        </a>
						<a href="mailto:?&subject=<?php echo $share_title; ?>&body=<?php echo $share_url; ?>" target="_blank">
							<i class="fa fa-envelope"></i>
						</a>
					</div>
				</div>
			</div>
		</div><!--/ Details Content -->

		<div class="c-comments">
			<div class="row c-comments__row">
				<div class="small-24 columns c-comments__area">
					<?php comments_template( '/comments.php', true ); ?>
				</div>
			</div>
		</div>
	<?php endif; ?>
</div><!-- End Single Blog -->

<?php
    $terms = get_the_terms( $post->ID , 'blog-category');
    $term_ids = wp_list_pluck($terms,'term_id');

    $blogs = new WP_Query( 
        array(
            'post_type' => 'blog',
            'posts_per_page' => -1,
            'ignore_sticky_posts' => 1,
            'post__not_in'=>array($post->ID),
            'tax_query' => array(
                array(
                    'taxonomy' => 'blog-category',
                    'field' => 'id',
                    'terms' => $term_ids
                    // 'operator'=> 'IN'
                )
            ),
        ) 
    );
?>

<?php if($blogs->have_posts()): ?>
    <div id="related-posts" class="o-panel o-panel--related-posts">
        <div class="c-related-posts">
            <div class="row align-center c-related-posts__row">
                <div class="small-24 columns">
                    <h2 class="c-related-posts__heading">Related Posts</h2>
                    <div class="js-related-posts">
                        <?php while($blogs->have_posts()): $blogs->the_post(); ?>
                            <div class="columns c-related-posts__item">
                                <div class="c-related-posts__text">
                                    <h3 class="c-related-posts__title">
                                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                    </h3>

                                    <span class="c-related-posts__category-name"><?php echo $term_list; ?></span>
                                    <div class="c-related-posts__title-below">
                                        <div class="c-related-posts__date"><?php echo get_the_date('M d, Y'); ?></div>
                                        <span class="c-related-posts__author"><?php the_author(); ?></span>
                                    </div>
                                </div>
                            </div><!--/ Post Item -->
                        <?php endwhile; wp_reset_query(); ?>
                    </div>
                </div>

                <a href="javascript:void(0)" id="related-posts-next" class="c-related-posts__next slick-arrow">
                    <i class="fa fa-angle-right"></i>
                </a>
            </div>
        </div>
    </div><!-- End Related Posts Panel -->
<?php endif; ?>

<div id="newsletter" class="o-panel o-panel--newsletter">
	<div class="row c-newsletter align-middle align-justify">
		<h3 class="c-newsletter__title">Sign up for the newsletter</h3>

		<div class="c-newsletter__form">
			<?php echo do_shortcode( '[gravityform id=2 title=false description=false ajax=true tabindex=49]' ); ?>
		</div>
	</div>
</div><!-- End Blog Panel -->

<?php get_footer();