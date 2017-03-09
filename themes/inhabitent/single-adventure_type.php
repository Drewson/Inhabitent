<?php
/**
 * The template for displaying all single posts.
 *
 * @package RED_Starter_Theme
 */

get_header('home'); ?>
	<div class="content-area adventure">
		<main id="main" class="site-main" role="main">

		<?php while ( have_posts() ) : the_post(); ?>
            <div class="adventure-img">
                <?php the_post_thumbnail(  ); ?>
            </div>
            <div class="adventure-text">
                <h2><?php the_title(); ?></h2>
				<p class="author"><?php the_author(); ?></p>
                <p><?php the_content(); ?></p>
                <a class="read-more" href="http:/www.facebook.com"><i class="fa fa-facebook"></i>Like</a>
                <a class="read-more" href="http:/www.twitter.com"><i class="fa fa-twitter"></i>Tweet</a>
                <a class="read-more" href="http:/www.pintrest.com"><i class="fa fa-pinterest"></i>Pin</a>
            </div>
		<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->
</div>
<?php get_footer(); ?>
