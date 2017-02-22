<?php
/**
 * The main template file.
 *
 * @package RED_Starter_Theme
 */

get_header('home'); ?>

	<div class="hero-banner">
	</div>
	<div class="front-page-content">
		<h2>Shop Stuff</h2>
		<div class="shop-stuff">
		</div>

		<h2>Inhabitent Journal</h2>
		<div id="content" class="recent-posts">
			<?php
			$args = array( 'posts_per_page' => 3, 'post_type' => 'post', 'orderby' => 'post-date' );
			$myposts = get_posts( $args );
			foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
				<div class="recent-post">
					<span class="post-image"><?php the_post_thumbnail( 'small' ); ?></span>
					<span class="post-text"><?php red_starter_posted_on(); ?>
					<?php comments_number( '0 Comments', '1 Comment', '% Comments' ); ?>
					<span class="post-title"><?php the_title(); ?></span>
					<button>Read Entry</button>
				</div>
			<?php endforeach; 
			wp_reset_postdata();?>

			</ul>
		</div>

		<h2>Latest Adventures</h2>
		<div class="latest-adventures">
		</div>



	</div>

<?php get_footer(); ?>
