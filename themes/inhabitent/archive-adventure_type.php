<?php
/**
 * The main template file.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>
<div id="content" class="site-content">
	<div class="content-area content">
		<main id="main" class="site-main" role="main">
		<h1 class="adventure-title">Latest Adventures</h1>
		<?php if ( have_posts() ) : ?>

			<?php if ( is_home() && ! is_front_page() ) : ?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>
			<?php endif; ?>

			<?php /* Start the Loop */ ?>

			<div class="adventure-home">
			<?php while ( have_posts() ) : the_post(); ?>
			
				<div class="adventure-pic">
					<?php the_post_thumbnail('large'); ?>
					<span class="colorMeDark"></span>
					<span class="adv-text">
						<p><?php the_title(); ?></p>
						<a class="read-more" href="<?php the_permalink(); ?> ">Read More</a>
					</span>
				</div>
				
			<?php endwhile; ?>

			</div>
			<?php the_posts_navigation(); ?>

		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

</div>
<?php get_footer(); ?>
