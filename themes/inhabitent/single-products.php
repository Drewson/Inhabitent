<?php
/**
 * The template for displaying all single posts.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>
<div id="content" class="site-content">
	<div class="content-area product">
		<main id="main" class="site-main" role="main">

		<?php while ( have_posts() ) : the_post(); ?>
        <div class="shop-item">
            <div class="item-img">
                <?php the_post_thumbnail( 'large' ); ?>
            </div>
            <div class="item-text">
                <h2><?php the_title(); ?></h2>
                <p class="price-text">$<?php echo CFS()->get('price');?></p>
                <p><?php the_excerpt(); ?></p>
                <a class="read-more" href="http:/www.facebook.com"><i class="fa fa-facebook"></i>Like</a>
                <a class="read-more" href="http:/www.twitter.com"><i class="fa fa-twitter"></i>Tweet</a>
                <a class="read-more" href="http:/www.pintrest.com"><i class="fa fa-pinterest"></i>Pin</a>
            </div>
        </div>

		<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->
</div>
<?php get_footer(); ?>
