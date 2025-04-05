<?php get_header(); ?>

<?php //$url = bloginfo('url') . 'page/2/'; ?>

<?php
	if(is_tax('blog-category')){
	    $current_term = get_term_by( 'slug', get_query_var( 'term' ), get_query_var( 'taxonomy' ) );
        $current_term_id = $current_term->term_id;
        $pagination = get_next_posts_page_link();
	}else{
        $current_term_id = '';
        // $pagination = $url;
        $pagination = 'https://r1creativedev.net/project883/blog/page/2/';
    }

    global $wp_query;
    $default_posts_per_page = get_option( 'posts_per_page' );
    $post_count = $wp_query->post_count;
?>

<div id="blog" class="o-panel o-panel--blog margin-top-140">
	<div class="c-blog">
		<div class="row c-blog__categories">
			<div class="small-24 cloumns">

				<?php
                    $taxonomy = 'blog-category';
                    $terms = get_terms($taxonomy);
                ?>

				<ul>
					<li class="<?php if(!is_tax('blog-category')) echo 'active'; ?>"><a href="<?php bloginfo('url'); ?>/blog">All</a></li>
					<?php foreach ( $terms as $term ) { ?>
						<li class="<?php if($current_term_id == $term->term_id) echo 'active'; ?>">
							<a href="<?php echo get_term_link($term->slug, $taxonomy); ?>"><?php echo $term->name; ?></a>
						</li> 
					<?php } ?>
				</ul>
			</div>
		</div><!--/ Blog Categories -->

		<?php if(have_posts()): ?>
			<div class="row c-blog__posts">
				<?php while(have_posts()): the_post(); 

					$term_list = get_the_term_list( $post->ID, 'blog-category', '', ', ', '' );
				?>
					<div class="small-24 columns c-blog__post-item">
						<h2 class="c-blog__title">
							<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
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
							<a class="c-blog__image" href="<?php the_permalink(); ?>">
								<?php the_post_thumbnail( 'full' ); ?>
							</a>
						<?php endif; ?>

						<div class="c-blog__details">
							<?php the_excerpt(); ?>

							<a class="u-button u-button--white" href="<?php the_permalink(); ?>"><span>Read More</span></a>
						</div>
					</div><!--/ Post Item -->
				<?php endwhile; ?>
			</div>
		<?php endif; ?>	

		<div class="row c-blog__footer">
			<div class="small-24 columns text-center">
				<div class="page-load-status" style="text-align: center; display: none; ">
		            <p class="infinite-scroll-request">Loading more ...</p>
		        </div>
		        <?php if($post_count == $default_posts_per_page): ?>
		            <a class="c-blog__next-post-link" href="<?php echo $pagination; ?>" style="visibility: hidden;">Next</a>
		            <a class="c-blog__see-more" href="<?php echo $pagination; ?>">SEE MORE <i class="fa fa-angle-down" aria-hidden="true"></i></a>
		        <?php endif; ?>
	        </div>
		</div>
	</div>
</div><!-- End Blog Panel -->

<div id="newsletter" class="o-panel o-panel--newsletter">
	<div class="row c-newsletter align-middle align-center">
		<h3 class="c-newsletter__title">Sign up for the newsletter</h3>

		<div class="c-newsletter__form">
			<?php echo do_shortcode( '[gravityform id=2 title=false description=false ajax=true tabindex=49]' ); ?>
		</div>
	</div>
</div><!-- End Blog Panel -->

<?php get_footer(); ?>