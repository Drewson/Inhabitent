<?php
/**
 * The main template file.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

<!--THIS PAGE SHOWS AFTER SEARCHING IN THE HEADER-->

<div id="content" class="site-content">
	<div id="primary" class="content-area content">
		<main id="main" class="site-main" role="main">
		<h1 class="search-title">Search Results For: <?php the_title();?></h1>
		<?php if ( have_posts() ) : ?>

			<?php if ( is_home() && ! is_front_page() ) : ?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>
			<?php endif; ?>

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<h2><?php the_title();?></h2>
				<p><?php the_excerpt(); ?></p>
				<button><a href="<?php the_permalink(); ?> ">Read More &rarr;</a></button>
			<?php endwhile; ?>

			<?php the_posts_navigation(); ?>

		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>

</div>
<?php get_footer(); ?>
