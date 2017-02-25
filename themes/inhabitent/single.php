<?php
/**
 * The template for displaying all single posts.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>
<div id="content" class="site-content">
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'template-parts/content', 'single' ); ?>
				<button><i class="fa fa-facebook"></i><a href="http:/www.facebook.com"> Like</a></button>
                <button><i class="fa fa-twitter"></i><a href="http:/www.twitter.com">Tweet</a></button>
                <button><i class="fa fa-pinterest"></i><a href="http:/www.pintrest.com">Pin</a></button>
			<?php
				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;
			?>

		<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->
<?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>
