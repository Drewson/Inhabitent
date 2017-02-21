<?php /* Template Name: page-about */ ?>

<?php get_header(); ?>
	<main id="main" class="site-main" role="main">
		<header class="about-head">
		</header>
		<div id="content">
		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'template-parts/content', 'page' ); ?>

		<?php endwhile; // End of the loop. ?>
		</div>
	</main><!-- #main -->

<?php get_footer(); ?>
