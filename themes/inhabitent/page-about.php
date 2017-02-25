<?php /* Template Name: page-about */ ?>

<?php get_header('home'); ?>

<!--THE ABOUT PAGE, IS DYNAMIC-->

	<main id="main" class="site-main page-about" role="main">
		<header class="about-head">
			<h1>About</h1>
		</header>
		<div id="content">
		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'template-parts/content', 'page' ); ?>

		<?php endwhile; // End of the loop. ?>
		</div>
	</main><!-- #main -->
 
<?php get_footer(); ?>
