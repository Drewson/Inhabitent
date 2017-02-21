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
		<div class="recent-posts">
			<?php
   				$args = array( 'posts_per_page' => 3, 'post_type' => 'product', 'order' => 'ASC' );
   				$product_posts = get_posts( $args ); // returns an array of posts
			?>
			<?php foreach ( $product_posts as $post ) : setup_postdata( $post ); 
				setup_postdata( $post ); ?>
        		<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
        		<?php the_content(); ?>
			?>
			<?php endforeach; wp_reset_postdata(); ?>
		</div>

		<h2>Latest Adventures</h2>
		<div class="latest-adventures">
		</div>



	</div>

<?php get_footer(); ?>
